@extends('layouts.app')

@section('Website', 'Edit Student')

@section('content')
    <h3 class="mb-4">Edit Student</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

      
        <div class="mb-3">
            <label for="stNo" class="form-label">Student ID</label>
            <input type="text" name="stNo" id="stNo" class="form-control" value="{{ old('stNo', $student->stNo) }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $student->email) }}"  required>
        </div>

        <div class="mb-3">
            <label for="avg" class="form-label">GPA</label>
            <input type="number" name="avg" id="avg" class="form-control" value="{{ old('avg', $student->avg) }}"  required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" >
        </div>
    
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" required>
      <option value="active" {{ old('status', $student->status) == 'active' ? 'selected' : '' }}>
        Active
    </option>
    <option value="notActive" {{ old('status', $student->status) == 'notActive' ? 'selected' : '' }}>
        Not Active
    </option>
    <option value="dismissed" {{ old('status', $student->status) == 'dismissed' ? 'selected' : '' }}>
        Dismissed
    </option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection