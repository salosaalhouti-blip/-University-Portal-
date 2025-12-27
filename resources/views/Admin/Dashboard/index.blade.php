@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="mb-4">Welcome to University Portal</h1>
    <p class="lead mb-5">Manage your university’s departments, students, courses, professors, and enrollments all in one place.</p>
    
    <div class="row">
        <!-- Departments Card -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="display-4 fw-bold text-primary mb-2">{{ $departments ?? 0 }}</div>
                    <h5 class="card-title">Departments</h5>
                    <a href="{{ route('department.index') }}" class="btn btn-outline-primary btn-sm mt-2">View All</a>
                </div>
            </div>
        </div>
        
        <!-- Students Card -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="display-4 fw-bold text-success mb-2">{{ $students ?? 0 }}</div>
                    <h5 class="card-title">Students</h5>
                    <a href="{{ route('student.index') }}" class="btn btn-outline-success btn-sm mt-2">View All</a>
                </div>
            </div>
        </div>
        
        <!-- Courses Card -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="display-4 fw-bold text-warning mb-2">{{ $courses ?? 0 }}</div>
                    <h5 class="card-title">Courses</h5>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-warning btn-sm mt-2">View All</a>
                </div>
            </div>
        </div>
        
        <!-- Professors Card -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="display-4 fw-bold text-info mb-2">{{ $professors ?? 0 }}</div>
                    <h5 class="card-title">Professors</h5>
                    <a href="{{ route('professor.index') }}" class="btn btn-outline-info btn-sm mt-2">View All</a>
                </div>
            </div>
        </div>
        
        <!-- Enrollments Card -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="display-4 fw-bold text-danger mb-2">{{ $enrollments ?? 0 }}</div>
                    <h5 class="card-title">Enrollments</h5>
                    <a href="{{ route('enrollment.index') }}" class="btn btn-outline-danger btn-sm mt-2">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .display-4 {
        font-size: 3.5rem;
        font-weight: 700;
    }
    .lead {
        font-size: 1.25rem;
        color: #6c757d;
    }
</style>
@endsection