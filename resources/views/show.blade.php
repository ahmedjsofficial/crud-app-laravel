@extends('layout.layout')

@section('content')
<div class="text-center my-5">
    <h1>Student Profile</h1>
</div>
<ul class="list-group border border-secondary text-center">
    <li class="list-group-item border border-secondary fs-4">
        <span class="fw-bold text-black">Name:</span> {{$students->name}}
    </li>
    <li class="list-group-item border border-secondary fs-4">
        <span class="fw-bold text-black">Email:</span> {{$students->email}}
    </li>
    <li class="list-group-item border border-secondary fs-4">
        <span class="fw-bold text-black">Address:</span> {{$students->address}}
    </li>
</ul>
<div class="text-center my-5">
    <a href="/student" class="btn text-white bg-black form-control">Go Back</a>
</div>
@endsection