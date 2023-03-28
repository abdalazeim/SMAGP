

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة المهام</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tasks.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم المشروع</th>
            <th>عنوان المهمة</th>
			<th>تاريخ البداية</th>
		    <th>تاريخ النهاية</th>
		       


           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $task->projectname }}</td>
			
            <td>{{ $task->address }}</td>
			            <td>{{ $task->datebinge }}</td>
            <td>{{ $task->dateend }}</td>
          
						  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
