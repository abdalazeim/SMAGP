@extends('layouts.homestudents')

@section('students')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>هذا مشاريع مختراحة من قبل ادراة الكلية </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success">  قائمة المشاريع المحتراحه</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>اسم المشروع</th>
            <th>نوع المشروع</th>
            <th width="180px">احتارمشروع واحد</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

 <a width="180px" height="72px" class="btn btn-info" href="#">اختيار</a>
                    

                    @csrf
                    @method('DELETE')

                   
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
