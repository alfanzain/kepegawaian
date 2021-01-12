<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function attendance() {
        $employees = Employee::all();

        return view('pages.attendances.attendance', [
            'employees' => $employees
        ]);
    }
}
