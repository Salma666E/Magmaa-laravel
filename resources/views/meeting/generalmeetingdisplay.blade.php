<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <title>Document</title>
</head>
<body style="text-align:center;background-image:url('/Water.jpg');background-size: cover" >
   

   
   
                        <form action="{{url('/meeting/searchGmeeting' )}} "method="post" style="margin-top:300px">
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
                                  
      {{csrf_field()}}

  <input type="Date" placeholder="Search.." name="date">
  <input class="btn btn-info"  style="margin-top:10px" type="submit" value="insert"> </button>
</form>
									
								</div>
							</div>
			            </section>
						
                        