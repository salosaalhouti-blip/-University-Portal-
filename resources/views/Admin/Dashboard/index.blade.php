@extends('layouts.app')

@section('Dashboard')

@section('content')
<div class="container">
    <!-- Page Header -->
    <div class="mb-4">
        <h1 class="mb-1">Welcome to University Portal</h1>
        <p class="text-muted">
            Manage your university's departments, students, courses, professors, and enrollments all in one place.
        </p>
    </div>

    <!-- Stats Grid -->
    <div class="row g-3">
        <!-- Departments -->
        <div class="col-md-4">
            <div class="card stat-card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-2">Departments</h6>
                            <h2 class="fw-bold mb-0" style="font-size: 2rem;">
                                {{ isset($departments) ? (int)$departments : 0 }}
                            </h2>
                        </div>
                        <div class="icon-wrapper bg-primary bg-opacity-10 p-2 rounded" style="width: 45px; height: 45px;">
                            <i class="fas fa-building text-primary"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('department.index') }}" class="text-decoration-none small">
                            View all <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Students -->
        <div class="col-md-4">
            <div class="card stat-card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-2">Students</h6>
                            <h2 class="fw-bold mb-0" style="font-size: 2rem;">
                                {{ $students ?? '0' }}
                            </h2>
                        </div>
                        <div class="icon-wrapper bg-success bg-opacity-10 p-2 rounded" style="width: 45px; height: 45px;">
                            <i class="fas fa-users text-success"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('student.index') }}" class="text-decoration-none small">
                            View all <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-4">
            <div class="card stat-card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-2">Courses</h6>
                            <h2 class="fw-bold mb-0" style="font-size: 2rem;">
                                {{ $courses ?? '0' }}
                            </h2>
                        </div>
                        <div class="icon-wrapper bg-warning bg-opacity-10 p-2 rounded" style="width: 45px; height: 45px;">
                            <i class="fas fa-book-open text-warning"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('course.index') }}" class="text-decoration-none small">
                            View all <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Professors -->
        <div class="col-md-4">
            <div class="card stat-card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-2">Professors</h6>
                            <h2 class="fw-bold mb-0" style="font-size: 2rem;">
                                {{ $professors ?? '0' }}
                            </h2>
                        </div>
                        <div class="icon-wrapper bg-info bg-opacity-10 p-2 rounded" style="width: 45px; height: 45px;">
                            <i class="fas fa-chalkboard-teacher text-info"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('professor.index') }}" class="text-decoration-none small">
                            View all <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-md-4">
            <div class="card stat-card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-2">Enrollments</h6>
                            <h2 class="fw-bold mb-0" style="font-size: 2rem;">
                                {{ $enrollment ?? '0' }}
                            </h2>
                        </div>
                        <div class="icon-wrapper bg-danger bg-opacity-10 p-2 rounded" style="width: 45px; height: 45px;">
                            <i class="fas fa-clipboard-list text-danger"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('enrollment.index') }}" class="text-decoration-none small">
                            View all <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.stat-card {
    transition: transform 0.2s ease;
    border-radius: 10px;
    height: 100%;
}

.stat-card:hover {
    transform: translateY(-3px);
}

.icon-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
}

.fw-bold {
    font-weight: 700;
    color: #1F2937;
}

.text-muted {
    color: #6B7280;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

h1 {
    color: #1F2937;
    font-weight: 600;
    font-size: 1.75rem;
}

p.text-muted {
    font-size: 1rem;
    text-transform: none;
    letter-spacing: normal;
}
</style>
@endsection
