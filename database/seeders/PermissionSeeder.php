<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $moderator = Role::firstOrCreate(['name' => 'moderator']);
        $writer = Role::firstOrCreate(['name' => 'writer']);

        Permission::firstOrCreate(['name' => 'view any posts'])->syncRoles([$writer, $moderator]);
        Permission::firstOrCreate(['name' => 'view posts'])->syncRoles([$writer, $moderator]);
        Permission::firstOrCreate(['name' => 'create posts'])->syncRoles([$writer, $moderator]);
        Permission::firstOrCreate(['name' => 'update posts'])->syncRoles([$writer, $moderator]);
        Permission::firstOrCreate(['name' => 'delete posts'])->assignRole($moderator);
        Permission::firstOrCreate(['name' => 'restore posts'])->assignRole($moderator);
        Permission::firstOrCreate(['name' => 'destroy posts']);

        User::firstOrCreate([
            'email' => 'admin@material.com',
        ], [
            'name' => 'Super Admin',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($superadmin);

        User::firstOrCreate([
            'email' => 'moderator@material.com',
        ], [
            'name' => 'Moderator',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($moderator);

        User::firstOrCreate([
            'email' => 'writer@material.com',
        ], [
            'name' => 'Writer',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($writer);
    }
}
