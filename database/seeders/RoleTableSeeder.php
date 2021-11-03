<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Local Government Agent', 'Ward Agent', 'Polling Unit Agent','Member',];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name'=>$role]);
        }
    }
}
