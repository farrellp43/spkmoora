@extends('layouts.admin')

@section('content')

@section('pages','data')
@section('title','criterias')

@push('scripts')

@endpush

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card rounded card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover table-md"
                            id="Criteria">
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Criteria</th>
                                    <th>Type</th>
                                    <th>Weight</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($criterias as $criteria)
                                <tr align="center">
                                    <td>{{ $criteria->id }}</td>
                                    <td>{{ $criteria->nama }}</td>
                                    <td>{{ $criteria->tipe }}</td>
                                    <td>{{ $criteria->bobot }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('criteria.edit', $criteria->id) }}"><i
                                                class="fas fa-edit"></i></a>
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
</div>

@endsection