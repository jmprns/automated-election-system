@extends('layouts.app')

@section('html-title', '')

@section('css-top')
<link rel="stylesheet" href="{{asset_url()}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endsection

@section('css-bot')
@endsection

@section('page-title', 'Election')

@section('page-button')
<a href="{{base_url()}}election/create" class="btn btn-primary btn-sm float-sm-right">
    <i class="fas fa-plus"></i> Create New Election
</a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                    <th>Date Created</th>
                    <th>Name</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($elections as $election)
                    <tr>
                        <td>{{$election->created_at}}</td>
                        <td>{{$election->name}}</td>
                        <td>{{$election->start}}</td>
                        <td>{{$election->end}}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{base_url()}}election/{{$election->id}}/dashboard">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-xs" href="{{base_url()}}election/{{$election->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-xs" href="{{base_url()}}election/{{$election->id}}/delete">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
</div>
@endsection

@section('js-top')
<!-- DataTables -->
<script src="{{asset_url()}}plugins/datatables-bs4/js/jquery.dataTables.min.js"></script>
<script src="{{asset_url()}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('js-bot')
<script>
$(function () {
    $("#example1").DataTable();
});
</script>
@endsection