@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Gender</th>
              <th>Phone</th>
              <th>Nid</th>
              <th>Email</th>
              <th>Date of Birth</th>
              <th>Picture</th>
            </tr>
            </thead>
            <tbody>
              @foreach($value as $user)
              <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['gender'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td>{{ $user['nid'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['dataOfBirth'] }}</td>
                <td>
                  <img src="{{ $user['photo_uid'] }}" alt="Smiley face" height="50" width="50">
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Name</th>
              <th>Gender</th>
              <th>Phone</th>
              <th>Nid</th>
              <th>Email</th>
              <th>Date of Birth</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
@stop
