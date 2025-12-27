@extends('layouts.app')

@section('title', 'Department Details')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Department Details</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-building me-1"></i>
            Department Information
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-3">Basic Information</h5>
                    <table class="table table-borderless">
                        <tr>
                            <th width="40%">Department ID:</th>
                            <td>{{ $department->id }}</td>
                        </tr>
                        <tr>
                            <th>Department Name:</th>
                            <td>{{ $department->name }}</td>
                        </tr>
                        <tr>
                            <th>Department Code:</th>
                            <td><span class="badge bg-primary">{{ $department->code }}</span></td>
                        </tr>
                        <tr>
                            <th>Created At:</th>
                            <td>{{ $department->created_at->format('F d, Y') }}</td>
                        </tr>
                        <tr>
                            <th>Last Updated:</th>
                            <td>{{ $department->updated_at->format('F d, Y') }}</td>
                        </tr>
                    </table>
                </div>
                
                <div class="col-md-6">
                    <h5 class="mb-3">Description</h5>
                    <div class="border rounded p-3 bg-light">
                        {{ $department->description ?? 'No description available.' }}
                    </div>
                </div>
            </div>
            
            <div class="mt-4 pt-3 border-top">
                <a href="{{ route('departments.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
                <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit Department
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .table-borderless th {
        font-weight: 600;
        color: #495057;
        padding: 0.75rem 0;
    }
    .table-borderless td {
        padding: 0.75rem 0;
    }
    .badge {
        font-size: 0.9em;
        padding: 0.5em 1em;
    }
</style>
@endsection