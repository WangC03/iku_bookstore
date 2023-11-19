<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $superAdmin = \App\Models\User::query()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => \Hash::make('12345678'),
        ]);
        $this->call([
            RoleSeeder::class,
            AuthorSeeder::class,
            GenreSeeder::class,
            LanguageSeeder::class,
            PublisherSeeder::class,
        ]);
        $superAdmin->assignRole('super-admin');
        Book::factory(20)->create();
        $this->call([
            AuthorBookSeeder::class,
            GenreBookSeeder::class,
        ]);

    }
}
