

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة الطلاب</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم الطالب</th>
            <th>الرقم الجامعي</th>
			<th>البريد الاكتروني</th>
		    <th>النوع</th>
		       <th>رقم الهاتف </th>
  <th>  الكلية</th>
<th>  القسم</th>

           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $student->name }}</td>
			
            <td>{{ $student->number }}</td>
			            <td>{{ $student->email }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->mobile }}</td>
 <td>{{ $student->colleg }}</td>
				 <td>{{ $student->section }}</td>		  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
