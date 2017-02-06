
<html>
<head>
<div>
  <?php echo $this->partial('partials/nav_menu'); ?>
  
</div>
  
</head>

<body>
<?php echo $this->tag->form(array('createTheater/save', 'method' => 'post')); ?>
<div>
    <label for="name">Name</label>
    <?php echo $this->tag->textField(array('theater_name', 'size' => 32)); ?>

    <label for="type">Region</label>
   <?php echo $this->tag->textField(array('theater_region', 'size' => 32)); ?>

    <?php echo $this->tag->submitButton(array('Save')); ?>
</div>
<?php echo $this->tag->endForm(); ?>
</html>