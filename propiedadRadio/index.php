<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control radio </title>
  <script src="../jquery-3.6.0.min.js"></script>
</head>
<body>

  <label for="">si</label>
  <input type="radio" name="miradio" id="radiosi">

  <label for="">no</label>
  <input type="radio" name="miradio" id="radiono">

</body>
</html>
<script type ="text/javascript">

  $(document).ready(function(){

    $('#radiosi').click(function(){
      alert('es positivo o tiene un valor tal')
    });

    $('#radiono').click(function(){
      alert('es negativo o tiene un valor tal')
    });

  });
</script>