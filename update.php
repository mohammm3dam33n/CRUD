<?php
include 'handlers/update.php';
include './template/header.php'
?>

	<div class="container">
		<form action="./handlers/update.php" method="post">
		   
		<h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?= $_GET['error']; ?>
		    </div>
		   <?php } ?>

		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" class="form-control" id="name" name="name" value="<?=$row['name'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
             <input type="email" class="form-control" id="email" name="email" value="<?=$row['email'] ?>" >
		   </div>

		   <input type="text" name="id"value="<?=$row['id']?>"hidden >
		   <button type="submit" class="btn btn-primary"name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	   
		</form>
	</div>
<?php
include './template/footer.php'
?>