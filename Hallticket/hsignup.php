<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale">
<title>form Login and register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup">
<h1>Register</h1>
<h4>it's free and only taske a minute</h4>

<form action="hinsert.php" method="post">
<label> ID</label>
<input type="text" name="id" required>

<label>Name</label>
<input type="text" name="name" required>
<label>Password</label>
<input type="text" name="password" required>
<label>Branch</label>
<input type="text" name="branch" required>
<label>Year</label>
<input type="text" name="year" required>

<input type="submit" name="" value="submit">
</form>

</div>
</body>
</html