@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','classification')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card shadow rounded">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md" id="DataTables">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Criteria</th>
                                <th>Value</th>
                                <th>Classification</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($classifications as $classification)
                            <tr align="center">
                                <td>{{ $classification->id }}</td>
                                <td>{{ $classification->nama }}</td>
                                <td>{{ $classification->value }}</td>
                                <td>{{ $classification->classification }}</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#modaledit{{ $classification->id }}">Edit</button>
                                    <div class="modal fade" id="modaledit{{ $classification->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit {{ $classification->nama }}</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('classification.update') }}" method="POST">
                                                        @method('patch')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $classification->id }}">
                                                        <br>
                                                        <div class="form-group">
                                                            <h5 class="label-control">Nama</h5>
                                                            <input class="form-control" disabled type="text" name="nama"
                                                                value="{{ $classification->nama }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <h5 class="label-control">Nilai</h5>
                                                            <input disabled class="form-control" type="number"
                                                                name="nilai" value="{{ $classification->value }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <h5 class="label-control">Klasifikasi</h5>
                                                            <input autofocus class="form-control" type="text"
                                                                name="classification" value="{{ $classification->classification }}">
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

@endsection