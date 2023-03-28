

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة المشرفي</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sups.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم المشرف</th>
            <th>البريد الاكتروني</th>
			<th>رقم الهاتف</th>
		    <th>الكلية</th>
		       <th>التخصص </th>
  <th>حول المشرف </th>

           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $sup->name }}</td>
			
            <td>{{ $sup->email }}</td>
			            <td>{{ $sup->telephone }}</td>
            <td>{{ $sup->colleg }}</td>
            <td>{{ $sup->spec }}</td>
 <td>{{ $sup->about }}</td>
						  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
