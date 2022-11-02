@extends('dashboard.layout.main')
    @section('container')

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Monitoring</div>
                        <div class="stat-digit"><span id="readberat">0</span> gram</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Pengguna</div>
                    <div class="stat-digit">{{ auth()->user()->nama }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
         $(document).ready(function() {
            setInterval(function () {
                $("#readberat").load("{{ url('/dashboardberat'); }}")
            }, 1000);
        });
    </script>
    @endsection







