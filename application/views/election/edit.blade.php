@extends('layouts.app')

@section('html-title', '')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title', 'Update Election')

@section('page-button')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Please fill up the form:</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{current_url()}}" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Election Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$election->name}}">
                    </div>

                    <div class="form-group">
                        <div class="row">   
                            <div class="col-6">
                                <label for="">Start</label>
                                <input type="datetime-local" name="start" class="form-control" value="{{$election->start}}">
                            </div>
                            <div class="col-6">
                                <label for="">End</label>
                                <input type="datetime-local" name="end" class="form-control" value="{{$election->end}}">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button class="btn btn-primary">Save Changes</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
            <!-- /.card -->
    </div>
</div>
@endsection

@section('js-top')

@endsection

@section('js-bot')
@endsection