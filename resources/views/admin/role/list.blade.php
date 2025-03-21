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
                @foreach($getRoles as $Role)
                    <tr>
                    <th scope="row">{{ $Role->id }}</th>
                    <td>{{ $Role->name }}</td>
                    <td>{{ $Role->created_at }}</td>
                    <td>
                        <a href="{{ url('admin/role/edit'.$Role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('admin/role/delete'.$Role->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection



