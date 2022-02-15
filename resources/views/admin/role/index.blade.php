@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <!-- /.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                      </div>
                    @endif

                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Roles List
                        <button class="btn btn-sm btn-success float-right" type="button"
                            onclick="window.location='{{ url("admin/role/create") }}'"
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
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description ?? 'test description' }}</td>
                                        <td>{{ $role->created_at->format('d-m-Y h:i a') }}</td>
                                        <td>
                                            <form action="{{ route('admin.role.destroy', $role->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-sm btn-info edit-role"
                                                    type="button">Edit
                                                </a>
                                                <button class="btn btn-sm btn-danger edit-role"
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
