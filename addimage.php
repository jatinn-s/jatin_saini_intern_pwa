<!DOCTYPE html>
<html>
<head>
	<title>Add Image</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Add A Picture!</h1>

    
    <?php if(isset($error)){echo $error;}?> 
      <?php echo form_open_multipart('hello/do_upload');?> 
        <div class="d-flex justify-content-center" style="font-size: 3rem">
		<form>
         <div class="form-group form-group-lg">
         <label> Your name:</label>
      	 <input type="text" class="form-control input-lg" name="yname">
         <input type = "file" class="form-control input-lg" name = "userfile" size = "20" /> 
         <button type="submit" class="btn btn-primary btn-lg">Upload</button>
         </div> 
        </form>
    </div>
</body>
</html>