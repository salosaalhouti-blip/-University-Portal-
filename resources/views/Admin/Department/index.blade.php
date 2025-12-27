@extends('layouts.app')

@section('content')
<div class="container">
        <!-- SUCCESS MESSAGE HERE -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                       class="btn btn-sm btn-warning" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    
                    <!-- Delete button -->
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

<!-- ADD THIS CSS TO MAKE HEADER/SIDEBAR VISIBLE -->
<style>
    /* Make navbar visible */
    .navbar-bg {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%) !important;
        padding: 10px 0;
    }
    
    /* Make sidebar visible */
    .sidebar {
        background-color: white !important;
        border-right: 2px solid #dee2e6;
        min-height: 500px;
    }
    
    .nav-link {
        color: #2c3e50 !important;
        padding: 12px 15px !important;
        margin: 5px 0 !important;
        display: block !important;
    }
    
    .nav-link:hover {
        background-color: #e9ecef !important;
    }
    
    /* Make footer visible */
    .bg-footer {
        background-color: #f8f9fa !important;
        border-top: 1px solid #dee2e6;
        padding: 20px 0;
    }
    
    /* Main content area */
    .main-content {
        padding: 20px;
    }
</style>
@endsection