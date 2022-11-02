@extends('dashboard.layout.main')

@section('container')
<div class="row">
    <div class="col-md-12 d-flex justify-content-center ">
        <div id="grafik"></div>
    </div>
</div>
<div class="row mt-5 mb-5">
    <div class="col-md-6 d-flex justify-content-around">
        @foreach ($monitoring as $mo )
        <div class="suhu">
            <h2 class="m-3">Suhu</h2>
            <div class="box">
                <div class="chart" data-scale-color="blue" data-percent="{{ $mo->suhu }}"><span id="readsuhu">{{ $mo->suhu }}</span></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-around">
        <div class="kelembapan">
            <h2 class="m-3">Kelembapan</h2>
            <div class="box">
                <div class="chart" data-percent="{{ $mo->kelembapan }}"><span id="readkelembapan">{{ $mo->kelembapan }}</span></div>
            </div>
        </div>
    </div>
    @endforeach


</div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('public/assets/js/monitoring/jquery.easypiechart.js') }}"></script>
    {{-- <script src="{{ asset('public/assets/js/monitoring/highcharts.js') }}"></script> --}}
    <script src="{{ asset('public/assets/js/monitoring/Chart.js') }}"></script>
    {{-- <script src="assets/js/monitoring/jquery-latest.js"></script> --}}
    <script>
    $(function() {
            $('.chart').easyPieChart({
                //your options goes here
            });
        });

    $(document).ready(function() {

        setInterval(function () {
            $("#grafik").load("{{ url('/monitoringload'); }}")
        }, 5000);
    });
    //readsuhu
    $(document).ready(function() {
        setInterval(function () {
            $("#readsuhu").load("{{ url('/monitoringsuhu'); }}")
        }, 1000);
    });
    //readkelembapan
    $(document).ready(function() {
        setInterval(function () {
            $("#readkelembapan").load("{{ url('/monitoringkelembapan'); }}")
        }, 1000);
    });


    </script>
@endsection

