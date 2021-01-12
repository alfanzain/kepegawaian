<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function list() {
        $attendances = Attendance::orderBy('created_at', 'desc')->get();
        
        return view('pages.attendances.list', [
            'attendances' => $attendances
        ]);
    }
    
    public function attendance() {
        $employees = Employee::all();

        return view('pages.attendances.attendance', [
            'employees' => $employees
        ]);
    }

    public function attend(Request $request) {
        $attendance = new Attendance;
        $attendance->employee_id = $request->input('employee_id');

        $attendance->save();

        return redirect()->route('attend-success');
    }
    
    public function attendSuccess()
    {
        return view('pages.attendances.success');
    }
}
