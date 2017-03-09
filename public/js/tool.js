
$(document).ready(function () {
    $(".va_title").click(function () {
       alert("BallsBluff");
    })


   


})





$('#select').click(function(){

            $.ajax({
            type: 'POST',
            url: 'TheaterController.php',
            data: {mydata: irrelevant},    
            success: function(data){
                $("#hiddendiv").html(data);
                alert(myvar);
            }
       });  
});


var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.theater = [
        {id : "12", name : "Lower Seaboard Theater and 1861-63 Gulf Approach"},
        {id : "13", name : "Main Eastern"},
        {id : "14", name : "Main Western Minus Gulf Approach"},
        {id : "15", name : "Pacific"},
        {id : "16", name : "Trans Missippi"}
    ];
    
    $scope.armies = {}
});

