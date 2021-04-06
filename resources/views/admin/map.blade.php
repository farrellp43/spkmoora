@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','map')

<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>explanation</h4>
                            <div class="card-header-action">
                                <a data-collapse="#penjelasan" class="btn btn-icon btn-primary" href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="collapse" id="penjelasan">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p style="text-align: justify;">Using the help of CartoDB, this page displays a map of the Semarang Regency which contains alternatives / the small dam candidates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-primary rounded">
                        <iframe width="100%" height="720" frameborder="0"
                            src="https://farrellp43.carto.com/builder/b589733c-fa91-4016-88d1-300793286cf8/embed"
                            allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen
                            msallowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection