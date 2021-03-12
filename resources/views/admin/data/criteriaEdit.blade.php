@extends('layouts.admin')

@section('content')

@section('pages','criteria')
@section('title','edit')

@push('scripts')

@endpush

<div class="row">
    <div class="col"></div>
    <div class="col-6">
        <div class="card rounded">
            <div class="card-body">
                <form action="{{ route('criteria.update', $criteria->id) }}" autocomplete="off" method="POST"
                    class="form">
                    @method('patch')
                    @csrf
                    <br>
                    <div class="form-group">
                        <h5 class="label-control">ID Kriteria</h5>
                        <input class="form-control" disabled type="number" name="id" value="{{ $criteria->id }}">
                    </div>
                    <div class="form-group">
                        <h5 class="label-control">Nama</h5>
                        <input class="form-control" disabled type="text" name="nama" value="{{ $criteria->nama }}">
                    </div>
                    <div class="form-group">
                        <h5 class="label-control">Tipe</h5>
                        <select class="form-control select2" style="width: 50%" name="tipe"
                            value="{{ $criteria->tipe }}" data-minimum-results-for-search="-1" required>
                            <option name="tipe" value="{{ $criteria->tipe }}">{{ $criteria->tipe }}
                            </option>
                            @if ($criteria->tipe == 'cost')
                            <option value="benefit">benefit</option>
                            @elseif ($criteria->tipe != 'cost')
                            <option value="cost">cost</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="label-control">Bobot</h5>
                        <input class="form-control" type="number" name="bobot" value="{{ $criteria->bobot }}">
                    </div>
                    <button class="btn btn-success btn-md" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>

@endsection