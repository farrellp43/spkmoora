@extends('layouts.admin')

@section('content')

@section('pages','alternative')
@section('title','edit')

@push('scripts')

@endpush

<div class="row">
    <div class="col"></div>
    <div class="col-6">
        <div class="card rounded">
            <div class="card-body">
                <form action="{{ route('alternative.update', $getAlternative->id) }}" autocomplete="off" method="POST" class="form">
                    @method('patch')
                    @csrf
                    <br>
                    <div class="form-group">
                        <h5 class="label-control">ID Alternatif</h5>
                        <input class="form-control" disabled type="number" name="id" value="{{ $getAlternative->id }}">
                    </div>
                    <div class="form-group">
                        <h5 class="label-control">Kode</h5>
                        <input class="form-control" type="text" name="kode" value="{{ $getAlternative->kode }}">
                        @error('kode')
                        <div class="mt-2 text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h5 class="label-control">Nama Alternatif</h5>
                        <input class="form-control" type="text" name="nama" value="{{ $getAlternative->nama }}">
                        @error('nama')
                        <div class="mt-2 text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    @foreach ($values as $value)
                    <div class="form-group">
                        <h5 class="label-control">{{ $value->nama }}</h5>
                        <input class="form-control" type="number" name="criteria[]" value="{{ $value->value }}">
                        @error('criteria')
                        <div class="mt-2 text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    @endforeach
                    <button class="btn btn-success btn-md" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>

@endsection