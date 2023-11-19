<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Language::insert([
            [
                'code' => 'en',
                'name' => 'Tiếng Anh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'vi',
                'name' => 'Tiếng Việt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'fr',
                'name' => 'Tiếng Pháp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
