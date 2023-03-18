<?php

namespace Database\Seeders;

use App\Models\Likes;
use Database\Seeders\Traits\ForeignKeysHandling;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
{
    use TruncateTable,ForeignKeysHandling;

    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        $users = Likes::factory(10)-> create();
        $this->enableForeignKeys();
    }
}
