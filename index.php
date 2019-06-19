<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>

<br>
<br>
    <form action="datos.php" method="post">
           
     <label for="producto">Producto</label>
        <select name="producto" id="producto">
            <option diseable selected>Seleccionar</option>
            <option value="tv">Television</option>
            <option value="pc">Computadora</option>    
            <option value="lap">Laptop</option>
            <option value="pho">Phone</option>
        </select>
<br>
<br>
        <label for="moneda">moneda</label>
        <select name="moneda" id="moneda">
            <option></option>
            <option diseable selected>Seleccionar</option>
            <option value="0">Dolar</option>
            <option value="1">Euros</option>    
            <option value="2">Pesos Colombianos</option>
            <option value="3">Bolivares</option>
            <option value="4">Peso Argentino</option>
        </select>
<br>
<br>
  

    <input type="submit">
   </form>
</center> 
</body>
</html>