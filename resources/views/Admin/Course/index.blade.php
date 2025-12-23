@extends('layouts.app')

@section('Website', 'Courses')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Courses</h3>
        <a href="{{ route('course.create') }}" class="btn btn-dark">
            + Add Course
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->symbol }}</td>
                    <td>{{ $course->unit }}</td>
                    <td>
                        <a href="{{ route('course.show', $course->id) }}" class="btn btn-info btn-sm">
                            View
                        </a>
                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('course.destroy', $course->id) }}" 
                              method="POST" 
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
