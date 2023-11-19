<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Author::insert([
            [
                'name' => 'Tô Hoài',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nguyễn Nhật Ánh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quỳnh Dao',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vũ Trọng Phụng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
