@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','optimization')

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
                                <p>In the MOORA method, normalized measures are added in the case of maximization (for
                                    favorable criteria) and reduced in cases of minimization (for unfavorable
                                    criteria). </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?y_i = \sum^g _{j=1}w_jx_{ij}^{*} - \sum^n _{j=g+1}w_jx_{ij}^{*} "
                                    alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Information:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?g \text{ \space \space  \space  }: "
                                        alt=""> Criteria maximized<br>
                                    <img src="https://latex.codecogs.com/gif.latex?n \text{ \space \space  \space  }: "
                                        alt=""> Criteria minimized<br>
                                    <img src="https://latex.codecogs.com/gif.latex?w \text{ \space \space  \space  }: "
                                        alt=""> Weight<br>
                                    <img src="https://latex.codecogs.com/gif.latex?y_i \text{ \space \space  \space  }: "
                                        alt=""> The optimized value of alternative j for all attributes
                                </p>
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
                                    <td>{{ number_format((float)$optimization[$optimization_id], 4, '.', '') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ url('img/irasutoya/business_crowdfunding.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

@endsection