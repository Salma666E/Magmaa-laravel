<div class="container ">
  <div class="row">
    <div class="col-md-12">
      <form action="{{url('meeting/display' )}} "method="post" >  
      {{csrf_field()}}
      <!--
      <label for="id">id</label>
        <input type="text" class="form-control"  id="id" name="id"  value="{{old('id')}}">
-->
        <label for="id">commision id</label>
        <input type="text" class="form-control"  id="commission_id" name="commission_id"  value="{{old('commision_id')}}">

        <label for="fname">session number</label>
        <input type="text" class="form-control" id="" name="session_num" value="{{old('session_num')}}" >
        <div class="form-row">
        <label for="image">date</label>
        <input type="date"  name="date" >
        </div >
        <label for="dep_id">course_num</label>
        <input type="text" class="form-control" id="course_num" name="course_num"  value="{{old('course_num')}}">

        
        <input class="btn btn-block btn-success"  style="margin-top:10px" type="submit" value="insert"> </button>
      </form>
      @foreach($errors->all() as $err)
    {{$err}}
    @endforeach
    </div>