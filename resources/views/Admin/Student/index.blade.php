@extends('layouts.app')

@section('Student')

@section('content')

{{-- We only have three pages (create, edit, details) and the delete action, that's why the Route looks like this.
    Notes:
    - when u want to use datils write  type=show
    - edit and delete have an empty label  
    - add, edit, show link to pages so we use $href
    - delete button is an action so we use action         --}} 

<x-button type="add" label="Add Student" :href="route('student.create')" />
<x-button type="edit" label="" :href="route('student.edit', 1)" />
<x-button type="show" label="Show Details" :href="route('student.show', 1)"/>
<x-button type="delete" label="" :action="route('student.destroy',  1)" />
<p>hello, lalala hehe</p>
@endsection


