<?php 
    if(isset($_POST['search']))
    {  
    $valueToSearch = $_POST['valueToSearch'];
    $query= "SELECT * FROM `proyectos` WHERE CONCAT( `ano`, `estado`, `titulo`, `id_entidad`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
  }
    else{
      $query = "SELECT * FROM `proyectos`";
      $search_result = filterTable($query);

    }

    function filterTable($query){
      $connect = mysqli_connect("localhost", "root", "", "tuxston3_bancotic");
      $filter_Result = mysqli_query($connect, $query);
      return $filter_Result;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Banco TIC</title>
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- own style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
  </head>

  <body>
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Parallax Website
      </span>
    </div>
  </div>
  <section class="section section-light">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
    <fieldset>
      <h5>CATEGORIÁS</h5>
      <hr>
      <form method="post">
      <input type="text" name="valueToSearch" placeholder="Buscar">
      <input type="submit" name="search" value="filter"> 
      <input type="checkbox" id="check1" checked/>
      <label for="check1">si</label>
      </form>
    </fieldset>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Año</th>
      <th scope="col">Estado</th>
      <th scope="col">Titulo</th>
      <th scope="col">Entidad</th>
    </tr>
  </thead>
  
      <?php 

		while($mostrar=mysqli_fetch_array($search_result)){
		 ?>

  <tbody>
  <tr>
      <td><?php echo $mostrar['ano'] ?></td>
      <td><?php echo $mostrar['estado'] ?></td>
      <td><?php echo $mostrar['titulo'] ?></td>
      <td><?php echo $mostrar['id_entidad'] ?></td>
    </tr>
  </tbody>
  <?php 
	}
	 ?> 
</table>
  </section>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/index.js"></script>
  </body>
</html>
