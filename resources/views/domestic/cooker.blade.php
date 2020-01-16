@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title">Bikes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Alive Status</th>
              <th>Name</th>
              <th>Budget</th>
              <th>Category</th>
              <th>Description</th>
              <th>Distance</th>
              <th>Key</th>
              <th>Location</th>
              <th>Sub Category</th>
              <th>Time</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $udata)
              <tr>
                <td>{{ $udata['alive'] }}</td>
                <td>{{ $udata['name'] }}</td>
                <td>{{ $udata['budget'] }}</td>
                <td>{{ $udata['cat'] }}</td>
                <td>{{ $udata['des'] }}</td>
                <td>{{ $udata['distance'] }}</td>
                <td>{{ $udata['key'] }}</td>
                <td>{{ $udata['location'] }}</td>
                <td>{{ $udata['subCat'] }}</td>
                <td>{{ $udata['time'] }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Alive Status</th>
              <th>Budget</th>
              <th>Category</th>
              <th>Description</th>
              <th>Distance</th>
              <th>Key</th>
              <th>Location</th>
              <th>Sub Category</th>
              <th>Time</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
@stop
