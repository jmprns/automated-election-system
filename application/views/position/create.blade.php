@extends('layouts.app')

@section('html-title', '')

@section('css-top')
@endsection

@section('css-bot')
@endsection

@section('page-title')
Create New Position
@endsection

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
                        <label>Election</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$election->name}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Position Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <div class="row">   
                            <div class="col-6">
                                <label for="">Type</label>
                                <input type="datetime-local" name="type" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Max Selection</label>
                                <input type="number" name="max" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button class="btn btn-primary">Submit</button>
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