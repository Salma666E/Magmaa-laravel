<form class="form-detail" action="{{url('transactions/search')}}" method="POST">
			{{csrf_field()}} 
                
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" id="id" class="input-text"  name="username" >
					</div>
                    <div class="form-row-last">
				<input  class="register"  type="submit" value="ارسال"> </input>
				</div>
</form>                    