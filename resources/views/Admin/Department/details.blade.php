@extends('layouts.app')

@section('Website', 'Department Details')

@section('content')
<div class="bg-white border p-4 rounded">
    <div class="d-flex d-row gap-4 mb-4">
        <x-button type="back" href="{{ route('department.index') }}" />
        <h3>Department Details</h3>
    </div>
        
    <div class="p-4">
        <div class="mb-4">
            <h6 class="text-muted mb-3">Department Information</h6>
            <p><strong>Name:</strong> {{ $department->name }}</p>
            <p><strong>Code:</strong> <span class="badge bg-primary">{{ $department->symbol }}</span></p>
            <p><strong>Created At:</strong> {{ $department->created_at->format('F d, Y') }}</p>
            <p><strong>Last Updated:</strong> {{ $department->updated_at->format('F d, Y') }}</p>
        </div>

        @if($department->description)
        <div class="mb-4">
            <h6 class="text-muted mb-3">Description</h6>
            <p>{{ $department->description }}</p>
        </div>
        @endif

        <div class="mb-3">
            <x-button 
                type="edit" 
                href="{{ route('department.edit', $department->id) }}" />

            <x-button 
                type="delete" 
                confirm="Are you sure you want to delete this department?"
                action="{{ route('department.destroy', $department->id) }}" />
        </div>
    </div>
</div>
@endsection