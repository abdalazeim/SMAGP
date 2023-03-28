@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('messages.create') }}">   اختراح مشروع جديد</a>
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
            <th>No</th>
            <th>اسم المشروع</th>
            <th>نوع المشروع</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($messages as $message)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $message->address }}</td>
            <td>{{ $message->text }}</td>
            <td>
                <form action="{{ route('messages.destroy',$message->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('messages.show',$message->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('messages.edit',$message->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $messages->links() !!}

@endsection
