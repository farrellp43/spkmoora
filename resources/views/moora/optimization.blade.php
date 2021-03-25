@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','optimization')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Alternatives</th>
                                <th>Optimization Value</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($optimization as $optimization_id => $val)
                            <tr align="center">
                                <td>{{ $optimization_id }}</td>
                                <td>{{ $alternative[$optimization_id][0] }}</td>
                                <td>{{ number_format((float)$optimization[$optimization_id], 4, '.', '') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7 ml-auto mr-auto">
            <img src="{{ url('img/irasutoya/business_crowdfunding.png') }}" width="90%" alt="">
        </div>
    </div>
</div>

@endsection