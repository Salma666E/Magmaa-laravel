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
    <form method="POST" action="{{url('display'.auth()->user()->id)}}" enctype="multipart/form-data">
       {{csrf_field()}}

        <div class="form-group">
            <label for="activity">Activity</label>
            <input type="hidden" id="activity"  name="activity">
            <trix-editor input="activity" > </trix-editor>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div> 

        <div class="form-group">
            <button type="submit" class="btn btn-success">
                Create Post
            </button>
            <a href="../display" class="btn btn-success float-right">
                show Post
            </a>
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


