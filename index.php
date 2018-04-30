<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
<form action="#" method="post">
<div>
		<label>Name</label>
		<input type="text" name="name">
</div>
<div>
	<select  onchange="fetchciti(this.value)">
		<option>select</option>
		<option>A</option>
		<option>E</option>
	</select>
</div>
<div>
	<select id="cit">
		<option>first select</option>
	</select>
</div>
<div>
	<input type="submit" name="">
</div>
</form>
</body>
</html>