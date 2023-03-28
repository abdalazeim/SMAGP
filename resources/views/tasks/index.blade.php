
@extends('layouts.layouthome')

@section('home')


  <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2  >ادراة المهام</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('tasks.create') }}"> اضافة مهام</a>

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

            <th>عنوان المهمة</th>
            <th>تاريخ البداية</th>
            <th>تاريخ النهاية</th>
            


            <th width="240px">الحدث</th>

        </tr>

        @foreach ($tasks as $task)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $task->projectname }}</td>

            <td>{{ $task->address }}</td>
           <td>{{ $task->datebinge }}</td>
            <td>{{ $task->dateend }}</td>
            

            <td>

                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $tasks->links() !!}



@endsection