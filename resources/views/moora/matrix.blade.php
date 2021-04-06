@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','matrix')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover table-md">
                            <thead>
                                <tr align="center">
                                    <th>#</th>
                                    @foreach (array_keys(current($matrix)) as $indexCriteria)
                                    <th>C{{ $indexCriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>

                            <tbody>
                                @foreach (array_keys($matrix) as $indexAlternative)
                                <tr align="center">
                                    <td>A{{ $indexAlternative }}</td>
                                    @foreach (array_keys($matrix[$indexAlternative]) as $indexCriteria)
                                    <td>{{ $matrix[$indexAlternative][$indexCriteria] }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                                <img src="https://latex.codecogs.com/gif.latex?x = \begin{bmatrix} x_{11} & x_{12} & . & x_{1n}\\ x_{21} & x_{22} & . & x_{2n}\\ . & . & . & .\\ x_{m1} & x_{m2} & . & x_{mn} \end{bmatrix} "
                                    alt="" style="display: block; margin: auto;">
                                <br>
                                <p>This <b>matrix</b> is a representation of each criterion value for each
                                    alternative.
                                    The data in the equation represents an Xmn matrix, where m is the number of
                                    alternatives and n is the number of criteria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection