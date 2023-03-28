@extends('projects.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New project</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('projects.store') }}" method="POST">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>projects_name:</strong>

                <input type="text" name="name" class="form-control" placeholder="projects_name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>projects_name:</strong>

                <input type="text" name="name" class="form-control" placeholder="projects_name">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sup_id:</strong>

                <input type="text" name="name" class="form-control" placeholder="sup_id">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>type:</strong>

                <input type="text" name="name" class="form-control" placeholder="type">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>status:</strong>

                <input type="text" name="name" class="form-control" placeholder="status">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>abstract:</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="abstract"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
