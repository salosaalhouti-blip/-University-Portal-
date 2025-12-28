@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add New Professor</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('professor.index') }}">Professors</a></li>
        <li class="breadcrumb-item active">Add New</li>
    </ol>

    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <i class="fas fa-user-plus me-1 text-primary"></i>
            <strong>Register Professor Account</strong>
        </div>
        <div class="card-body p-4">
            {{-- Form starts here --}}
            <form action="{{ route('professor.store') }}" method="POST">
                @csrf

                {{-- Full Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Full Name</label>
                    <input type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           id="name" 
                           name="name" 
                           placeholder="Enter Professor's Full Name"
                           value="{{ old('name') }}" 
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email Address --}}
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">University Email</label>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           placeholder="example@limu.edu.ly"
                           value="{{ old('email') }}" 
                           required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Temporary Password</label>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           placeholder="Minimum 8 characters"
                           required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Department Selection --}}
                <div class="mb-4">
                    <label for="depId" class="form-label fw-bold">Assigned Department</label>
                    <select class="form-select @error('depId') is-invalid @enderror" id="depId" name="depId" required>
                        <option value="">-- Choose Department --</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('depId') == $dept->id ? 'selected' : '' }}>
                                {{ $dept->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('depId')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <hr>

{{-- Using your x-button components --}}
                <div class="d-flex gap-2 pt-2">
                    {{-- Submits form because no href is provided --}}
                    <x-button type="dark" label="Save" />
                    
                    {{-- Links back to list because href is provided --}}
                    <x-button type="secondary" label="Cancel" :href="route('professor.index')" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection