

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>عرض ببيانات المشروع</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم المشروع</th>
            <th>نوع المشروع</th>
           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $product->name }}</td>
			
            <td>{{ $product->detail }}</td>
						  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
