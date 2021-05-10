<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evento clic button </title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
  <button id="btn">Clic al boton</button>
</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){
   
    $('#btn').click(function(){

      alert("has presionado el boton")
      
    });
  });


</script>