@extends('layouts.app')

@section('Website', 'Edit Course')

@section('content')
    <h3 class="mb-4">Edit Course</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('course.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $course->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="symbol" class="form-label">Symbol</label>
            <input type="text" name="symbol" id="symbol" class="form-control" value="{{ old('symbol', $course->symbol) }}" required>
        </div>

        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="number" name="unit" id="unit" class="form-control" value="{{ old('unit', $course->unit) }}" required>
        </div>

        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('course.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
