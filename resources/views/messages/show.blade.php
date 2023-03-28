@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  عرض كل المشاريع</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>اسم المشروع:</strong>
                {{ $message->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نوع المشروع:</strong>
                {{ $message->text }}
            </div>
        </div>
    </div>
@endsection
