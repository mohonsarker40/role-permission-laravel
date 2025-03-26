@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-center justify-content-between">
                <h5 class="card-title">Add User</h5>
                <a href="{{ url('admin/users') }}" class="btn btn-danger mt-2">Back</a>
            </div>

            <form action="{{ url('admin/users/insert') }}" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-md-6 mb-2">
                        <input type="text" name="name" value="{{ old('name') }}" required class="form-control"
                               placeholder="Enter user name">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" value="{{ old('email') }}" required class="form-control"
                               placeholder="Enter user name">
                        <div style="color:red">{{ $errors->first('email') }}</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Password :</label>
                    <div class="col-md-6 mb-2">
                        <input type="password" name="password" required class="form-control" placeholder="Enter user name">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Role :</label>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" name="role_id" required>
                            <option value="">select</option>
                            @foreach($getRecord as $Role)
                                <option {{ (old('role_id') == $Role->id) ? 'selected' : '' }}
                                        value="{{ $Role->id }}">{{ $Role->name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection



