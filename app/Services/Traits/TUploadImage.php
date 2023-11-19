<?php

namespace App\Services\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait TUploadImage
{
    public function uploadFile($file, $nameOld = null): string
    {
        try {
            $disk = 'google';
//            dd($file);
            if (!$file) return false;
            if ($nameOld) if (Storage::disk($disk)->has($nameOld)) Storage::disk($disk)->delete($nameOld);
            $nameFile = uniqid('', true) . '-' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk($disk)->putFileAs('', $file, $nameFile);
            return $nameFile;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            abort(500, 'Upload file error');
        }
    }
}
