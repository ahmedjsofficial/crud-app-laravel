@extends('layout.layout')

@section('content')
<div class="text-center my-5">
    <h1 class="text-danger">Create Records</h1>
</div>
<!-- Create - POST REQUEST -->
<form method="POST" action="{{url('student')}}" class="mt-5">
    {!! csrf_field() !!}
        <div class="input-group flex-nowrap">
            <span class="input-group-text bg-black text-white" id="addon-wrapping">Name</span>
            <input type="text" name="name" id="name" class="form-control" placeholder="Email" aria-label="name" aria-describedby="addon-wrapping" autocomplete="off" required />
        </div>
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text bg-black text-white" id="addon-wrapping">Email</span>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" autocomplete="off" required />
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text bg-black text-white" id="addon-wrapping">Address</span>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address" aria-label="address" aria-describedby="addon-wrapping" autocomplete="off" required />
        </div>
        <div class="input-group mt-3">
            <input type="submit" name="submit" class="form-control btn text-white bg-black" value="Create Record" />
        </div>
</form>
@endsection
