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

            <h1>POLLING MATA KULIAH SEMESTER ANTARA</h1>
            <form action="/storePolling" method="POST">
                <input type="checkbox" id="sks" name="data[0][sks]" value="4">
                <label for="mk1"> PEMROGRAMAN WEB LANJUT (4 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[0][sks]" value="3">
                <label for="mk2"> KAPITA SELEKTA (3 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[0][sks]" value="2">
                <label for="mk3"> KEPEMIMPINAN (2 SKS)</label>
                <br />
                <input type="checkbox" id="sks" name="data[1][sks]" value="3">
                <label for="mk4"> ANALISIS DATA KESEHATAN (3 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[2][sks]" value="3">
                <label for="mk5"> ENTERPRISE RESOURCE PLANNING (3 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[3][sks]" value="2">
                <label for="mk6"> ETIKA PROFESI (2 SKS)</label>
                <br />
                <input type="checkbox" id="sks" name="data[4][sks]" value="4">
                <label for="mk7"> INTERNET OF THINGS (4 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[5][sks]" value="2">
                <label for="mk8"> METODE PENELITIAN INFORMATIKA (2 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[5][sks]" value="3">
                <label for="mk9"> DISAIN ANTARMUKA PENGGUNA (3 SKS)</label>
                <br />
                <input type="checkbox" id="sks" name="data[6][sks]" value="3">
                <label for="mk10"> PROSES BISNIS (3 SKS)</label><br>

                <input type="checkbox" id="sks" name="data[7][sks]" value="4">
                <label for="mk11"> BASIS DATA 2 (4 SKS)</label>
                <br />
                <input type="checkbox" id="sks" name="data[8][sks]" value="2">
                <label for="mk12"> BAHASA INDONESIA (2 SKS)</label>
                <br />
                <input type="Submit" value="SUBMIT">
            </form>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection