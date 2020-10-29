<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BENEFICIARIES PERMISSIONS
        $permission = Permission::create(['name' => 'create beneficiaries']);
        $permission = Permission::create(['name' => 'edit beneficiaries']);
        $permission = Permission::create(['name' => 'delete beneficiaries']);
        
        // CLOUSURES PERMISSIONS
        $permission = Permission::create(['name' => 'create clousures']);
        $permission = Permission::create(['name' => 'edit clousures']);
        $permission = Permission::create(['name' => 'delete clousures']);

        // CONTRATCS PERMISSIONS
        $permission = Permission::create(['name' => 'create contracts']);
        $permission = Permission::create(['name' => 'edit contracts']);
        $permission = Permission::create(['name' => 'delete contracts']);

        // PROJECTS_DATA PERMISSIONS
        $permission = Permission::create(['name' => 'create projectsData']);
        $permission = Permission::create(['name' => 'edit projectsData']);
        $permission = Permission::create(['name' => 'delete projectsData']);

        // PROJECTS_INFO PERMISSIONS
        $permission = Permission::create(['name' => 'create projectsInfo']);
        $permission = Permission::create(['name' => 'edit projectsInfo']);
        $permission = Permission::create(['name' => 'delete projectsInfo']);

        // TRACKINGS PERMISSIONS
        $permission = Permission::create(['name' => 'create trackings']);
        $permission = Permission::create(['name' => 'edit trackings']);
        $permission = Permission::create(['name' => 'delete trackings']);
    }
}
