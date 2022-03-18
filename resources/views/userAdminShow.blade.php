@extends('AdminViews.common')
@section('content')
	
<form class="form-detail" action="{{url('userr/search')}}" method="POST" >
			{{csrf_field()}} 
                
				<div class="container"  style="margin-top:20px;">
        <h1>للبحث عن بيانات موظف ما</h1>
					<div class="form-row">
				<input  class="register"  type="submit" value="ارسال"> </input>
						<input type="text" id="id" class="input-text"  name="username" >
					</div>
</form>                    
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
            <h1 class="panel-title">الموظفين</h1>
        </div>
        <div class="col col-xs-4 text-right ">
          <a type="button" class="btn  btn-success " href="../userr/userform" >اضافه موظف<i class="fa fa-plus-square" ></i></a>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
            <th>البريد الالكترونى</th>
			<th> اللجنه </th>
      <th>الوظيفه </th>      
			<th> تاريخ الميلاد </th>
			
            <th>العنوان</th>
            
            <th>رقم المحمول</th>
            <th>الاسم</th>
            <th class="avatar">CV</th>
            <th>رقم</th>
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>
         @foreach( $users as $User)
         <tr>
        
		    
		     <td> {{$User->email}}</td>


		     <td> 
        @foreach($commissions as $Commission)
        
        @if($User->commision_id ==$Commission->id)
         {{$Commission->name}} 
         @endif
        
         @endforeach
         </td>
         <td>{{$User->job}} </td>
             <td>{{$User->dob}}</td>
			
             <td> {{$User->address}} </td>
             <td>   {{$User->phone}}</td>
             <td>   {{$User->name}}</td>
             
             <td class="avatar"><a href="{{url('cv'.$User->id)}}"	>cv</a></td>
             <td>   {{$User->id}}</td>
             <td align="center">
               <a href="{{url('/userr/useredit'.$User->id)}}" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
              <!-- <a href="" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
               
               <a href="#" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
            -->
             </td>
           
          </tr>
          @endforeach
          </tbody>
        </table>
      </div><!-- END id="list" -->
       
     </div><!-- END tab-content --> 
    </div>
    @endsection
   
   