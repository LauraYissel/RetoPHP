<?php
    $msg=null;
    if(!count($_POST)==0){
        if($_POST["titulo"]==""||$_POST["subtitulo"]==""||$_POST["noticia"]==""||$_POST["fecha"]==""){
            $msg="Faltan campos";
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include './src/menu.php';
        ?>
        <div class="content">
            <?php if($msg) echo "<h2>$msg</h2>";?>
            <div class="container">
                <div class="row  justify-content-md-center">
                    <div class="col col-lg-8">
                        <form action="nuevanoticia.php" method="post">
                            <div class="form-group">
                                <label for="titulo">Titulos</label>
                                <input type="text" class="form-control" id="titulo"  name="titulo" placeholder="Introduce Titulo">
                            </div>
                            <div class="form-group">
                                <label for="subtitulo">SubTitulo</label>
                                <input type="text" class="form-control" id="subtitulo" name="subtitulo"  placeholder="Introduce Subtitulo">
                            </div>
                            <div class="form-group">
                                <label for="noticia">Noticia</label>
                                <input type="text" class="form-control" id="noticia" name="noticia" placeholder="Introduce Noticia">
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Introduce Fecha">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary mb-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- CARGA DE LIBERRIAS JS-->  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>