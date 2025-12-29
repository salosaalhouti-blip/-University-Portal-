@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive border p-4 rounded bg-white ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Professors</h3>
        <x-button type="add" label="Add Professor" :href="route('professor.create')" />
    </div>

    <table class="table  table-hover">
        <thead>
            <tr class="border-bottom">
                <th>Professor Name</th>
                <th>Email Address</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professors as $professor)
                <tr onClick="window.location='{{ route('professor.show', $professor->id )}}'"
                    style="cursor: pointer;"
                >
                    <td>{{ $professor->name }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->department->name ?? 'N/A' }}</td>
                    <td  onClick="event.stopPropagation();">
                        <div class="d-flex gap-1">

                           <x-button 
                           type="edit" 
                           :href="route('professor.edit', $professor->id)" 
                            />

                         <x-button 
                         type="delete" 
                         confirm="Are you sure you want to delete this professor?"
                         action="{{ route('professor.destroy', $professor->id) }}" />
                       </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection