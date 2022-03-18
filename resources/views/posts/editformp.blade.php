
@extends('layouts.postApp')

@section('content')

<div class="container">
<div class="card card-default">
    <div class="card-header">
        Create Post
    </div>

    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{url('/posts/editpost'.auth()->user()->id.'/'.$posts->id )}}" enctype="multipart/form-data">
       {{csrf_field()}}

        <div class="form-group">
            <label for="activity">Activity</label>
            <input type="hidden" id="activity"  name="activity" value="{{$posts->activity}}">
            <trix-editor input="activity" > </trix-editor>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image" value="{{$posts->image}}">
           {{$posts->image}}
        </div> 

        <div class="form-group">
            <button type="submit" class="btn btn-success">
                edit Post
            </button>
        
        </div>

    </form>
    </div>
</div>
</div>


@endsection


@section('scripts') 
<!-- A script for trix editor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection

@section('css') <!-- css from app file -->
<!-- A script for trix editor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection













<!--<div class="container ">
  <div class="row">
    <div class="col-md-12">
      <form action="{{url('/posts/editpost'.$posts->id )}} "method="post" enctype="multipart/form-data">  
      {{csrf_field()}}
      <label for="id">id</label>
        <input type="text" class="form-control"  id="id" name="id"  value="{{$posts->id}}">

        <label for="fname">activity</label>
        <input type="text" class="form-control" id="activity" name="activity" value="{{$posts->activity}}" >
        <div class="form-row">
        <label for="image">image</label>
        <input type="file"  name="image" >
        </div >
        <label for="dep_id">userid</label>
        <input type="text" class="form-control" id="user_id" name="user_id"  value="{{$posts->user_id}}">

        
        <input class="btn btn-block btn-success"  style="margin-top:10px" type="submit" value="update"> </button>
      </form>
    </div>