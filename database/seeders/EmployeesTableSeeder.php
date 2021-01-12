<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            [
                'name' => 'Ali',
            ],
            [
                'name' => 'Budi',
            ],
            [
                'name' => 'Cakra',
            ],
        ]);
    }
}
