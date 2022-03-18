<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        Permission::create(['name' => 'admin.index'])->assignRole($role);

        Permission::create(['name' => 'admin.products.index'])->assignRole($role);
        Permission::create(['name' => 'admin.products.create'])->assignRole($role);
        Permission::create(['name' => 'admin.products.edit'])->assignRole($role);
        Permission::create(['name' => 'admin.products.destroy'])->assignRole($role);


    }
}
