<?php 
 
 $menu = [

   [    
    'titulo'=> "Home",
    'href'=> "index.php",
    'drop'=> false,
   ] ,
 [
    'titulo'=> "Noticias",
    'href'=> "noticia.php",
    'drop'=> false,
 ],
 [
    'titulo'=> "Sedes",
    'drop'=> true,
     [
        'titulo'=> "Madrid",
        'href'=> "madrid.php"
    ],
    [
        'titulo'=> "Valencia",
        'href'=> "valencia.php",
    ],
    [
        'titulo'=> "Barcelona",
        'href'=> "barcelona.php",
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
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $menu[0]['href']?>"> <?php echo $menu[0]['titulo']?> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $menu[1]['href']?>"><?php echo $menu[1]['titulo']?></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $menu[2]['titulo']?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="madrid.php"><?php echo $menu[2][0]['titulo']?></a>
          <a class="dropdown-item" href="valencia.php"><?php echo $menu[2][1]['titulo']?></a>
          <a class="dropdown-item" href="barcelona.php"><?php echo $menu[2][2]['titulo']?></a>
        </div>
      </li>
    </ul>
  </div>
</nav>