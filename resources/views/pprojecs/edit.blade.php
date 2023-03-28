@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2 class="text-center">تعديل بيانات المشروع</h2>
                <a class="btn btn-primary" href="{{ route('pprojecs.index') }}"> Back</a>
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
    <form action="{{ route('pprojecs.update',$pprojec->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>اسم المشروع:</strong>
                    <input type="text" name="projectname" value="{{$pprojec->projectname }}" class="form-control" placeholder="projectname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نوع المشروع :</strong>
                    <input type="text" name="type" value="{{$pprojec->type}}" class="form-control" placeholder="type">
                </div>
            </div>
            
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> المشرف:</strong>
                    <input type="text" name="super" value="{{$pprojec->super}}" class="form-control" placeholder="super">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> القسم:</strong>
                    <input type="text" name="section" value="{{$pprojec->section }}" class="form-control" placeholder="section">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> التاريخ:</strong>
                    <input type="text" name="date" value="{{$pprojec->date }}" class="form-control" placeholder="date">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> المستخلص:</strong>
                    <input type="text" name="abstract" value="{{$pprojec->abstract }}" class="form-control" placeholder="abstract">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
      </form>
   </div>
</div>
@endsection
