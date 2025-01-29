<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'student_id' => 'required|unique:students',
            'address' => 'required',
            'phone' => 'required'
            

        ]);

        Student::create($request->all());
        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'student_id' => 'required|unique:students,student_id,'.$student->id,
            'address' => 'required',
            'phone' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}