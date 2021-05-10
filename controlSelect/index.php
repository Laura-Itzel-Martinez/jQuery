<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Propiedad val de control select </title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
  <select name="" id="miselect">
    <option value="">Selecciona</option>
    <option value="1">Valor 1</option>
    <option value="2">Valor 2</option>
    <option value="3">valor 3</option>
  
  </select>
  <button id="btn">Tomar valor</button>
</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){
    //con esto se puede iniciar con cualquier valo
    
    //si el val tiene valor va intentar ponerlo al control
    //$('#miselect').val('2');
    $('#btn').click(function(){

      //val() no tiene valor esto nos da el valor
      alert($('#miselect').val())
    });

  });
</script>