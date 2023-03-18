<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Traits\ForeignKeysHandling;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable,ForeignKeysHandling;

    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        $users = Post::factory(10)-> state([
            "description"=>"no description"
        ])-> create();
        $this->enableForeignKeys();
    }
}
