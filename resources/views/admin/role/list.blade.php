@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Role Table</h5>
            <div class="d-flex justify-content-end">
                <a href="{{ url('admin/role/add') }}" type="submit" class="btn btn-primary">Add</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach(($getRoleData) as $Role)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $Role->name }}</td>
                        <td>{{ $Role->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ url('admin/role/edit/'.$Role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('admin/role/delete/'.$Role->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this role?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



