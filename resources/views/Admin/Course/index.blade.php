@extends('layouts.app')

@section('Website', 'Courses')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive border p-4 rounded bg-white ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Courses</h3>
        <x-button type="add" label="Add Course" :href="route('course.create')" />
    </div>

    <table class="table  table-hover">
        <thead>
            <tr class="border-bottom">
                <th>Name</th>
                <th>Symbol</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr onClick="window.location='{{ route('course.show', $course->id )}}'"
                    style="cursor: pointer;"
                >
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->symbol }}</td>
                    <td>{{ $course->unit }}</td>
                    <td  onClick="event.stopPropagation();">
                        <div class="d-flex gap-1">

                           <x-button 
                           type="edit" 
                           :href="route('course.edit', $course->id)" 
                            />

                         <x-button 
                         type="delete" 
                         confirm="Are you sure you want to delete this course?"
                         action="{{ route('course.destroy', $course->id) }}" />
                       </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
