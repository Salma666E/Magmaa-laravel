

@extends('AdminViews.common')
@section('content')
	

<div class="container" style="margin-top:20px;">
<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row"> 
        <div class="col col-xs-3 text-left">
            <a href="/AdminHome" class="btn btn-default" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i>الرئيسية</a>
        </div>
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">اللجان</h1>
        </div>
        <div class="col col-xs-4 text-right ">
          <a type="button" class="btn  btn-success " href="../posts/postform" >اضافه <i class="fa fa-plus-square" ></i></a>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
			<th> صور </th>
            <th>النشاطات</th>
            <th>ألرقم</th>
          
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>
         @foreach( $posts as $Post)
          <tr >
			 <td><img src="{{'upload/'.$Post->image}}" width="300" higth="300"> </td>
             <td>{!!$Post->activity!!}</td>
             <td>{{$Post->id}} </td>
            
             <td align="center">
               <a href="{{url('/posts/editformp' .$Post->id)}}" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
               
              <a href="/display" onclick="$(this).next('div').slideToggle(1000);return false;"></a>
              
                <div style="display: none">
               
        
          
            
           
               </div>
               
               <a href="{{url ('/test' .$Post->id )}}" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
             </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div><!-- END id="list" -->
     </div><!-- END tab-content --> 
     {{$posts->links()}}
    </div>
    
   
    @endsection
  
   
<!-- <P>
@foreach( $posts as $Post)
<p>{{$Post->id}} -->

<!-- <p><img src="{{'upload/'.$Post->image}}" width="300" higth="300"></p>

{{$Post->activity}}</p> -->
<!-- <a href="{{url('/posts/editformp' .$Post->id)}}">edit</a>

<form action="{{url ('/test' .$Post->id )}}">

<input class="btn btn-block btn-success"  style="margin-top:10px" type="submit" value="delete"> </button>

</form>

@endforeach
</p>
{{$posts->links()}} 
-->