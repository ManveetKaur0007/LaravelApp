<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        // $this->call(UserSeeder::class);
        DB::table('categories')->truncate();
        $this->call(CategorySeeder::class);

        DB::table('articles')->truncate();
        $this->call(ArticleSeeder::class);

        DB::table('users')->truncate();
        $this->call(UserSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
