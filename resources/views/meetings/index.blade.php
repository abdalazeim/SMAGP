@extends('layouts.layouthome')

@section('home')
    <div class="row">
        <div class="col-lg-12">
		 <div class="pull-left">

                <h2  >ادراة الاجتماعات</h2>

            </div>
		
            <div>
              
                <a class="btn btn-success" href="{{ route('meetings.create') }}">   اضافة اجتماع جديد</a>
            </div>
            <hr/>
        <!-- error -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif



    

     <table class="table table-bordered">

        <tr>

            <th>الرقم</th>

            <th>اسم المشروع</th>

            <th>المشرف </th>
                       <th>عنوان الاجتماع</th>
            <th>تاريخ البداية </th>
<th>زمن الاجتماع  </th>

            <th width="240px">الحدث</th>

        </tr>
    
     
      @foreach ($meetings as $meeting)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $meeting->projectname}}</td>
                    <td>{{ $meeting->super }}</td>

           <td>{{ $meeting->meeting }}</td>
            <td>{{ $meeting->date }}</td>
            <td>{{ $meeting->time }}</td>

            <td>
                <form action="{{ route('meetings.destroy',$meeting->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('meetings.show',$meeting->id) }}">عرض</a>

                    <a class="btn btn-primary" href="{{ route('meetings.edit',$meeting->id) }}">تعديل</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach  
          
    </table>

    {!! $meetings->links() !!}

@endsection
