<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.box{

  
  background: white;
  width: 300px;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 5px;
  margin-bottom: 20px;
  margin-top: 20px;
}
</style>
</head>
<body>

<div class="container">
<center>
<div class="box">
<form action="controller/MensajeController.php" method="post">

<div class="form-group">

<input type="hidden" name="para" value="2">
<input type="hidden" name="de" value="1">
<label for="msg">mensaje:</label>


<textarea name="mensaje" class="form-control" >
</textarea>
</div >
 <button type="submit" class="btn btn-primary">enviar</button>
</form>
</div>
</center>
</div>


<script type="text/javascript" href="js/bootstrap.min.js"></script>
</body>
</html>