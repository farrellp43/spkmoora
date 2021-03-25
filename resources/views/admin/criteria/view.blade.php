@extends('layouts.admin')

@section('content')

@section('pages','criteria')
@section('title', $criterias->nama)

@push('scripts')

@endpush
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseKet"
                        aria-expanded="false" aria-controls="collapseKet">Keterangan</button>
                    <div class="collapse" id="collapseKet">
                        <table width="100%" class="table table-striped table-bordered table-hover table-md" id="Ket">
                            <thead>
                                <tr align="center">
                                    <th>Value</th>
                                    <th>Classification</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == $criterias->nama)
                                <tr align="center">
                                    <td>{{$classification->value}}</td>
                                    <td>{{$classification->classification}}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md" id="DataTables">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Alternatives</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alternatives as $alternative)
                            <tr align="center">
                                <td>{{ $alternative->alternative_id }}</td>
                                <td>{{ $alternative->nama }}</td>
                                <td>{{ $alternative->value }}</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="modal"
                                        data-target="#modaledit{{ $alternative->id }}">Edit</button>
                                    <div class="modal fade" id="modaledit{{ $alternative->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit {{ $alternative->nama }}</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('value.update') }}" method="POST">
                                                        @method('patch')
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $alternative->id }}">
                                                        <br>
                                                        <div class="form-group">
                                                            <h5 class="label-control">Nama</h5>
                                                            <input class="form-control" disabled type="text" name="nama"
                                                                value="{{ $alternative->nama }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <h5 class="label-control">Nilai</h5>
                                                            <input autofocus class="form-control" type="number"
                                                                name="value" value="{{ $alternative->value }}">
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