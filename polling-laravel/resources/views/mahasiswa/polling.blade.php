@extends('layouts.master')
@section('web-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form>
                <label for="fname">Nama:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="nrp">NRP:</label><br>
                <input type="text" id="nrp" name="nrp">
            </form>
            <form>
                <input type="checkbox" id="mk1" name="matkul1" value="PWL">
                <label for="mk1"> PEMROGRAMAN WEB LANJUT (4 SKS)</label><br>

                <input type="checkbox" id="mk2" name="matkul2" value="KAPSEL">
                <label for="mk2"> KAPITA SELEKTA (3 SKS)</label><br>

                <input type="checkbox" id="mk3" name="matkul3" value="KPM">
                <label for="mk3"> KEPEMIMPINAN (2 SKS)</label>

                <input type="checkbox" id="mk4" name="matkul4" value="ADK">
                <label for="mk4"> ANALISIS DATA KESEHATAN (3 SKS)</label><br>

                <input type="checkbox" id="mk5" name="matkul5" value="ERP">
                <label for="mk5"> ENTERPRISE RESOURCE PLANNING (3 SKS)</label><br>

                <input type="checkbox" id="mk6" name="matkul6" value="EP">
                <label for="mk6"> ETIKA PROFESI (2 SKS)</label>

                <input type="checkbox" id="mk7" name="matkul7" value="IOT">
                <label for="mk7"> INTERNET OF THINGS (4 SKS)</label><br>

                <input type="checkbox" id="mk8" name="matkul8" value="MPI">
                <label for="mk8"> METODE PENELITIAN INFORMATIKA (2 SKS)</label><br>

                <input type="checkbox" id="mk9" name="matkul9" value="DAP">
                <label for="mk9"> DISAIN ANTARMUKA PENGGUNA (3 SKS)</label>

                <input type="checkbox" id="mk10" name="matkul10" value="PB">
                <label for="mk10"> PROSES BISNIS (3 SKS)</label><br>

                <input type="checkbox" id="mk11" name="matkul11" value="BD">
                <label for="mk11"> BASIS DATA 2 (4 SKS)</label>
                
                <input type="checkbox" id="mk12" name="matkul12" value="BI">
                <label for="mk12"> BAHASA INDONESIA (2 SKS)</label>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection
