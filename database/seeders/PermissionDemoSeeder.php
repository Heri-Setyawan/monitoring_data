<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);

        //create roles and assign existing permissions
        $writerRole = Role::create(['name' => 'user']);
        $writerRole->givePermissionTo('view posts');
        $writerRole->givePermissionTo('create posts');
        $writerRole->givePermissionTo('edit posts');
        $writerRole->givePermissionTo('delete posts');

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view posts');
        $adminRole->givePermissionTo('create posts');
        $adminRole->givePermissionTo('edit posts');
        $adminRole->givePermissionTo('delete posts');
        $adminRole->givePermissionTo('publish posts');
        $adminRole->givePermissionTo('unpublish posts');


        // create demo users
        $user = User::factory()->create([
            'name' => 'Example user',
            'position' => 'user',
            'age' => '24',
            'address' => 'banguntapan',
            'email' => 'writer@qadrlabs.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($writerRole);

        $user = User::factory()->create([
            'name' => 'Example admin',
            'email' => 'admin@qadrlabs.com',
            'position' => 'admin',
            'age' => '24',
            'address' => 'banguntapan',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminRole);


    }

}
