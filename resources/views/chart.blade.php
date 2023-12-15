<x-app>
    <!-- Content INFORMATION -->
    <div class="row">

        @if ($data)
        <!-- Suhu -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Suhu</b></h4>
                            </div>
                            <h4><span id="suhu">{{ $data->suhu }}</span> °C</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelembapan Ruang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Kelembapan Udara</b></h4>
                            </div>
                            <h4><span id="udara">{{ $data->kelembapan_udara }}</span> %</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelembapan Tanah -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h4><b>Kelembapan Tanah</b></h4>
                            </div>
                            <h4><span id="tanah">{{ $data->kelembapan_tanah }}</span> %</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Waktu -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5>
                                    <b>
                                        <script async fetchpriority="high">
                                            function display_ct() {
                                                var x = new Date()
                                                var ampm = x.getHours() >= 12 ? ' PM' : ' AM';

                                                var x1 = x.getDate() + "/" + (x.getMonth() + 1) + "/" + x.getFullYear();
                                                x2 = x1 + " - " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds() + ampm;
                                                document.getElementById('ct').innerHTML = x2;
                                                display_c();
                                            }

                                            function display_c() {
                                                var refresh = 1000; // Refresh rate in milli seconds
                                                mytime = setTimeout('display_ct()', refresh)
                                            }
                                            display_c()
                                            </script>
                                        <span id='ct' style="font-size: 28px" fetchpriority="high"></span>

                                    </b>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content CHART -->
    <div class="row">

        <!-- Tanah Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Kelembapan Udara (%)</h6>
                    <div class="help-tip">
                        <p>Menampilkan Kelembapan Ruang yang menjadi sebuah patokan dalam mengamati pertumbuhan tanaman pada Rumah Hijau. Alat akan secara otomatis mengaktifkan/menonaktifkan pompa air.</p>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="GrafikUdara"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Udara Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Kelembapan Tanah (%)</h6>
                    <div class="help-tip">
                        <p>This is the inline help tip! You can explain to your users what this section of your web app is about.</p>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="GrafikTanah"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Suhu Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; font-size:22px">Grafik Suhu (℃)</h6>
                <div class="help-tip">
                    <p>This is the inline help tip! You can explain to your users what this section of your web app is about.</p>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="GrafikSuhu"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Page level plugins -->
    <script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/chart-area-suhu1.php') }}"></script>
    <script src="{{ url('js/demo/chart-bar-udara1.php') }}"></script>
    <script src="{{ url('js/demo/chart-bar-tanah1.php') }}"></script>
</x-app>
