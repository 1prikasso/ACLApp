@extends('pages.template')

{{-- 
TODO: 
    ADD ROUTE TO CONFIG PAGE
--}}

@section('title')
    reports
@endsection

@section('content')

    
<table class="table">
    <a href=""><button>new report</button></a>

    <tr>
      <th>id</th>
      <th>report</th>
      <th>description</th>
      <th>user</th>
      <th>date</th>
    </tr>

    @foreach ($reports as $report)
        
    <tr>
        <td>{{$report->id}}</td>
        <td>{{$report->report}}</td>
        <td>{{$report->description}}</td>
        <td>{{$report->user()->name}}</td>
        <td>{{date_format($report->created_at," H:i d.m.Y") }}</td>

    </tr>
    @endforeach
  </table>

@endsection