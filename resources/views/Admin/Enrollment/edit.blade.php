@extends('layouts.app')

@section('Enrollment')

@section('content')
<div class="border p-4 rounded bg-white">
    <div class="d-flex d-row gap-4 mb-4">
        <x-button type="back" href="{{ route('enrollment.index') }}" />
        <h3>Edit Enrollment</h3>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form action="{{ route('enrollment.update', $enrollment->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="studentId" class="form-label">Student *</label>
                    <select class="form-control bg-light" id="studentId" name="studentId" required>
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" 
                                {{ old('studentId', $enrollment->studentId) == $student->id ? 'selected' : '' }}>
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
                    <select class="form-control bg-light" id="courseId" name="courseId" required>
                        <option value="">Select Course</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" 
                                {{ old('courseId', $enrollment->courseId) == $course->id ? 'selected' : '' }}>
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
                    <select class="form-control bg-light" id="professorId" name="professorId" required>
                        <option value="">Select Professor</option>
                        @foreach($professors as $professor)
                            <option value="{{ $professor->id }}" 
                                {{ old('professorId', $enrollment->professorId) == $professor->id ? 'selected' : '' }}>
                                {{ $professor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('professorId')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mark" class="form-label">Mark</label>
                    <input type="number" class="form-control bg-light" id="mark" 
                           name="mark" value="{{ old('mark', $enrollment->mark) }}" 
                           min="0" max="100" step="0.1"
                           placeholder="Enter mark (0-100)">
                    @error('mark')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="mt-4">
                    <x-button type="add" label="Update Enrollment" />
                    <x-button type="secondary" label="Cancel" href="{{ route('enrollment.index') }}" />
                </div>
            </form>
</div>
@endsection 