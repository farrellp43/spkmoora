@extends('layouts.admin')

@section('content')

@section('pages','data')
@section('title','alternatives')

@push('scripts')

@endpush



<div class="container">
    <div class="card rounded card-primary">
        <div class="card-body">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTambah"
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
                                <input class="form-control" type="text" name="nama" placeholder="e.g. Tembalang..."
                                    required>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
                                <option value={{ $classification->value }}>{{ $classification->classification }}
                                </option>
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
            <div class="card rounded card-primary">
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-md" id="DataTables">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Alternatives</th>
                                <th>Code</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                                <th>C7</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($alternatives as $data)
                            <tr align="center">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kode }}</td>
                                <td>{{ $data->vegetasi_area }}</td>
                                <td>{{ $data->volume_material }}</td>
                                <td>{{ $data->luas_daerah }}</td>
                                <td>{{ $data->volume_tampungan }}</td>
                                <td>{{ $data->lama_operasi }}</td>
                                <td>{{ $data->harga_air }}</td>
                                <td>{{ $data->akses_jalan }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('alternative.edit', $data->id) }}">Edit</a>
                                    <button class="btn btn-danger" data-toggle="modal"
                                        data-target="#modaldelete{{ $data->id }}">Delete</button>
                                    <div class="modal fade" id="modaldelete{{ $data->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Alternative</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 style="font-weight:normal">Do you really want to delete
                                                        alternative {{ $data->nama }}?</h6>
                                                    <div class="text-secondary" style="align-content: flex-start">Last
                                                        updated:
                                                        {{ $data->updated_at->format('d F Y') }}
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-whitesmoke br">
                                                    <div style="display:none">
                                                        <input type="text" name="id" value="{{ $data->id }}">
                                                    </div>
                                                    <button class="btn btn-md btn-default"
                                                        data-dismiss="modal">No</button>
                                                    <form action="{{ route('alternative.delete', $data->id) }}"
                                                        method="POST" class="form">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" type="submit">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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