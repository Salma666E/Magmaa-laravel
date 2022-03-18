<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    .margin-top-50 {
	margin-top: 100px;}
    /*Filter START*/
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
/*Filter END*/

.table-widthB{
    width: 48%;
    }
    
.table-widthA{
    width: 49.8%;
    }
    
.bg{
    background-color: white;
    }  
      
.tablescroll {
    overflow-y: auto;
	overflow-x: hidden;
	height: 189px;
	margin-right: 1px;
}
.marginTop30{
    margin-top:30px;
}

.radio,
.checkbox {
  margin-top: 0px;
  margin-bottom: 0px;
  }
  
  .checkbox,.radio{
  margin-top:0px;
  margin-bottom:0px
  }
  
.radio-margin{
    margin-left: -13px;
	margin-top: 7px;
}
.radio-margin{
    margin-left: -13px;
    margin-top: 7px;
}
.EU_DataTable td, th {
  padding: 6px;
  border: 1px solid #ccc;
  text-align: left;
  height: 50px;
}
th {
  background: #e5e5e5;
  color: #454545;
  font-weight: bold;
  height: 40px;
}
/*Radio and Checkbox START*/
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
/*Radio and Checkbox END*/
</style>
</head>
<body>
    
<div class="container">
  <h1 align="center"> <i>غياب الموظفين </i></h1>
    
    <div class="creatediv1 marginTop30">
    <form action="{{url('/meeting/Absence')}} "method="post" >
      {{csrf_field()}}
				<div class="row margin-top-50">
					<div class="col-md-12">
						<div class="panel panel-primary filterable">
							<div class="panel-heading">
								<h3 class="panel-title">اسماء الموظفين<span style="color: white; font-weight: bold;"> *</span></h3>
								<div class="pull-right">
                                <p>اختر اسماء الموظفين الحاضرين عن الاجتماع</p>
								</div>
							</div>
							<table class="span12">
								<table>
									<tr class="filters">
									<th style="width: 48%">
										<input type="text" class="form-control" placeholder="اسم الموظف" disabled>
									</th>
									<th style="width: 48%">
										<input  type="text" class="form-control" placeholder="الوظيفه" disabled>
									</th>
									<th style="width: 4.1%; width:50px;">
									</th>
									</tr>
								</table>
								<div class="bg tablescroll">
									<table class="table table-bordered table-striped">
                                    @foreach($users as $User)
										<tr>
                                        
											<td style="width: 49.8%">{{$User->name}}</th>
											<td style="width: 48%">{{$User->job}}</th>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
                                                   
														<input type="checkbox" value="{{$User->id}}" name="user_id[]">
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</th>
										</tr>
                                     @endforeach
									</table>

								</div>
							</table>
                            <input  hidden name=meeting_id value="{{$generalmeetings}}"></input>
						</div>
					</div>
				</div>
                            <input class="btn btn-primary btn-lg "   type="submit" value="ارسال">
        <!-- submit to arabicword/insert--->
         </input>
    
</div>
<script>
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
</body>
</html>
<!------ Include the above in your HEAD tag ---------->
