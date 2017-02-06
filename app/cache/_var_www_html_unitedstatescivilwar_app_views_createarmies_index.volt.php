<html>
<head>
  <?php echo $this->partial('partials/nav_menu'); ?>
  
  <br/>
  
</head>

<body>



<form action="createArmies/save" method="Post">
<div class="table" style="float: left;
margin-left: -461px; margin-top:36px;">

Battles
<input type="text" name="battle_id" value="1"></p>

Theater
<input type="text" name="theater_id" value="1"></p>

<p>Army Name:

<input type="text" name="armies_name"></p>

Generals
<input type="text" name="general_id" value="1"></p>
<input type="submit" value = "Save" >
</div>
</form>
</body>
</html>