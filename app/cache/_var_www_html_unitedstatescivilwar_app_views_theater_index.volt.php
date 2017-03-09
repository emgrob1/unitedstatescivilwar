<!DOCTYPE html>
<html>
<?php echo $this->partial('partials/header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/tool.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<p>Select a theater:</p>

<select ng-model="selectedCar" ng-options="theater.id*1 as theater.name for theater in theater">
</select>

<p id="select">Select an Army:</p>

<select ng-model="selectedCar" ng-options="x.id as x.name for x in armies">
</select>



</div>
<script src="js/tool.js"></script>
</body>

</html>