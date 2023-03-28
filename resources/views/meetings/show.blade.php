

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة الاجتماعات</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('meetings.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th> </th>
            <th>اسم المشروع</th>
            <th>المشرف</th>
			<th>عنوات الاجتماع</th>
		    <th>تاريخ البداية</th>
		       <th>زمن الاجتماع</th>
  
           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $meeting->projectname }}</td>
			
            <td>{{ $meeting->super }}</td>
			            <td>{{ $meeting->meeting }}</td>
            <td>{{ $meeting->date }}</td>
            <td>{{ $meeting->time }}</td>
 
                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
