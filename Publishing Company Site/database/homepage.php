<!DOCTYPE html>
<html>
<head>
<title>Message Screen</title>
<style>
body {
  font-family: sans-serif;
  background: url('../images/background.jpg') no-repeat center center fixed;
   background-size: cover;
}

h1 {
  text-align: center;
  color: white;
}

button {
  margin: 0 auto;
  display: block;
  background-color: rgba(0,0,0,.5);
  Color : #dfb8ee;
  padding: 10px;
  border: none;
  cursor: pointer;
}
</style>
</head>
<body>

<h1> User Entered successfully! </h1>
<div class="loginButtonContainer">
<button type="button" onclick="window.open('/Publishing Company/users-add.php', '_blank')">Back to Dashboard</button>
</div>


</body>
</html>