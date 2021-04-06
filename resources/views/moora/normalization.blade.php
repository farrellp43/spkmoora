@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','normalization')

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
                                    <td>{{ number_format((float)$normal[$indexAlternative][$indexCriteria], 4, '.', '') }}
                                    </td>
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
                                <p>The <b>normalization</b> step is used to unify each matrix element so
                                    that the elements in the matrix have similar values.
                                    For the denominator, the best choice is the square root of the sum of the
                                    squares of
                                    each alternative per criterion </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?x^*_{ij} = \frac{x_{ij}}{\sqrt{[\sum^m _{(i=1)}x_{ij}^{2}]}} "
                                    alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Information:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?x_{ij} \text{ \space \space  \space  }: "
                                        alt=""> The matrix with j as alternative and i as criteria<br>
                                    <img src="https://latex.codecogs.com/gif.latex?x^*_{ij} \text{ \space \space  \space  }: "
                                        alt=""> Normalization of alternative j on criteria i
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection