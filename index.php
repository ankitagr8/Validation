<form method="post" action="" onsubmit="return validation()">
	<table>
		<tr>
			<td>
				Name:<input type="text" name="name1">
				<span id="name_error"></span>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
<?php 
if(isset($_REQUEST['save']))
{
	$name=$_REQUEST['name1'];
	$con=mysqli_connect("localhost","root","","signup");
	$qry=mysqli_query($con,"insert into multiple(name)values('$name')");
	header("location:validation.php");
}
?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
	  function validation()
	  {
		  var name=$("input[name=name1]").val();
		  if(name.length=='0')
		  {
		  	$("#name_error").html('fill name');
		    return false;
		  }
		  else
		  {
		  	return true;
		  }
	  	
	  }
	  
</script>
