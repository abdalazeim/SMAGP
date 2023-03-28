


@extends('layouts.homestudents')

@section('students')


    <div class="row">
        <div class="col-lg-12">
            <div>
                <h2 class="text-center">pprojecs</h2>
                <a class="btn btn-success" href="{{ route('pprojecs.create') }}">   اضافة مشروع جديد</a>
            </div>
            <hr/>
        <!-- error -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif



        </div>
    </div>

    

    <table class="table  table-bordered">
      <thead>
           <th>No</th>
            <th>اسم المشروع</th>
            <th>النوع</th>
            <th>المشرف</th>
            <th>القسم</th>
            <th>التاريخ</th>
            <th>المستخلص</th>

            <th width="280px">الحدث</th>
      </thead>
      <tbody>
      @foreach ($pprojecs as $pprojec)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pprojec->projectname}}</td>
                    <td>{{ $pprojec->type}}</td>

           <td>{{ $pprojec->super}}</td>
            <td>{{ $pprojec->section }}</td>
            <td>{{ $pprojec->date }}</td>
            <td>{{ $pprojec->abstract }}</td>

            <td>
                <form action="{{ route('pprojecs.destroy',$pprojec->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('pprojecs.show',$pprojec->id) }}">Show</a>


                    @csrf
                    @method('DELETE')

                </form>
            </td>
        </tr>
        @endforeach  
      </tbody>      
    </table>

    {!! $pprojecs->links() !!}

@endsection
