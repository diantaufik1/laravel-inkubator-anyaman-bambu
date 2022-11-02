@extends('dashboard.layout.main')

@section('container')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body card-block">
                        <form action="kontrola" method="POST" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="name" name="nama" placeholder="Otomatis" value="{{ auth()->user()->nama }}" lass="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Awal Berat</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" min="0" max="20000" name="awal_berat" placeholder="gram" class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Nilai Berat</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" min="0" max="20000" name="nilai_berat" placeholder="gram" class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="customRange1" class=" form-label">Min Suhu</label></div>
                                <div class="col-12 col-md-6">
                                    <input type="range" class="form-range" id="customRange1" min="0" max="80" step="1"  name="min_suhu" onchange="ubahsuhuawal(this.value)"></div>
                                <div class="col col-md-3"><span id="posisiawal"></span>Derajat</div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="customRange1" class=" form-label">akhir Suhu</label></div>
                                <div class="col-12 col-md-6">
                                    <input type="range" class="form-range" id="customRange1" min="0" max="80" step="1"  name="nilai_suhu" onchange="ubahsuhuakhir(this.value)"></div>
                                <div class="col col-md-3"><span id="posisiakhir"></span>Derajat</div>
                            </div>
                            @foreach ($kontrol as $por)
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Blower</label></div>
                                <div class="col-12 col-md-9"><div class="form-check">
                                    <input class="form-check-input" type="radio"  name="blower" value="0" id="flexRadioDefault1" @if ($por->blower == 0)
                                    checked
                                    @endif >
                                    <label class="form-check-label" for="flexRadioDefault1">
                                     Mati
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="blower" value="1" id="flexRadioDefault2" @if ($por->blower == 1)
                                    checked
                                    @endif >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Hidup
                                    </label>
                                  </div></div>
                            </div>
                            @endforeach
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Deskripsi</label></div>
                                <div class="col-12 col-md-9">
                                    <select class="form-select" aria-label="Default select example" name="bambu_id">
                                        <option disabled value>Pilih Jenis Bambu</option>
                                       @foreach ( $bambu as $bam )
                                       <option value="{{ $bam->id }}">{{ $bam->deskripsi }}</option>
                                       @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="row form-group float-end">
                                <div class="col col-md-3"><label class=" form-control-label"></label></div>
                                <div class="col-12 col-md-9"><input class="btn btn-primary" type="submit" value="kirim"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Waktu,Tanggal</th>
                        <th>Berat Awal Anyaman</th>
                        <th>Berat Akhir Anyaman</th>
                        <th>Suhu Awal</th>
                        <th>Suhu Akhir</th>
                        <th>Blower</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontrol as $por)
                    <tr>
                        <td>1</td>
                        <td>{{ $por->created_at }}</td>
                        <td>{{ $por->awal_berat }}</td>
                        <td>{{ $por->nilai_berat }}</td>
                        <td>{{ $por->min_suhu }}</td>
                        <td>{{ $por->nilai_suhu }}</td>
                        <td> @if ( $por->blower == 1)
                        <span style="front-weight: 500; font-size: 15px">Hidup </span>
                         @else
                         <span style="front-weight: 500; font-size: 15px">Mati </span>
                         @endif
                        </td>
                        <td>{{ $por->bambu->deskripsi }}</td>

                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div><!-- .animated -->
</div> <!-- .content -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
    // function ubahstatus(value){
    //     if(value == true)
    //     value = "ON";
    //     else
    //     value = "OFF";
    //     document.getElementById('status').innerHTML = value;

    //      //AJAK untuk merubah status relay
    //      var xmlhttp = new XMLHttpRequest();
    //         xmlhttp.onreadystatechange = function () {
    //             if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
    //             {
    //                 document.getElementById('status').innerHTML = value;
    //                 responseText;
    //             }
    //         }
    //         xmlhttp.open("GET", "/kontrolblower?blower=" + value, true);
    //         xmlhttp.send();
    // }
    function ubahsuhuakhir(value){
        document.getElementById('posisiakhir').innerHTML = value;
    }
    function ubahsuhuawal(value){
        document.getElementById('posisiawal').innerHTML = value;
    }
</script>
@endsection
