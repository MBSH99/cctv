@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

<div class="container my-5">
    <div class="card shadow">
        @csrf
        <div class="card-header">
            <table class="table table-light table-striped">
                <thead>
                <tr>
                    <th scope="row">TARIKH KEJADIAN :</th>
                    <td>{{$report->report_tarikh}}</td>
                    </tr>
                    <tr>
                    <th scope="row">MASA KEJADIAN   :</th>
                    <td>{{$report->report_masa}}</td>
                    </tr>
                    <tr>
                    <th scope="row">NO CCTV / LOKASI:</th>
                    <td>{{$report-> report_lokasi}}</td>
                    </tr>
                    <tr>
                    <th scope="row">LAPORAN KEJADIAN:</th>
                    <td>{{$report-> report_laporan}}</td>
                    </tr>
                    <tr>
                    <th scope="row">MASA DI LAPOR   :</th>
                    <td>{{$report-> report_masalapor}}</td>
                    </tr>
                </thead>
            </table>
            <h2 class="text-centre">MAKLUMBALAS</h2>
            <form method="post" action="/maklumbalas/{{$report->report_id}}" enctype="multipart/form-data">
             @csrf
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="row">TARIKH JAWAB :</th>
                        <td><input type="date" id="maklumbalas_date" name="maklumbalas_date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <th scope="row">TINDAKAN JAWAPAN :</th>
                        <td>
                        <textarea class="form-control" placeholder="Sila Isikan Jawapan Anda" id="maklumbalas_jabatan" name="maklumbalas_jabatan"  style="height: 100px" rows="2"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">CATATAN :</th>
                        <td>
                        <textarea class="form-control" placeholder="Sila Isikan Catatan Anda" id="maklumbalas_catatan" name="maklumbalas_catatan" style="height: 100px" rows="2"></textarea>
                        </td>
                    </tr>
                </thead>    
            </table>
            <div class="row">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        </div>
</form>
    </div>
</div>
</div>

@endsection