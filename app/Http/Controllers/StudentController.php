<?php

namespace App\Http\Controllers;

use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index() {
        $students = Student::paginate(20);

        return view("students.index", [
            "students" => $students,
        ]);
    }

    public function create() {
        return view("students.create");
    }

    public function store() {
        $attributes = request()->validate([
            "name" => "required",
            "birth_place" => "required",
            "dob" => "required",
            "nationality" => "required",
            "address" => "required",
            "email" => "required|unique:students",
            "phone_number" => "required|unique:students|numeric",
            "smp_name" => "required",
            "father_name" => "required",
            "mother_name" => "required",
            "parent_income" => "required|numeric",
            "image" => "required|image",
        ]);

        $attributes["image"] = request()->file("image")->store("images");

        Student::create($attributes);

        Alert::success("Sukses", "Pendaftaran sukses!");

        return redirect("/");
    }

    public function edit(Student $student) {
        return view("students.edit", [
            "student" => $student,
        ]);
    }

    public function update(Student $student) {
        $attributes = request()->validate([
            "name" => "required",
            "birth_place" => "required",
            "dob" => "required",
            "nationality" => "required",
            "address" => "required",
            "email" => "required|unique:students",
            "phone_number" => "required|unique:students|numeric",
            "smp_name" => "required",
            "father_name" => "required",
            "mother_name" => "required",
            "parent_income" => "required|numeric",
            "image" => "image",
        ]);

        if (isset($attributes["image"])) {
            $attributes["image"] = request()->file("image")->store("images");
        }

        $student->update($attributes);

        Alert::success("Sukses", "Edit data siswa sukses!");

        return redirect("/admin/students");
    }

    public function destroy(Student $student) {
        $student->delete();

        Alert::success("Sukses", "Hapus data siswa sukses!");

        return redirect("/admin/students");
    }
}
