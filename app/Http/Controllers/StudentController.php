<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view("student.index", compact("students"));
    }

    public function create()
    {
        return view("student.create");
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|max:100",
            "email" => "required|max:256|email|unique:students,email",
            "phone" => "nullable|max:20",
            "address" => "nullable",
            "date_of_birth" => "required|date"
        ]);

        Student::create($validation);

        return redirect()->route("students.index")
            ->with("success", "Student created successfully");
    }

    public function show(Student $student)
    {
        return view("student.show", compact("student"));
    }

    public function edit(Student $student)
    {
        return view("student.edit", compact("student"));
    }

    public function update(Request $request, Student $student)
    {
        $validation = $request->validate([
            "name" => "required|max:100",
            "email" => [
                "required",
                "max:256",
                "email",
                Rule::unique("students", "email")->ignore($student->id)
            ],
            "phone" => "nullable|max:20",
            "address" => "nullable",
            "date_of_birth" => "required|date"
        ]);

        $student->update($validation);

        return redirect()->route("students.index")
            ->with("success", "Student updated successfully");
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route("students.index")
            ->with("success", "Student deleted successfully");
    }
}
