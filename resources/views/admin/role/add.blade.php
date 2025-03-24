@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Role</h5>

{{--            <form action="{{ url('admin/role/insert') }}" method="post">--}}
{{--                {{ csrf_field() }}--}}
{{--                <div class="row mb-3 align-items-center">--}}
{{--                    <label for="inputText" class="col-sm-2 col-form-label text-end">Name :</label>--}}
{{--                    <div class="col-md-6 mb-2 ">--}}
{{--                        <input type="text" name="name" required class="form-control" id="inputText" placeholder="...">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8 text-sm-end mt-2 mt-sm-0">--}}
{{--                        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}

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
                            <div class="col-3 my-2">
                                {{ $value['name'] }}
                            </div>
                            <div class="col-md-9 my-2">
                                <div class="row">
                                    @foreach($value['group'] as $group)
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox">
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



