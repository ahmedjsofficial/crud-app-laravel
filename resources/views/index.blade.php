@extends('layout.layout')

@section('content')
<div class="text-center my-5">
    <h1 class="text-danger">Student Records</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered border-secondary text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Created_At</th>
                <th>Updated_At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>

                <td class="gap-3">
                    <div class="d-flex gap-3 btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ url('/student/' . $item->id) }}" class="btn btn-primary">Show Record</a>
                        <a href="{{ url('/student/' . $item->id . '/edit') }}" class="btn bg-black text-white btn-md">Edit</a>

                        <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" class="d-flex form-inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are Sure! You Wants to Delete Reacord')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection