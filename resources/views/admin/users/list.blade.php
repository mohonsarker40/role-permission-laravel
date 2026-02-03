@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Table</h5>
            <div class="d-flex justify-content-end">
                <a href="{{ url('admin/users/add') }}" type="submit" class="btn btn-primary">Add</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach(($getUserData) as $value)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->role_name }}</td>
                        <td>{{ $value->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ url('admin/users/edit/'.$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('admin/users/delete/'.$value->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



