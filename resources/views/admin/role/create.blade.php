@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <!-- /.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Create role
                        <button class="btn btn-sm btn-success float-right"
                            onclick="window.location='{{ url("admin/role") }}'"
                            type="button">Back
                        </button>
                    </div>

                    <div class="card-body">
                        <form class="form-horizontal"
                            action="{{ route('admin.role.store') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Name</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('name') }}"
                                        name="name" placeholder="Enter role name"
                                    />
                                    @error('name')
                                        <div class="validation-error">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label>Label</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('label') }}"
                                        name="label" placeholder="Enter role label"
                                    />
                                    @error('label')
                                        <div class="validation-error">{{ $errors->first('label') }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Description</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('description') }}"
                                        name="description" placeholder="Enter role description"
                                    />
                                    @error('description')
                                        <div class="validation-error">{{ $errors->first('description') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-3">
                                    <label>Permissions</label>
                                    @foreach ($permissions as $key => $permission)
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                name="permissions[]"
                                                id="{{ $permission->id }}"
                                                value="{{ $permission->id }}"
                                                type="checkbox">
                                            <label class="form-check-label" for="{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('permissions')
                                        <div class="validation-error">{{ $errors->first('permissions') }}</div>
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
