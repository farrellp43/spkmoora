@extends('layouts.admin')

@section('content')

@section('pages','criteria')
@section('title', $criterias->nama)

@push('scripts')

@endpush
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card rounded">
                <div class="card-body">
                    <button class="btn btn-info btn-md" type="button" data-toggle="collapse" data-target="#collapseKet"
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
            <div class="card rounded">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md" id="DataTables">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Alternatives</th>
                                <th>Value</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alternatives as $alternative)
                            <tr align="center">
                                <td>{{ $alternative->alternative_id }}</td>
                                <td>{{ $alternative->nama }}</td>
                                <td>{{ $alternative->value }}</td>
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