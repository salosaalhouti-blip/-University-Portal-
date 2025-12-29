@extends('layouts.app')

@section('Website', 'Departments')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive border p-4 rounded bg-white ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Departments</h3>
        <x-button type="add" label="Add Department" :href="route('department.create')" />
    </div>

    <table class="table  table-hover">
        <thead>
            <tr class="border-bottom">
                <th>Name</th>
                <th>Code</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr onClick="window.location='{{ route('department.show', $department->id )}}'"
                    style="cursor: pointer;"
                >
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->symbol }}</td>
                    <td>{{ $department->created_at->format('m/d/Y') }}</td>
                    <td  onClick="event.stopPropagation();">
                        <div class="d-flex gap-1">

                           <x-button 
                           type="edit" 
                           :href="route('department.edit', $department->id)" 
                            />

                         <x-button 
                         type="delete" 
                         confirm="Are you sure you want to delete this department?"
                         action="{{ route('department.destroy', $department->id) }}" />
                       </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection