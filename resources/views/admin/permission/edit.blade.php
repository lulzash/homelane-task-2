@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <!-- /.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Edit permission
                        <button class="btn btn-sm btn-success float-right"
                            onclick="window.location='{{ url("admin/permission") }}'"
                            type="button">Back
                        </button>
                    </div>

                    <div class="card-body">
                        <form class="form-horizontal"
                            action="{{ route('admin.permission.update', $permission->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Name</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('name', $permission->name) }}"
                                        name="name" placeholder="Enter permission name"
                                    />
                                    @error('name')
                                        <div class="validation-error">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>

                            <hr/>
                            <div>
                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
</div>

@endsection

@section('javascript')

@endsection
