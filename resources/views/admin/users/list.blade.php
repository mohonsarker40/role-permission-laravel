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
                @foreach(($getRecord) as $Role)
                    <tr>
                        <th scope="row">{{ $Role->id }}</th>
                        <td>{{ $Role->name }}</td>
                        <td>{{ $Role->email }}</td>
                        <td>{{ $Role->role_name }}</td>
                        <td>{{ $Role->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/users/edit/'.$Role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('admin/users/delete/'.$Role->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



