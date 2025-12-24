@extends('layouts.app')

@section('content')
<div class="border p-4 rounded bg-white"> 
<h3 class="mb-4">Add Student</h3>



    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="stNo" class="form-label fw-bold">Student ID</label>
            <input type="text" name="stNo" id="stNo" class="form-control bg-light" value="{{ old('stNo') }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" name="name" id="name" class="form-control bg-light" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" name="email" id="email" class="form-control bg-light" value="{{ old('email') }}"  required>
        </div>

        <div class="mb-3">
            <label for="avg" class="form-label fw-bold">GPA</label>
            <input type="number" name="avg" id="avg" class="form-control bg-light" value="{{ old('avg') }}"  required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control bg-light" value="{{ old('password') }}" required>
        </div>

          <div class="mb-3">
            <label for="status" class="form-label rounded fw-bold">Status</label>
            <select name="status" required class="p-1 ">
                <option value="active">Active</option>
                <option value="notActive">Not Active</option>
                <option value="dismissed">Dismissed</option>

            </select>
        </div>

        <x-button type="dark" label="Save" />
        <x-button type="secondary" label="Cancel" href="{{ route('student.index') }}" />
    </form>
</div>

@endsection