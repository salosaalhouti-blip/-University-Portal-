@extends('layouts.app')

@section('Website', 'Course Details')

@section('content')
    <h3 class="mb-4">Course Details</h3>

    <div class="mb-4">
        <p><strong>Name:</strong> {{ $course->name }}</p>
        <p><strong>Symbol:</strong> {{ $course->symbol }}</p>
        <p><strong>Unit:</strong> {{ $course->unit }}</p>
    </div>

    <div class="mb-3">
        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('course.destroy', $course->id) }}" 
              method="POST" 
              style="display:inline;"
              onsubmit="return confirm('Are you sure you want to delete this course?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('course.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
