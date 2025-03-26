@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-center justify-content-between">
                <h5 class="card-title">Add Role</h5>
                <a href="{{ url('admin/role') }}" class="btn btn-danger mt-2">Back</a>
            </div>
            <form action="{{ url('admin/role/insert') }}" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3 align-items-center">
                    <label for="name" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-md-6 mb-2">
                        <input type="text" name="name" required class="form-control" id="name" placeholder="Enter role name">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="permission" class="col-sm-2 col-form-label "><strong>Permission</strong> :</label>
                    @foreach($getPermission as $value)
                        <div class="row">
                            <div class="col-2 my-2">
                                {{ $value['name'] }}
                            </div>
                            <div class="col-md-10 my-2">
                                <div class="row">
                                    @foreach($value['group'] as $group)
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" value="{{ $group['id'] }}" name="permission_id[]">
                                                {{ $group['name'] }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
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



