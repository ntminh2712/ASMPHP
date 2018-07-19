<?php require_once ("database.php");
 ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#!add" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Parent ID</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
$query  = "SELECT * FROM student";
$result = executeResult($query);
for ($i = 0; $i < count($result); $i++) {
    echo '<tr>
            <th>'.($i+1).'</th>
            <th>'.$result[$i]['name'].'</th>
            <th>'.$result[$i]['age'].'</th>
            <th>'.$result[$i]['address'].'</th>
        </tr>';
}
?>
    </table>
    </div>
</div>

