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
          <a type="button" class="btn  btn-success " href="../arabicword/insert" >اضافه كلمه<i class="fa fa-plus-square" ></i></a>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
			<th> الوصف </th>
            <th>المعنى</th>
            <th>الكلمه بالعربى</th>
          
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>
         @foreach( $arabic_word as $Arabic_Word)
                <tr >
			 <td>{{$Arabic_Word->terms}}</td>
             <td> {{$Arabic_Word->definition}}</td>
             <td>{{$Arabic_Word->arabic_word}} </td>
            
             <td align="center">
               <a href="{{url('/arabicword/editform'.$Arabic_Word->id)}}" class="btn btn-primary" title="Edit"><i class="fa fa-pencil"></i></a>
               
             </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div><!-- END id="list" -->
       
     </div><!-- END tab-content --> 
    </div>
    @endsection
   
   