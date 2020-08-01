<html>
 
   <head> 
      <title>Upload success!</title> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
	
   <body>  
      <h3 style="text-align: center;">Your file was successfully uploaded!</h3>
      <div class="d-flex justify-content-center">
      <div>  
		<img src="http://localhost/codeigniter/uploads/<?php echo $upload_data['file_name'] ;?>">
      </div>
   </div>
      <a href="http://localhost/codeigniter/index.php/Hello/newpage"><button class="btn btn-block btn-lg">Go to main page</button></a> 
   </body>
	
</html>