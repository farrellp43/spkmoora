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
                                <td>{{$classification->id}}</td>
                                <td>{{$classification->nama}}</td>
                                <td>{{$classification->value}}</td>
                                <td>{{$classification->classification}}</td>
                                <td>
                                    <a class="btn btn-info" href="#">Edit</a>
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