@extends('layouts.layouthome')

@section('home')

<div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">

                <h2  >بيانات الطلاب </h2>

            </div>
            <a class="btn btn-success" href="{{ route('students.create') }}"> اضافة طالب جديد</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

    <table class="table table-responsive table-bordered">
    <thead >
           <th>الرقم</th>
            <th>اسم الطالب</th>
            <th>الرقم الجامعي</th>
            <th>البريد الإلكتروني</th>
            <th>النوع</th>
            <th>رقم الهاتف</th>
            <th>الكليه</th>
            <th>القسم</th>
            <th width="280px">الحدث</th>
    </thead>
    <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->number }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->colleg }}</td>
                <td>{{ $student->section }}</td>
                <td>

                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">عرض</a>
                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">تعديل</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
   </table>
</div>

    {!! $students->links() !!}



@endsection
