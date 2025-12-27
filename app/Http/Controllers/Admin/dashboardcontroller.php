<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;  // ← MUST HAVE THIS
use App\Models\Enrollment;
use App\Models\Professor;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        // Get ALL 5 counts
        $departments = Department::count();  // ← THIS LINE WAS MISSING
        $students = Student::count();
        $courses = Course::count();
        $professors = Professor::count();
        $enrollment = Enrollment::count();
        
        // Pass ALL 5 to view
        return view('Admin.Dashboard.index', compact(
            'departments', 'students', 'courses', 'professors', 'enrollment'
        ));
    }
}