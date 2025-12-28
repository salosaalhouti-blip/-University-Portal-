@extends('layouts.app')

@section('Enrollment')

@section('content')
  
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive border p-4 rounded bg-white ">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Enrollments</h3>
        <x-button type="add" label="Add Enrollment" :href="route('enrollment.create')" />
    </div>

    <table class="table table-hover">
        <thead>
            <tr class="border-bottom">
                <th>Student</th>
                <th>Course</th>
                <th>Professor</th>
                <th>Mark</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($enrollments as $enrollment)
                <tr onClick="window.location='{{ route('enrollment.show', $enrollment->id )}}'"
                    style="cursor: pointer;"
                >
                    <td>{{ $enrollment->student->name ?? 'N/A' }}</td>
                    <td>{{ $enrollment->course->name ?? 'N/A' }} ({{ $enrollment->course->symbol ?? '' }})</td>
                    <td>{{ $enrollment->professor->name ?? 'N/A' }}</td>
                    <td>
                        @if($enrollment->mark)
                            <span class="badge bg-info">{{ $enrollment->mark }}</span>
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        @php
                            $status = $enrollment->mark ? 'Completed' : 'Active';
                            $color = $enrollment->mark ? 'success' : 'primary';
                        @endphp
                        <span class="badge bg-{{ $color }}">{{ $status }}</span>
                    </td>
                    <td onClick="event.stopPropagation();">
                        <div class="d-flex gap-1">
                           <x-button 
                           type="edit" 
                           :href="route('enrollment.edit', $enrollment->id)" 
                            />

                         <x-button 
                         type="delete" 
                         confirm="Are you sure you want to delete this enrollment?"
                         action="{{ route('enrollment.destroy', $enrollment->id) }}" />
                       </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">
                        No enrollments found. <a href="{{ route('enrollment.create') }}">Create one now</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 