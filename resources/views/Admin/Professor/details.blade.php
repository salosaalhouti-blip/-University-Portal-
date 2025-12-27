@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Professor Information</h1>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="card-title text-primary mb-4">{{ $professor->name }}</h5>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Email:</div>
                <div class="col-md-9">{{ $professor->email }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Department:</div>
                <div class="col-md-9">{{ $professor->department->name ?? 'No Department' }}</div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3 fw-bold">Account Created:</div>
                <div class="col-md-9">{{ $professor->created_at->toFormattedDateString() }}</div>
            </div>
            
            <hr>
            
            <div class="d-flex gap-3">
                <x-button type="edit" label="Modify Data" :href="route('professor.edit', $professor->id)" />
                <x-button type="back" label="Return to List" :href="route('professor.index')" />
            </div>
        </div>
    </div>
</div>
@endsection