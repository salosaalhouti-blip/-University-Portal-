@extends('layouts.app')

@section('Student')

@section('content')
  
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive border p-4 rounded bg-white ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Students</h3>
        <x-button type="add" label="Add Student" :href="route('student.create')" />
    </div>

    <table class="table  table-hover">
        <thead>
            <tr class="border-bottom">
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
                    <td  onClick="event.stopPropagation();">
                        <div class="d-flex gap-1">

                           <x-button 
                           type="edit" 
                           :href="route('student.edit', $student->id)" 
                            />

                         <x-button 
                         type="delete" 
                         confirm="Are you sure you want to delete this student?"
                         action="{{ route('student.destroy', $student->id) }}" />
                       </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


