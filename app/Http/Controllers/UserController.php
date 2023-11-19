<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    private string $folder = 'admin.users';
    private string $module = 'users';
    private string $role_id = '';

    public function __construct(
        private $model = new User(),
        private $role = new Role(),
    )
    {
        View::share([
            'title' => 'Người dùng',
            'module' => $this->module,
        ]);
    }

    //
    public function index(Request $request)
    {
        $role_id = \auth()->user()->roles->first()->id;
        $list = $this->getList($request, $role_id);
        $roles = $this->role->where('id', '>', $role_id)->get();
        return view("{$this->folder}.index", compact('list', 'roles', 'role_id'));
    }

    public function getList(Request $request, $role_id)
    {
        try {
            $query = $this->model->query()
                ->where('id', '<>', \auth()->user()->id)
                ->whereHas('roles', function ($q) use ($role_id) {
                    $q->where('role_id', '>', $role_id);
                });
            if ($request->filled('search')) {
                $search = $request->get('search');
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            }
            $query->where('id', '<>', \auth()->user()->id);
            if (!empty($request->get('r'))) {
                $query->whereHas('roles', function ($q) use ($request) {
                    $q->where('role_id', '=', $request->get('r'));
                });
            }
            $list = $query->paginate(10);
            $list->appends($request->all());
            return $list;
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], response()->HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateRole(Request $request)
    {
        try {
            $user = $this->model->findOrFail($request->get('id'));
            $user->syncRoles($request->get('role_id'));
            return response()->json([
                'status' => 'success',
                'message' => 'Cập nhật quyền thành công',
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
