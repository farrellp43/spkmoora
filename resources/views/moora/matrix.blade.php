@extends('layouts.admin')

@section('content')

@section('pages','moora')
@section('title','matrix')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card rounded">
                <div class="card-body">
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
</div>

@endsection