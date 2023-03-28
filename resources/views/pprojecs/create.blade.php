@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div>
            <h2 class="text-center">اضافة  افضلىمشروع جديد</h2>
            <a class="btn btn-primary" href="#"> Back</a>
			
        </div>
        <hr/>
     <!-- error -->
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
        <!-- error -->

        <!-- form -->
        <form action="{{ route('pprojecs.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>اسم المشروع:</strong>
                        <input type="text" name="projectname" class="form-control" placeholder="الرجاء ادخال اسم المشروع">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>نوع المشروع :</strong>
                        <input type="text" name="type" class="form-control" placeholder="الرجاء ادخال  النوع">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> المشرف:</strong>
                        <input type="text" name="super" class="form-control" placeholder="الرجاء ادخالاسم المشرف ع">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>القسم  :</strong>
                        <input type="text" name="section" class="form-control" placeholder="الرجاء ادخال  القسم ">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> التاريخ :</strong>
                        <input type="text" name="date" class="form-control" placeholder="الرجاء ادخال التاريخع">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>المستخلص  :</strong>
                        <input type="text" name="abstract" class="form-control" placeholder="الرجاء ادخال المستخلص">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
            </form>
        <!-- form -->

    </div>
</div>
@endsection
