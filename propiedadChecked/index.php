<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Propiedad checked de checkbox </title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>
  <label for="">mi valor</label>
  <input type="checkbox" name="" id="micheckbox">
</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){
//asi indica que el control comienza en check con true 
    //$('#micheckbox').prop("checked",true);
    
    $('#micheckbox').click(function(){
      //esto va a pregunta si esta checked
      if ($('#micheckbox').is(':checked ')) {
        //si esta nos sale este msj
       alert(' esta chequeado el control');
      }else{
        //si no esta sale este msj
        alert('no esta chequeado el control');
      }
    });

  });
</script>