<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Nathan Birch">
		<title>Birch - Week 3 Assignment</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="birch-week3.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="birch-week3.js"></script>
	</head>
	<body>
		<?php include '../shared/header.php';?><br><br>
		<?php 
			$majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
		?>
		<div class="container">
			<form action="student_get.php" method="post">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Name</label>
			      <input type="text" class="form-control" id="nameInput" placeholder="Name" name="name">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Email</label>
			      <input type="email" class="form-control" id="emailInput" placeholder="Email" name="email">
			    </div>
			  </div>
			  <div class="form-row">
			    <!-- <legend class="col-form-label col-sm-2">Major</legend> -->
			    <div class="col-md-6">
			     <label for="majorDropdown">Major</label>
			       <!-- <div class="dropdown">
				    <button class="btn form-control	dropdown-toggle" type="button" id="majorDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      Select Major
				    </button>
				    <div class="dropdown-menu" aria-labelledby="majorDropdown">
				      <a class="dropdown-item" href="">Computer Science</a>
				      <a class="dropdown-item" href="">Web Design and Development</a>
				      <a class="dropdown-item" href="">Computer Information Technology</a>
				      <a class="dropdown-item" href="">Computer Engineering</a>
				    </div>
				  </div> -->
				  <?php
					for ($i = 0; $i < count($majors); $i++) {
					?>
						<div class="form-check">
					        <input class="form-check-input" type="radio" name="majorRadio" id="majorRadio<?php echo $i; ?>" value="<?php echo $majors[$i]; ?>">
					        <label class="form-check-label" for="majorRadio1">
					          <?php echo $majors[$i]; ?>
					        </label>
				        </div>
					<?php
					}
				  ?>
				  <br>
				</div>
				<div class="form-group col-md-6">
                    <label for="continentCheckBox">Continents Visited</label><br>
                    <div class="shiftRight">
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-na" value="North America"><label for="place-na">North America</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-sa" value="South America"><label for="place-sa">South America</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-asia" value="Asia"><label for="place-asia">Asia America</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-eu" value="Europe"><label for="place-eu">Europe</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-af" value="Africa"><label for="place-af">Africa</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-aus" value="Australia"><label for="place-aus">Australia</label><br />
	                    <input  class="form-check-input" type="checkbox" name="places[]" id="place-ant" value="Antarctica"><label for="place-ant">Antarctica</label><br />
	                </div>
				</div>
			  </div>
			  <div class="row">
				<div class="form-group col-md-12">
				  <label for="inputAddress">Comments</label>
				  <textarea type="text" class="form-control" id="inputComments" placeholder="Please enter comments here..." name="comments"></textarea>
				</div>
			  </div>
			  <br>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
		<?php include '../shared/footer.php';?><br><br>
	</body>
</html>
