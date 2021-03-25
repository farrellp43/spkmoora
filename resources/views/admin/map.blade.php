@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','map')

<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
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