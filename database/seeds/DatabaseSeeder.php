<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeneficiariesSeeder::class);
        $this->call(ClousuresSeeder::class);
        $this->call(ContractsSeeder::class);
        $this->call(ProjectsDataSeeder::class);
        $this->call(ProjectsInfoSeeder::class);
        $this->call(TrackingsSeeder::class);    
        $this->call(UsersSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
    }
}
