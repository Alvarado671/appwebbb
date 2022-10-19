<?php  include("vista/cabecera.php");?>

<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 80%;
    height: 80%;
  }
  </style>
</head>
<body>
<center>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="publi.png" alt="Los Angeles" width="10" height="10">
    </div>
    <div class="carousel-item">
      <img src="look Casual.png" alt="Chicago" width="10" height="10">
    </div>
    <div class="carousel-item">
      <img src="publi2.png" alt="New York" width="10" height="10">
    </div>
  </div>
  </center>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<?php  include("vista/pie.php");?>