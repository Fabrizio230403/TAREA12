<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
 <h1>Busqueda de Clientes</h1>
 <input type="text" id="busqueda" placeholder="Buscar un alumno...">
 <button id="buscar">Buscar</button>
 <div id="resultados"></div>
 
<script>
    $(document).ready(function(){
        $('#buscar').on('click', function(){
            var nombre = $('#busqueda').val();
            $.ajax({
                url:'login.php',
                method: 'POST',
                data: {nombre: nombre},
                success: function(data){
                    $('#resultados').html(data);
                }
            });
        });
    });
    
</script>

</body>
</html>
