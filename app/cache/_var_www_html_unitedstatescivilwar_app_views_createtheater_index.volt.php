
<html>
<head>
  <?php echo $this->partial('partials/nav_menu'); ?>
  
  <br/>
  
</head>

<body>



<form action="createTheater/save" method="Post">
<div class="table" style="float: left;
margin-left: -461px; margin-top:36px;">

<p>Theater Name:

<input type="text" name="theater_name"></p>

<p>Region:
<input type="text" name="theater_region"></p>

<input type="submit" value = "Save" >
</div>
</form>
</body>
</html>