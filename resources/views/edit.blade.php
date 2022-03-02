@extends('layout.layout')

@section('content')
<div class="text-center my-5">
    <h1 class="text-danger">Edit Records</h1>
</div>
<form method="POST" action="{{ url('student/' . $students->id) }}">
    {!! csrf_field() !!}
    @method("PATCH")
        <input type="hidden" name="id" value="{{ $students->id }}" id="id" />
        <div class="input-group flex-nowrap">
            <span class="input-group-text bg-primary text-white" id="addon-wrapping">Name</span>
            <input type="text" name="name" id="name" class="form-control" value="{{$students->name}}" aria-label="name" aria-describedby="addon-wrapping" />
        </div>
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text bg-primary text-white" id="addon-wrapping">Email</span>
            <input type="email" name="email" id="email" class="form-control" value="{{$students->email}}" aria-label="Email" aria-describedby="addon-wrapping" />
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text bg-primary text-white" id="addon-wrapping">Address</span>
            <input type="text" name="address" id="address" class="form-control" value="{{$students->address}}" aria-label="Address" aria-describedby="addon-wrapping" />
        </div>
        <div class="input-group mt-3">
            <input type="submit" name="submit" class="form-control btn text-white bg-primary" value="Update Record" />
        </div>
</form>

@endsection
