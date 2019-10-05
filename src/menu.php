<?php 
 
 $menu = [

   [    
    "titulo"=> "Home",
    "href"=> "index.php",
    "drop"=> false,
   ] ,
  [
    "titulo"=> "Noticias",
    "href"=> "nuevaNoticia.php",
    "drop"=> false,
  ],
  [
    "titulo"=> "Sedes",
    "drop"=> true,
    'dropdown'=> [
   [
      "titulo"=> "Madrid",
      "href"=> "madrid.php"
   ],
   [
      "titulo"=> "Valencia",
      "href"=> "valencia.php",
   ],
   [
      "titulo"=> "Barcelona",
      "href"=> "barcelona.php",
   ]
  ]
     
 ]
 
];
// var_dump($menu)
 ?>
 
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <?php
    for ($i=0; $i < count($menu) ; $i++) { 
      // var_dump($i);
      if ($menu [$i] ["drop"]) {
       echo " <li class='nav-item dropdown'>
       <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        sedes
        </a> 
        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";

        foreach ($menu [$i] ["dropdown"] as $key => $value) {
         echo'<a class="dropdown-item" href="madrid.php"><?=$value["titulo"]?></a>';
         echo '<a class="dropdown-item" href="valencia.php"><?=$value["titulo"]?></a>';
         echo '<a class="dropdown-item" href="barcelona.php"><?=$value["titulo"]?></a>';
        };

        echo  " </div>";
        echo " </li>";
      }else{
        echo " <li class='nav-item active'>";
        echo "<a class='nav-link' href=".$menu[$i]["href"].">".$menu[$i]["titulo"]."<span class='sr-only'></span></a></li>";
        
      }

    }
    
    
    ?>
      
      
      
       
        
         
       
    </ul>
  </div>
</nav>