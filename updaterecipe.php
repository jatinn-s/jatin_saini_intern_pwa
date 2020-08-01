<!DOCTYPE html>
<html>
<head>
	<title>Update Recipe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="d-flex justify-content-center">
    <div >
        <img class="img-responsive imghome" src="http://localhost/codeigniter/uploads/Logo_5_1.png">
     </div>
    </div>
    
    <div class="d-flex flex-column justify-content-center" style="font-size: 3rem">
    <form method="post" action="http://localhost/codeigniter/index.php/Hello/confirmupdate">
    <div class="form-group form-group-lg">
    <input type="hidden" name="upid" value="<?php echo $id ;?>">
    <label>Recipe name</label>
    <input type="text" class="form-control input-lg" name="rname" id="rn">
    <label>Recipe Discription</label>
    <input type="text" class="form-control input-lg" name="desc" id="rd">
    <label>By:</label>
    <input type="text" class="form-control input-lg" name="name" id="n"> 
    <button type="submit" class="btn btn-primary btn-lg">Update</button>
</div>
    </form>
    <div style="border:3.5px solid black">
    <?php
    foreach($user_data as $row)
    {
        echo "<div class='col-sm-12'>Recipe Name:$row->recipename</div>";
        echo "<div class='col-sm-12'>Description : $row->description</div>";
        ?>
        <div class="col-sm-12"><img src="http://localhost/codeigniter/uploads/<?php echo $row->image ;?>"></div>
        <?php
        echo "<div class='col-sm-12'>BY:$row->name</div>";
    }
    ?>
    </div>
</div>

    
</body>
</html>