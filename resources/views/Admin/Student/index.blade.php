@extends('layouts.app')

@section('Student')

@section('content')




 <h1 class="mb-3">Student Page</h1>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3></h3>
        <x-button type="add" label="Add Student" :href="route('student.create')" />
    </div>

    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>GPA</th>
                <th>status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr onClick="window.location='{{ route('student.show', $student->id )}}'"
                    style="cursor: pointer;"
                >
                    <td>{{ $student->stNo }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->avg }}</td>
                    <td>{{ $student->status }}</td>
                    <td class="d-flex gap-1" onClick="event.stopPropagation();">

                           <x-button 
                           type="edit" 
                           label="" 
                           :href="route('student.edit', $student->id)" 
                            />

                           <x-button 
                           type="delete" 
                           label="" 
                          :action="route('student.destroy', $student->id)" 
                           />
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


