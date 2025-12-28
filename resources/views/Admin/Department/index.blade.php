department.index
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Departments</h1>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{ $department->name }}</td>
                <td>{{ $department->symbol }}</td>
                <td>{{ $department->created_at->format('m/d/Y') }}</td>
                <td>
         
                    <!-- Edit button -->
                    <a href="{{ route('department.edit', $department->id) }}" 
                       class="btn btn-sm btn-warning" title="Edit"
                        onsubmit="return confirm('Delete this department?');">
                        <i class="fas fa-edit"></i>
                    </a>
                    
                    <!-- Delete button with confirmation -->
                    <form action="{{ route('department.destroy', $department->id) }}" 
                          method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this department?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('department.create') }}" class="btn btn-primary">
        + Add Department
    </a>
</div>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .table {
        margin-top: 20px;
    }
    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        margin-right: 5px;
    }
    .btn-sm:last-child {
        margin-right: 0;
    }
</style>
@endsection