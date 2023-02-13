<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit courses']);
        Permission::create(['name' => 'delete courses']);
        Permission::create(['name' => 'create courses']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit admins']);
        Permission::create(['name' => 'delete admins']);
        Permission::create(['name' => 'create admins']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('edit courses');
        $role1->givePermissionTo('delete courses');
        $role1->givePermissionTo('create courses');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit courses');
        $role2->givePermissionTo('delete courses');
        $role2->givePermissionTo('create courses');
        $role2->givePermissionTo('edit users');
        $role2->givePermissionTo('delete users');
        $role2->givePermissionTo('create users');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role3->givePermissionTo('edit admins');
        $role3->givePermissionTo('delete admins');
        $role3->givePermissionTo('create admins');

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'user@example.com',
            'phone' => '123456789',
        ]);
        $user->assignRole($role1);        

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'phone' => '987654321',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
            'phone' => '564783921',
        ]);
        $user->assignRole($role3);
    }
}