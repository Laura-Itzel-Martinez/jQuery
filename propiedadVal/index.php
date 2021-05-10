<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Propiedad val </title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
  <input type="text" id="campo" name="">
  <button id="btn">Tomar valor</button>
  
</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){
    // asi agregamos valor al campo de texto
    $('#campo').val('este es el valor');

    //asi obtenemos el valor de un campo de texto
    $('#campo').val();

  });


</script>