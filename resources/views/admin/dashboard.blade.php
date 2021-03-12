@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','dashboard')

<section class="section">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-statistic-1 rounded">
                <div class="card-icon bg-primary">
                    <i class="fas fa-th-large"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Values</h4>
                    </div>
                    <div class="card-body">
                        {{ $countValues }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-statistic-1 rounded">
                <div class="card-icon bg-primary">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Alternatives</h4>
                    </div>
                    <div class="card-body">
                        {{ $countAlternatives }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-statistic-1 rounded">
                <div class="card-icon bg-primary">
                    <i class="far fa-file-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Criterias</h4>
                    </div>
                    <div class="card-body">
                        {{ $countCriterias }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-statistic-1 rounded">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Users</h4>
                    </div>
                    <div class="card-body">
                        {{ $countUsers }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary rounded">
                <div class="card-body">
                    <h2>
                        <center>Ranking</center>
                    </h2>
                    <table width="100%" class="table table-striped table-bordered table-hover table-md">
                        <thead>
                            <tr align="center">
                                <th>Rank</th>
                                <th>Alternatives</th>
                                <th>Optimization</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($optimization as $optimization_id => $val)
                            <tr align="center">
                                <td>{{ $rank++ }}</td>
                                <td>{{ $alternative[$optimization_id][0] }}</td>
                                <td>{{ number_format((float)$optimization[$optimization_id], 3, '.', '') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7 ml-auto mr-auto">
            <img src="{{ url('img/computer_tokui_boy.png') }}" width="90%" alt="">
        </div>
    </div>
</section>

@endsection