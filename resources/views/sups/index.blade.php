

@extends('layouts.layouthome')

@section('home')



  <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2  >ادراة المشرفين</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('sups.create') }}"> اضافة مشرف</a>

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

            <th>اسم المشرف</th>

            <th>البريدالاكتروني </th>
            <th>رقم الهاتف</th>
            <th>الكليه</th>
            <th>التخصص</th>
            <th>حول</th>
            <th>حالة الحساب</th>


            <th width="240px">الحدث</th>

        </tr>

        @foreach ($sups as $sup)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $sup->name }}</td>

            <td>{{ $sup->email }}</td>
           <td>{{ $sup->telephone }}</td>
            <td>{{ $sup->colleg }}</td>
            <td>{{ $sup->spec }}</td>
            <td>{{ $sup->about }}</td>
            <td> <a class="btn btn-info" href="">الغاء التفعيل</a></td>


            <td>

                <form action="{{ route('sups.destroy',$sup->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('sups.show',$sup->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('sups.edit',$sup->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $sups->links() !!}



@endsection