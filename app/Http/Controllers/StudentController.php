<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    const KHANH = 'students.';
    const KHANH_UP ='students';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::query()->latest('id')->paginate(5);

        return view(self::KHANH . __FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::KHANH . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::query()->create($request->all());

        return back()->with('msg','them oke');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view(self::KHANH . __FUNCTION__,compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view(self::KHANH . __FUNCTION__,compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update();

        return back()->with('msg','them oke');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return back()->with('msg','xo oke');
    }
}
