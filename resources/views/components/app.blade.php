<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SIAURI adalah sebuah sistem monitoring suhu, kelembapan udara, dan kelembapan tanah.">
    <meta name="author" content="Nur Rahman seorang Mahasiswa Politeknik Negeri Ketapang.">

    <title>SIAURI</title>
    <link href="{{ url('img/siauri.webp') }}" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- My CSS INNER HELP TIPS --}}
    <link href="{{ url('css/my.css') }}" rel="stylesheet">

    {{-- Grafik --}}
    <script type="text/javascript" src="{{ url('jquery/jquery.min.js') }}"></script>

    {{-- AJAX untuk Realtime --}}
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#udara").load("{{ url('bacaudara') }}");
                $("#tanah").load("{{ url('bacatanah') }}");
            }, 1500);   // 1000ms = 1s
        });
    </script>
    {{-- <script>s
        var refreshId = setInterval(function(){
            $('#GrafikSuhu').load('bacasuhu');
        }, 1000 ) ;
    </script> --}}

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            setInterval( function() {
                $("#GrafikSuhu").load("{{url('chart-area-suhu1.php')}}");
                refresh();
            }, 1000 );
        });
    </script> --}}

    {{-- <script type="text/javascript">
        window.onload = function () {
            var refreshid = 1000;
            setInterval(function(){

            }, refreshid ) ;
    };
    </script> --}}

    {{-- PAGE RELOAD --}}
    {{-- <script>
        function timedRefresh(timeoutPeriod) {
            setTimeout("location.reload(true);", timeoutPeriod);
        }
        window.onload = timedRefresh(60000);
    </script> --}}
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <x-layout.sidebar />
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-layout.header />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{ $slot }}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <x-layout.footer />
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin-2.min.js') }}"></script>

    {{-- DATATABLE --}}
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
