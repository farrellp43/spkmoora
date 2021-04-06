@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','ranking')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card rounded card-primary">
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
                            <div style="text-align: justify;" class="col">
                                <p>The value of <b>optimization</b> can be positive or negative depending on the total
                                    maximum (favorable
                                    criterion) and minimum (unfavorable criteria) in the matrix. The ranking order of
                                    optimization value
                                    represents the final choice. Thus, the best alternative has the highest optimization
                                    value,
                                    while the worst alternative has the lowest optimization value </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover table-md">
                            <thead>
                                <tr align="center">
                                    <th>Rank</th>
                                    <th>Alternatives</th>
                                    <th>Optimization Ranked</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($optimization as $optimization_id => $val)
                                <tr align="center">
                                    <td>{{ $rank++ }}</td>
                                    <td>{{ $alternative[$optimization_id][0] }}</td>
                                    <td>{{ number_format((float)$optimization[$optimization_id], 4, '.', '') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ url('img/irasutoya/gin_tape_fan_man.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

@endsection