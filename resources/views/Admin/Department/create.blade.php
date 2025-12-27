@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Department</h1>
    
    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Code:</label>
            <input type="text" name="symbol" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('department.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection