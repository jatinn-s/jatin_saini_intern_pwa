<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#009578">
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/assets/styles.css">
	<link rel="manifest" href="<?=base_url()?>assets/manifest.json">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="d-flex justify-content-center">
    <div>
    	<img class="img-responsive imghome" src="http://localhost/codeigniter/uploads/Logo_5_1.png">
     </div>
    </div>

    <div class="container d-flex flex-column justify-content-center text-center t1 ct1">
    <?php
    
	    foreach ($this->a->fetchtable() as $row) {
	        echo "<div>";
	        ?>
	        <div>
	        	<img class="img-responsive t2 ct2" src="http://localhost/codeigniter/uploads/<?php echo $row->image ;?>">
	        	
	        </div>
	        <?php
	        echo "<div class='t3 ct3'>";
            echo "<div style='box-shadow: 0.5px 0.5px;background-color: #a7c7e6;font-size:3rem ;font-style: bold;'>
            	$row->recipename
            
            </div>";
            echo "<div style='text-align: left;background-color: #f1cccc'>
            	<details><summary>Description : </summary>$row->description</details>
            </div>";
            echo "<div class='text-right' style='background-color: #e6ef94;box-shadow: 0.5px 0.5px;'>
            	By:$row->name
            </div>";
            echo "<div>
            	<form method='post' action='http://localhost/codeigniter/index.php/Hello/update'>
            		<input type='hidden' name='upd' value=$row->id>
            			<button type='submit' style='border-bottom: 0.5px solid black' class='btn btn-lg btn-block'>Edit</button>
            	</form>
            </div>";
            echo "<div>
            	<form method='post' action='http://localhost/codeigniter/index.php/Hello/delete'>
            		<input type='hidden' name='del' value=$row->id>
            		    <button type='submit' class='btn btn-lg btn-block'>Delete</button>
            	</form>
            </div>";
        echo "</div>";
            echo "</div>";
        }
       
    ?>
     <div><a href="http://localhost/codeigniter/index.php/hello/addrecipe"><img class="t4 ct4"  src="http://localhost/codeigniter/uploads/Cut.png"></a></div>
</div>
      
     <div class="t5 ct5"> 
     <img src="http://localhost/codeigniter/uploads/use1.png">
     </div>

     <div class="t6 ct6"> 
     <img src="http://localhost/codeigniter/uploads/use2.png">
     </div>

    <script type="text/javascript" src="<?=base_url()?>assets/index.js"></script>

</body>
</html>
