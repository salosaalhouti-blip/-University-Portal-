@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Update Professor</h1>
    
    <div class="card shadow-sm col-lg-8">
        <div class="card-body">
            <form action="{{ route('professor.update', $professor->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label font-weight-bold">Full Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $professor->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">University Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $professor->email) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label font-weight-bold">Department Selection</label>
                    <select name="depId" class="form-select" required>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('depId', $professor->depId) == $dept->id ? 'selected' : '' }}>
                                {{ $dept->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password (Optional)</label>
                    <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current">
                </div>

                <div class="d-flex gap-2 mt-4">
                    <x-button type="primary" label="Save Changes" />
                    <x-button type="back" label="Discard" :href="route('professor.index')" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection