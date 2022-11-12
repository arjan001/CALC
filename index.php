<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<!-- INTERMS OF STYLING IVE USED AN ONLINE STYLING PLATFORM  CALLED WATER CSS -->
<!-- the programming approach ive taken is procedural programming -->
<title>ZYDII INTERVIEW</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ZYDII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nameDB.php">NAME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="covid.php">COVID TRACKER</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<H2> First web service<H2>
<form action="" method="vuvuzela">
<input type="text"name="num1" placeholder="first num1">
<select name="operator" >
  <option>NONE</option>
  <option>ADD</option>
  <option>SUBTRACT</option>
  <option>MULTIPLY</option>
  <option>DIVIDE</option>
</select>
<input type="text"name="num2" placeholder="second num2">
<button name="submit" type="submit" value="submit">CALCULATE</button>


</form>
<P>YOUR ZYDII CALCULATOR ANSWER IS </P>
<?php 
if (isset($_GET['submit'])){
  $result1 = $_GET['num1'];
  $operator = $_GET['operator'];
  $result2 = $_GET['num2'];

  switch ($operator) {
         case 'NONE':
          echo 'YOU NEED TO SELECT TO CALCULATE THIS';
          break;
         case 'ADD':
          echo $result1 + $result2;
          break;
         case 'SUBTRACT':
          echo $result1 - $result2;
          break;
         case 'MULTIPLY':
          echo $result1 * $result2;
          break;
         case 'DIVIDE':
          echo $result1 / $result2;
  }

}
?>

<!-- end of the first assignment  -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

