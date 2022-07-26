<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name' => 'Admin']);
        $rol2 = Role::create(['name' => 'empleado']);


        Permission::create(['name'=>'home'])->syncRoles($rol1, $rol2);

        Permission::create(['name' =>'admin.registro.index'])->syncRoles($rol1, $rol2);
        Permission::create(['name' => 'admin.registro.create'])->syncRoles($rol1, $rol2);
        Permission::create(['name' =>'admin.registro.edit'])->syncRoles($rol1, $rol2);
        Permission::create(['name' =>'admin.registro.destroy'])->assignRole($rol1);;



        // $rol1->permissions()->attach([1,2,3,..]);
        
    }
}
