<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Publisher::insert([
            [
                'name' => 'NXB Kim Đồng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NXB Trẻ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NXB Văn Học',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NXB Thanh Niên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
