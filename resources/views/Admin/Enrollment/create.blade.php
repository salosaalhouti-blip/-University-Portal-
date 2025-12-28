@extends('layouts.app')

@section('title', 'Add Enrollment')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Add New Enrollment</h3>
        <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">
            ← Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('enrollment.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="studentId" class="form-label">Student *</label>
                    <select class="form-control" id="studentId" name="studentId" required>
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ old('studentId') == $student->id ? 'selected' : '' }}>
                                {{ $student->name }} ({{ $student->email ?? 'N/A' }})
                            </option>
                        @endforeach
                    </select>
                    @error('studentId')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="courseId" class="form-label">Course *</label>
                    <select class="form-control" id="courseId" name="courseId" required>
                        <option value="">Select Course</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" {{ old('courseId') == $course->id ? 'selected' : '' }}>
                                {{ $course->name }} ({{ $course->symbol }})
                            </option>
                        @endforeach
                    </select>
                    @error('courseId')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="professorId" class="form-label">Professor *</label>
                    <select class="form-control" id="professorId" name="professorId" required>
                        <option value="">Select Professor</option>
                        @foreach($professors as $professor)
                            <option value="{{ $professor->id }}" {{ old('professorId') == $professor->id ? 'selected' : '' }}>
                                {{ $professor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('professorId')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mark" class="form-label">Mark (Optional)</label>
                    <input type="number" class="form-control" id="mark" 
                           name="mark" value="{{ old('mark') }}" 
                           min="0" max="100" step="0.1"
                           placeholder="Enter mark (0-100)">
                    @error('mark')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-button type="add" label="Save Enrollment" />
                    <x-button type="secondary" label="Cancel" href="{{ route('enrollment.index') }}" />
                </div>
            </form>
            
        </div>
    </div>
@endsection