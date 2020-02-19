@extends('layouts.app')

@section('html-title', '')

@section('css-top')
<link rel="stylesheet" href="{{asset_url()}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
@endsection

@section('css-bot')
@endsection

@section('page-title')
{{$election->name}}
@endsection



@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Positions</span>
            <span class="info-box-number">1,410</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Candidates</span>
            <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Voters</span>
            <span class="info-box-number">13,648</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Result</span>
            <span class="info-box-number"><a href="#">Show Result</a></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Positions</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm">
                          <i class="fas fa-plus"></i> Create New Position
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Max</th>
                            <th>Candidates</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>President</td>
                                <td>All</td>
                                <td>1</td>
                                <td>3</td>
                                <td>
                                    <a class="btn btn-info btn-xs" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-xs" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Candidates</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm">
                          <i class="fas fa-plus"></i> Create New Candidate
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Max</th>
                            <th>Candidates</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>President</td>
                                <td>All</td>
                                <td>1</td>
                                <td>3</td>
                                <td>
                                    <a class="btn btn-info btn-xs" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-xs" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Voters</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm">
                          <i class="fas fa-plus"></i> Create New Voter
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Max</th>
                            <th>Candidates</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>President</td>
                                <td>All</td>
                                <td>1</td>
                                <td>3</td>
                                <td>
                                    <a class="btn btn-info btn-xs" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-xs" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
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
    $(".dataTable").DataTable();
});
</script>
@endsection