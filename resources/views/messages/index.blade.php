
@extends('layouts.homestudents')

@section('students')



<body>
<center>
<h1>تم ارسال الرسالة بنجاح </h1>
</center>
<!--

<br><br>
<div class="formstyle">

<center>
<h1>ارسال رسالة الى مشرف</h1>
</center>
</div "col-lg-12 margin-tb">
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">
 
  <form method="post" action="postspost.php" name="myPost" onsubmit="return validatePost()" class="post">
  <fieldset class="account-info">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
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

    <table class="table table-bordered" >
        <tr class="sub>
            <th>No</th>
            <th>اسم المشروع</th>
            <th>نوع المشروع</th>
            <th width="280px" topic_cat>Action</th>
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
</textarea>
    

   

  </fieldset>
  
</form>
<br>
</div>-->


