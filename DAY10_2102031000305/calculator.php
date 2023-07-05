<?php
if(isset($_GET["add"])){
    if(isset($_GET["no1"])&&isset($_GET["no2"]))
    {
        $no1=$_GET["no1"];
        $no2=$_GET["no2"];
        $add=$no1+$no2;
    }
}
if(isset($_GET["sub"])){
    if(isset($_GET["no1"])&&isset($_GET["no2"]))
    {
        $no1=$_GET["no1"];
        $no2=$_GET["no2"];
        $sub=$no1-$no2;
    }
}
if(isset($_GET["multi"])){
    if(isset($_GET["no1"])&&isset($_GET["no2"]))
    {
        $no1=$_GET["no1"];
        $no2=$_GET["no2"];
        $mul=$no1*$no2;
    }
}
if(isset($_GET["div"])){
    if(isset($_GET["no1"])&&isset($_GET["no2"]))
    {
        $no1=$_GET["no1"];
        $no2=$_GET["no2"];
        $div=$no1/$no2;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
    <title>Document</title>
   
</head>
<body>
    

    <h2>Calculator using PHP</h2>
    <form action="#" method="get">
        <label>First Number:</label>
    <input type="number" name="no1"    placeholder="Enter first number"> <br>  <br>
    <label>Seconde Number:</label>
    <input type="number" name="no2"  placeholder="Enter Second number">  <br> <br>

    
    <input type="submit" name="add" value="Addition" >
    <input type="text" value="<?php if(isset($add)){ echo $add;}?>"><br><br>


    <input type="submit" name="sub" value="Substraction">
    <input type="text" value="<?php if(isset($sub)){ echo $sub;}?>"><br><br>


    <input type="submit" name="multi" value="Multiplication">
    <input type="text" value="<?php if(isset($mul)){ echo $mul;}?>"><br><br>


    <input type="submit" name="div" value="Division">
    <input type="text" value="<?php if(isset($div)){ echo $div;}?>">
  </form>
</body>
</html>