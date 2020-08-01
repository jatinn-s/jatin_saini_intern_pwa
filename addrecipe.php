<!DOCTYPE html>
<html>
<head>
	<title>Add Recipe</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="d-flex justify-content-center">
    <div >
    	<img class="img-responsive imghome" src="http://localhost/codeigniter/uploads/Logo_5_1.png">
     </div>
    </div>
    
	<div class="d-flex justify-content-center" style="font-size: 3rem">
	<form method="post" action="http://localhost/codeigniter/index.php/Hello/data">
	<div class="form-group form-group-lg">
    <label>Recipe name</label>
    <input type="text" class="form-control input-lg" name="rname" id="rn">
    <label>Recipe Discription</label>
    <input type="text" class="form-control input-lg" name="desc" id="rd">
    <label>By:</label>
    <input type="text" class="form-control input-lg" name="name" id="n"> 
    <button type="submit" class="btn btn-primary btn-lg">Add</button>
</div>
    </form>
</div>
     

</body>
</html>