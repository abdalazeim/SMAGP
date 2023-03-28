
@extends('layouts.layouthome')

@section('home')


  <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2  >ادراة المصادر</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('sources.create') }}"> اضافة مصدر مشروع جديد</a>

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

            <th>الرقم</th>

            <th>اسم المشروع</th>

            <th>النوع </th>
            <th> المرفق</th>
            <th> الكليه</th>
            <th>القسم</th>


            <th width="240px">الحدث</th>

        </tr>

        @foreach ($sources as $source)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $source->projectname }}</td>

            <td>{{ $source->type }}</td>
           <td>{{ $source->annex }}</td>
            <td>{{ $source->colleg }}</td>
            <td>{{ $source->section }}</td>


            <td>

                <form action="{{ route('sources.destroy',$source->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('sources.show',$source->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('sources.edit',$source->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $sources->links() !!}



@endsection