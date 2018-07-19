<?php
// require_once ("controller.php");
// $arr = [];
// $obj = [
// "fullname" => "a",
// "age" => 1
// ];
// $arr["v1"] = $obj;
// $arr["v2"] = $obj;
// foreach ($arr as $key(array)
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.img{
			text-align: center;
		}
	</style>
</head>
<body style="background: pink;">
	<div class="container-fluid ">
  <div class="container p-t-1">
    <h1 class="display-4 text-xs-center m-b-2" style="text-align: center;">Calculator</h1>
    <div class="jumbotron col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3 p-x-3 p-y-3 col-xs-12 bg-inverse">
      <div class="input-group input-group-sm col-xs-12 p-a-0">
        <input class="col-xs-12 form-control text-xs-right" name="calcsreen" style="margin-bottom: 20px;" id="calcscreen" type="text"/>
      </div>
      <div class="col-xs-7 calc__clearpad p-a-0 m-t-2">    
      </div>
      <div class="col-xs-7 calc__numberpad p-a-0">
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" onclick="btn0()" name="7" type="button">7</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="8" type="button">8</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="9" type="button">9</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="4" type="button">4</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="5" type="button">5</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="6" type="button">6</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="1" type="button">1</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="2" type="" e="button">2</button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" name="3" type="button">3</button>
        <button class="btn btn-lg btn-secondary col-xs-8 numbers" name="0" type="button">0 </button>
        <button class="btn btn-lg btn-secondary col-xs-4 numbers" style="background-color: orange;" id="c"  type="button">C</button>
      </div>
      <div class="col-xs-5 calc__operatorpad p-a-0">    
        <button class="btn btn-lg btn-secondary col-xs-6 operator" style="background-color: orange;"  name="/" type="button">/ </button>
        <button class="btn btn-lg btn-secondary col-xs-6 operator" style="background-color: orange;" name="*" type="button">* </button>
        <button class="btn btn-lg btn-secondary col-xs-6 operator" style="background-color: orange;" name="-" type="button">- </button>
        <button class="btn btn-lg btn-secondary col-xs-6 operator" style="background-color: orange;" name="+" type="button">+ </button>
        <button class="btn btn-lg col-xs-12" style="margin-top: 20px; background-color: orange;" id="equals" name="=" type="button">=</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>