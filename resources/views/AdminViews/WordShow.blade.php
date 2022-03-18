@extends('AdminViews.common')
@section('content')
	

<div class="container" style="margin-top:20px;">
<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        <div class="col col-xs-3 text-left">
        <a href="/AdminHome" class="btn btn-default" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i>الرئيسيه</a>
        </div>
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">اللجان</h1>
        </div>
        <div class="col col-xs-4 text-right ">
          <a type="button" class="btn  btn-success " href="../word/wordform" >اضافه كلمه<i class="fa fa-plus-square" ></i></a>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
			<th> التعريف </th>
            <th>الكلمه العربيه</th>
            <th>الكلمه الانجليزيه</th>
          
        
          </tr> 
         </thead>
         <tbody>
         @foreach( $words as $Word)
                
       
          <tr >
			 <td>  {{$Word->definition}}</td>
             <td> {{$Word->arabic_word}}</td>
             <td> {{$Word->english_word}} </td>
            
             <td align="center">
               <a href="{{url('/word/editform'.$Word->id)}}" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
               
             </td>
          </tr>
          
@endforeach
          </tbody>
        </table>
      </div><!-- END id="list" -->
       
     </div><!-- END tab-content --> 
    </div>
    @endsection
   
   