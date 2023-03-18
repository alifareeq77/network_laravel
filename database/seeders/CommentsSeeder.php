<?php

namespace Database\Seeders;

use App\Models\Comments;
use Database\Seeders\Traits\ForeignKeysHandling;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    use TruncateTable,ForeignKeysHandling;

    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        $users = Comments::factory(10)-> create();
        $this->enableForeignKeys();
    }
}
