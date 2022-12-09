@extends('layouts.headfoot')
@section('title','CCTV')

@section('content')

@if(\Session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
        @endif

<div class="mb-3">
  <div class="card shadow">
    <div class="card-header">
      <h2>SENARAI LAPORAN</h2>
      @csrf
      <table class="table table-hover" style="text-align:center" >
      <thread>
        <tr>
          <th class="col">BIL</th>
          <th class="col">TARIKH</th>
          <th class="col">MASA</th>
          <th class="col">LOKASI</th>
          <th class="col">LAPORAN KEJADIAN</th>
          <th class="col">MASA DI LAPOR</th>
          <th class="col">TINDAKAN</th>
          <th class="col">EDIT & DELETE</th>
        </tr>
      </thread>
      <tbody>
                            @foreach ($report as $report)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $report->report_tarikh }}</td>
          <td>{{ $report->report_masa }}</td>
          <td>{{ $report->report_lokasi }}</td>
          <td>{{ $report->report_laporan }}</td>
          <td>{{ $report->report_masalapor }}</td>
          <td>{{ $report->report_saduan }}</td>
          <td>
            <!-- Edit user button -->
            <form action ="/kemaskini/Kemaskini/edit/{{$report->report_id}}" method="GET">
            <button type="submit" class="btn btn-success "><i class="fas fa-edit"> EDIT</i></button>
            </form>
            <form method="get" action="/kemaskini/delete/{{$report->report_id}}/"> 
            <button onclick="return confirm('Betul Ingin Padam Data Ini ?')" class="btn btn-danger button-sm" ><i class="fas fa-trash"> PADAM</i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection