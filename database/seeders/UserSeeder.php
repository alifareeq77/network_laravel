<?php

namespace Database\Seeders;
use App\Models\User;
use Database\Seeders\Traits\ForeignKeysHandling;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Traits\TruncateTable;
class UserSeeder extends Seeder
{
    use TruncateTable,ForeignKeysHandling;
public function run(){
    $this->disableForeignKeys();
    $this->truncate('users');
    $users = User::factory(10)-> create();
    $this->enableForeignKeys();
}
}
