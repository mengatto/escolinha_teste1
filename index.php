<?php
include "conexao.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

<div style="text-align:center; padding:50px 0px; font-size:40px;">
	<div>
    	Olá, sou o <span style="color:red;">index</span> <br/>
        Abaixo iremos listar o resultado do SELECT.
    </div>
</div>

<div style="text-align:center; font-size:20px;">
	<?php
    $sql = "SELECT * FROM teste_escolinha";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			$titulo = $row["titulo"];
			$titulo = $row["assunto"];
			$titulo = $row["mensagem"];
			
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
    ?>
</div>

</body>
</html>
