@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h1>Professors List</h1>
        <x-button type="add" label="Add New Professor" :href="route('professor.create')" />
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
            @endif

            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Professor Name</th>
                        <th>Email Address</th>
                        <th>Department</th>
                        <th class="text-center">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professors as $professor)
                    <tr>
                        <td>
                            {{-- We pass the name as the label for your component --}}
                            <x-button type="primary" :label="$professor->name" :href="route('professor.show', $professor->id)" />
                        </td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ $professor->department->name ?? 'N/A' }}</td>
                        <td class="text-center">
                            <x-button type="edit" label="Edit" :href="route('professor.edit', $professor->id)" />
                            <x-button type="delete" :action="route('professor.destroy', $professor->id)" confirm="true" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection