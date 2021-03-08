@extends('layouts.admin')

@section('content')

@section('pages','data')
@section('title','alternatives')

@push('scripts')

@endpush



<div class="container">
    <div class="card rounded">
        <div class="card-body">
            <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#collapseTambah"
                aria-expanded="false" aria-controls="collapseTambah">
                Add
            </button>
            <div class="collapse" id="collapseTambah">
                <form action="{{ route('alternative.create') }}" method="POST" autocomplete="off" class="form">
                    @csrf
                    <br>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <h6 class="label-control">Nama Alternatif</h6>
                                <input class="form-control" type="text" name="nama" placeholder="e.g. Alternative Height..." required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <h6 class="label-control">Kode</h6>
                                <input class="form-control" type="text" name="kode" placeholder="e.g. A9" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <h6 class="label-control">Vegetasi area embung</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Vegetasi area genangan embung')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md">
                            <h6 class="label-control">Volume material timbunan</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Volume material timbunan')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md">
                            <h6 class="label-control">Luas daerah dibebaskan</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Luas daerah yang akan dibebaskan')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md">
                            <h6 class="label-control">Volume tampungan efektif</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Volume tampungan efektif')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <h6 class="label-control">Lama operasi</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Lama operasi')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md">
                            <h6 class="label-control">Harga air/m3</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Harga air/m3')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md">
                            <h6 class="label-control">Akses jalan menuju site bendungan</h6>
                            <select class="form-control select2" style="width: 100%" name="criteria[]"
                                data-minimum-results-for-search="-1" required>
                                @foreach ($classifications as $classification)
                                @if ($classification->nama == 'Akses jalan menuju site bendungan')
                                <option value={{$classification->value}}>{{$classification->classification}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success btn-md" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card rounded">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md" id="DataTables">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Alternatives</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alternatives as $alternative)
                            <tr align="center">
                                <td>{{ $alternative->id }}</td>
                                <td>{{ $alternative->nama }}</td>
                                <td>{{ $alternative->kode }}</td>
                                <td>
                                    <a class="btn btn-info" href="#">Edit</a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#">Delete</button>
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

@endsection