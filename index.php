<!doctype html>
<html>
<head>
	<title>Placeholder</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid	">

		<div class="jumbotron">
		 <center><h1>Welcome,User!</h1></center> 
		 <center> <p>Enter the specifications of the image you want to generate</p></center>
		</div>


<form method="GET" action = "generate.php">
	<div class="row">
			<div class="form-group col-sm-2 col-sm-offset-4">

				<label for="Height">Height</label>
				<input type="text" name = "Height" class="form-control" id="Height" placeholder="Height">
			</div>



			<div class="form-group col-sm-2 ">
				<label for="Width">Width</label>
				<input type="text" name = "Width" class="form-control" id="width" placeholder="Width">
			</div>
			</div>

			<div class="row">
			<div class="form-group col-sm-2 col-sm-offset-4">
				<label for="imgcolor">Image Color</label>
				<input type="text" name = "imgcolor" class="form-control" id="imgcolor" placeholder="Hex Value (Optional)">
			</div>
	

	
			<div class="form-group col-sm-2">
				<label for="textcolor">Text Color</label>
				<input type="text" name = "textcolor" class="form-control" id="textcolor" placeholder="Hex Value (Optional)">
			</div>
			</div>
			<div class="row">
			<center><label for="font"   >Font Name<br>
				<select name="font" class="form-control col-md-2" size="1">
				  
				  <option value="airstrike">AirStrike</option>
				  <option value="arial">Arial</option>
				  <option value="bakery">Bakery</option>
				  <option value="Barbarian">Barbarian</option>
				  <option value="batman">Batman</option>
				  <option value="bombing">Bombing</option>
				  <option value="element">Element</option>
				  <option value="samarkan">Samarkan</option>
				</select></center>
			</div>
			<div class="row">
				<br><center><button type="submit" class="btn btn-default  ">Submit</button></center>
		</form>
	
</body>
</html>

