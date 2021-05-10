<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Propiedad text</title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
  <div id="midiv">Mi nombre</div>

  <button id="btn">Clic al boton</button>
</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){
   
    $('#btn').click(function(){
//asi obtenemos el valor que tiene text
      $('midiv').text();
// asi podemos agregar un texto al tag div o una section
      $('#midiv').text('agregamos un texto')

      alert($('#midiv').text());

    });
  });


</script>