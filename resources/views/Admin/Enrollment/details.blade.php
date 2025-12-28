@extends('layouts.app')

@section('Enrollment')

@section('content')
<div class="bg-white border p-4 rounded">
    <div class="d-flex d-row gap-4 mb-4">
        <x-button type="back" href="{{ route('enrollment.index') }}" />
        <h3>Enrollment Details</h3>
    </div>
        
    <div class="p-4">
        <div class="mb-4">
            <h6 class="text-muted mb-3">Student Information</h6>
            <p><strong>Name:</strong> {{ $enrollment->student->name ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $enrollment->student->email ?? 'N/A' }}</p>
            <p><strong>Student ID:</strong> {{ $enrollment->student->stNo ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <h6 class="text-muted mb-3">Course Information</h6>
            <p><strong>Course:</strong> {{ $enrollment->course->name ?? 'N/A' }}</p>
            <p><strong>Symbol:</strong> {{ $enrollment->course->symbol ?? 'N/A' }}</p>
            <p><strong>Unit:</strong> {{ $enrollment->course->unit ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <h6 class="text-muted mb-3">Professor Information</h6>
            <p><strong>Name:</strong> {{ $enrollment->professor->name ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <h6 class="text-muted mb-3">Grade Information</h6>
            <p><strong>Mark:</strong> 
                @if($enrollment->mark)
                    <span class="badge bg-info">{{ $enrollment->mark }}/100</span>
                @else
                    <span class="text-muted">Not graded</span>
                @endif
            </p>
            <p><strong>Status:</strong> 
                @php
                    $status = $enrollment->mark ? 'Completed' : 'Active';
                    $color = $enrollment->mark ? 'success' : 'primary';
                @endphp
                <span class="badge bg-{{ $color }}">{{ $status }}</span>
            </p>
        </div>

        <div class="mb-3">
            <x-button 
                type="edit" 
                href="{{ route('enrollment.edit', $enrollment->id) }}" />

            <x-button 
                type="delete" 
                confirm="Are you sure you want to delete this enrollment?"
                action="{{ route('enrollment.destroy', $enrollment->id) }}" />
        </div>
    </div>
</div>
@endsection 