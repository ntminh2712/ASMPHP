<?php
require_once ("api.php");
?>
<!DOCTYPE html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home.php"
    })
    .when("/add", {
        templateUrl : "add.php"
    })
    .when("/list", {
        templateUrl : "list.php"
    });
})
</script>
<body ng-app="myApp">
<a href="#/">Trang Chủ</a>
<a href="#!add">Nhập TTSV</a>
<a href="#!list">Danh Sách</a>

<div ng-view></div>

</body>
</html>
