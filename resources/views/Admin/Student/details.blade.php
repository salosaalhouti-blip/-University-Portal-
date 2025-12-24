@extends('layouts.app')

@section('Website', 'Student Details')

@section('content')

<div class="bg-white border p-4 rounded ">
 <div class="d-flex d-row gap-4">
     <x-button type="back" href="{{ route('student.index') }}" />
    <h3 class="mb-4">Student Details</h3>
 </div>
        
<div class="p-4"> 
    <div class="mb-4">
        <p><strong>Student ID:</strong> {{ $student->stNo }}</p>
        <p><strong>Name:</strong> {{ $student->stNo }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>GPA:</strong> {{ $student->avg }}</p>
        <p><strong>Status:</strong> {{ $student->status }}</p>
    </div>

    <div class="mb-3">
               

                <x-button 
                type="edit" 
                href="{{ route('student.edit', $student->id) }}" />

                 <x-button 
                 type="delete" 
                 confirm="Are you sure you want to delete this student?"
                 action="{{ route('student.destroy', $student->id) }}" />
    </div>
</div>
</div>
@endsection