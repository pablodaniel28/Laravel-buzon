<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Blogger']);

        Permission::create(['name'=>'VistaMensaje.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'VistaMensaje.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'VistaMensaje.destroy'])->syncRoles([$role1]);


    }
}
