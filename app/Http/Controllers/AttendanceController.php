<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index() {
        $records = Attendance::all();
        return view('attendance', compact('records'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'entry' => 'required',
            'exit' => 'required',
        ]);

        Attendance::query()->create([
                'name'=>$request->input('name'),
                'date'=>$request->input('date'),
                'entry'=>$request->input('entry'),
                'exit'=>$request->input('exit'),
            ]);
        return redirect('/');
    }
}

