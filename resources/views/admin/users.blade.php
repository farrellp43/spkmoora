@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','users')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="paginationSimpleNumbers" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach ($users as $user)
                                <tr align="center">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal"
                                            data-target="#modaledit{{ $user->id }}"><i
                                                class="fas fa-user-edit"></i></button>
                                        <div class="modal fade" tabindex="-1" role="dialog"
                                            id="modaledit{{ $user->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><b>Edit user {{ $user->name }}</b></h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('user.update', $user->id)}}"
                                                            method="POST">
                                                            @method('patch')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                                            <br>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Nama</h5>
                                                                <input class="form-control" type="text" name="name"
                                                                    value="{{ $user->name }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Email</h5>
                                                                <input class="form-control" type="text" name="email"
                                                                    value="{{ $user->email }}" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Role</h5>
                                                                <div class="input-group">
                                                                    <select class="form-control select2"
                                                                        style="width: 100%;"
                                                                        data-minimum-results-for-search=" -1"
                                                                        name="role" value="{{ $user->role }}" required>
                                                                        <option name="role" value="{{ $user->role }}">
                                                                            {{ $user->role }}</option>
                                                                        @if ($user->role == 'user')
                                                                        <option value="administrator">administrator
                                                                        </option>
                                                                        @elseif ($user->role != 'user')
                                                                        <option value="user">user</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer bg-whitesmoke br">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($user->email != "farrellp43@gmail.com")
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#modaldelete{{ $user->id }}"><i
                                                class="fas fa-user-minus"></i></button>
                                        @csrf
                                        <div class="modal fade" tabindex="-1" role="dialog"
                                            id="modaldelete{{ $user->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6><b>Delete {{ $user->name }}</b></h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 style="font-weight:normal">Do you really want to delete
                                                            user {{ $user->name }}?</h6>
                                                        <div class="text-secondary" style="align-content: flex-start">
                                                            Last
                                                            updated:
                                                            {{ $user->updated_at->format('d F Y') }}
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer bg-whitesmoke br">
                                                        <button type="button" class="btn btn-icon icon-left btn-info"
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="{{route('user.delete')}}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                                            <button type="submit"
                                                                class="btn btn-icon icon-left btn-danger">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection