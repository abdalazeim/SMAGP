

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة المصادري</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sources.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم المشروع</th>
            <th>نوع المصدر</th>
			<th>المرفق</th>
		    <th>الكلية</th>
		       <th>القسم </th>
 

           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $source->projectname }}</td>
			
            <td>{{ $source->type }}</td>
			            <td>{{ $source->annex }}</td>
            <td>{{ $source->colleg }}</td>
            <td>{{ $source->section }}</td>

						  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
