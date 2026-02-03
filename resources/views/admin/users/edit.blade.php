@extends('admin.home')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-center justify-content-between">
                <h5 class="card-title">Edit User</h5>
                <div class="mt-2"><a href="{{ url('admin/users') }}" class="btn btn-danger">Back</a></div>
            </div>
            <form action="{{ url('admin/users/update/'.$getUserData->id) }}" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-md-6 mb-2">
                        <input type="text" name="name" value="{{ $getUserData->name  }}" required class="form-control">
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" value="{{ ($getUserData->email) }}" class="form-control">
                        <div style="color:red">{{ $errors->first('email') }}</div>
                    </div>
                </div>
                {{-- <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Password :</label>
                    <div class="col-md-6 mb-2">
                        <input type="text" name="password" value="{{ $getUserData->password }}">
                    </div>
                </div> --}}
                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Role :</label>
                    <div class="col-md-6 mb-2">
                        <select class="form-select" name="role_id" required>
                            <option value="">Select</option>
                            @foreach($getRoleData as $role)
                                <option value="{{ $role->id }}"
                                    {{ (isset($getUserData) && $getUserData->role_id == $role->id) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection



