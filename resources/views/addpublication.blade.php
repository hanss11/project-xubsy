<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Guardar datos por databing</title>
    <link rel="stylesheet" href="./css/style3.css">

</head>
<body>
   <form method='POST' action="/publicaciones" enctype="multipart/form-data">
   {{ csrf_field() }}
      <fieldset >
			<legend>Guardar datos por databing</legend>
			<br><br>

      <div class='form-control'>
        <label for='titulo' >Titulo: </label>
        <?php
           echo  "<input type=\"text\" name=\"titulo\" size=\"200\" maxlength=\"200\" value=\"\">";
        ?>
      </div>

			<div class='form-control'>
				<label for='descripcion' >Descripcion:</label>
          <?php
           echo "<input type=\"text\" name=\"descripcion\" size=\"200\" maxlength=\"200\" value=\"\">";
          ?>
			</div>

    	<div class='form-control'>
				<button type="submit">GUARDAR EN BASE DE DATOS</button>
			</div>


      <div class='form-control'>
        <label>Poster</label>
				<input type="file" name="poster"></input>
			</div>




      </fieldset>
   </form>
</body>
</html>
