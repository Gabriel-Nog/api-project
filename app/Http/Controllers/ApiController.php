<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllStudents() {
        $students = Student::all();
        return response($students, 200);
      }

      public function store(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();

        return response()->json([
            "message" => "student record created"
        ], 201);
      }

      public function getStudent($id) {
        if (Student::where('id', $id)->exists()) {
            $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      }

      public function updateStudent(Request $request, $id) {

      }

      public function deleteStudent ($id) {

      }
}
