@extends('admin.home')

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
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach(($roles) as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->name }}</td>
                        <td>
                            <a href="{{ url('admin/role/edit/'.$data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('admin/role/delete/'.$data->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this role?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



