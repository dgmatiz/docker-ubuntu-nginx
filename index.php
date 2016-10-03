<html>
<body>
<b>Prueba de conexiono!</b>
<?php 
echo "Conectado"; 
print_r( pg_connect("host=db port=5432 dbname=postgres user=postgres password=postgres") ); 
?>

</body>
</html>
