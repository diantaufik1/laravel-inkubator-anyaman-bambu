@extends('dashboard.layout.main')

@section('container')

@if (session() ->has('Success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('Success') }}

</div>
@endif

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Waktu,Tanggal</th>
                                    <th>Berat Awal</th>
                                    <th>Berat akhir</th>
                                    <th>Suhu Awal</th>
                                    <th>Suhu akhir</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $por)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{ $por->created_at }}</td>
                                    <td>{{ $por->awal_berat }}</td>
                                    <td>{{ $por->nilai_berat }}</td>
                                    <td>{{ $por->min_suhu }}</td>
                                    <td>{{ $por->nilai_suhu }}</td>
                                    <td>{{ $por->nama }}</td>
                                    <td>{{ $por->bambu->deskripsi }}</td>
                                    <td>
                                        <a href="laporanDetail/{{$por->id}}" class="btn btn-info">Detail</a>
                                        @if (auth()->user()->role_id == '1')
                                        <a href="laporan/delete/{{$por->id}}" class="btn btn-danger">Hapus</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <form action="laporan" class="form-horizontal">
                            <div class="row form-group">
                                @if (auth()->user()->role_id == '1')
                                <div class="col-12 col-md-4">
                                    <select class="form-select" aria-label="Default select example" name="cari">
                                        <option value="">Pilih nama</option>
                                       @foreach ( $user as $us )
                                       <option value="{{ $us->nama }}">{{ $us->nama }}</option>
                                       @endforeach
                                      </select>
                                </div>
                                <div class="col-12 col-md-3">
                                    <input class="btn btn-primary" type="submit" value="Cari">
                                </div>
                                @endif
                                <div class="col-12 col-md-2">
                                    <span class="alert alert-info" role="alert">Total data : {{ $count }}</span>
                                </div>
                                <div class="col-12 col-md-3">
                                    <span class="alert alert-info" role="alert">Total Berat : {{ $total}} Gram</span>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection
