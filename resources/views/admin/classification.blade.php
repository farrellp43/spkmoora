@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','classification')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>explanation</h4>
                    <div class="card-header-action">
                        <a data-collapse="#penjelasan" class="btn btn-icon btn-primary" href="#"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="collapse" id="penjelasan">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p style="text-align: justify;">This page displays the classification name for each
                                    criterion based on its value. There are 6 criteria that have 5 classifications, and
                                    1 criterion that has 4 classifications. The total classification number is 34 and
                                    each classification can be updated.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover table-md"
                            id="DataTables">
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
                                        <button class="btn btn-info" data-toggle="modal"
                                            data-target="#modaledit{{ $classification->id }}"><i
                                                class="fas fa-edit"></i></button>
                                        <div class="modal fade" id="modaledit{{ $classification->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit {{ $classification->nama }}</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('classification.update') }}"
                                                            method="POST">
                                                            @method('patch')
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $classification->id }}">
                                                            <br>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Nama</h5>
                                                                <input class="form-control" disabled type="text"
                                                                    name="nama" value="{{ $classification->nama }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Nilai</h5>
                                                                <input disabled class="form-control" type="number"
                                                                    name="nilai" value="{{ $classification->value }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <h5 class="label-control">Klasifikasi</h5>
                                                                <input autofocus class="form-control" type="text"
                                                                    name="classification"
                                                                    value="{{ $classification->classification }}">
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
</div>

@endsection