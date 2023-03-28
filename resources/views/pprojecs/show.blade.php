@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
         <div>
            <h2> Show pprojecs</h2>
            <a class="btn btn-primary" href="{{ route('pprojecs.index') }}"> Back</a>
        </div>
        <hr/>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>اسم المشروع:</strong>
                    {{ $pprojec->projectname }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>النوع:</strong>
                    {{ $pprojec->type }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>المشرف:</strong>
                    {{ $pprojec->super}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>القسم:</strong>
                    {{ $pprojec->section }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>التاريخ:</strong>
                    {{ $pprojec->date }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>المستخلص:</strong>
                    {{ $pprojec->abstract }}
                </div>
            </div>
            </div>
        </div>
    </div>

   
@endsection
