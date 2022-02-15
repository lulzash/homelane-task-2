@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <!-- /.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" permission="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                      </div>
                    @endif

                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Permissions List
                        <button class="btn btn-sm btn-success float-right" type="button"
                            onclick="window.location='{{ url("admin/permission/create") }}'"
                        >Add
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered
                            table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $key => $permission)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->created_at->format('d-m-Y h:i a') }}</td>
                                        <td>
                                            <form action="{{ route('admin.permission.destroy', $permission->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('admin.permission.edit', $permission->id) }}" class="btn btn-sm btn-info edit-permission"
                                                    type="button">Edit
                                                </a>
                                                <button class="btn btn-sm btn-danger edit-permission"
                                                    type="submit">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
