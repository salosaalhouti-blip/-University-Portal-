@extends('layouts.app')

@section('content')
<h3 class="mb-4">Add Student</h3>



    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="stNo" class="form-label">Student ID</label>
            <input type="text" name="stNo" id="stNo" class="form-control" value="{{ old('stNo') }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"  required>
        </div>

        <div class="mb-3">
            <label for="avg" class="form-label">GPA</label>
            <input type="number" name="avg" id="avg" class="form-control" value="{{ old('avg') }}"  required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
        </div>

          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" required>
                <option value="active">Active</option>
                <option value="notActive">Not Active</option>
                <option value="dismissed">Dismissed</option>

            </select>
        </div>



        <button type="submit" class="btn btn-dark">Save</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

@endsection