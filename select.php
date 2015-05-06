<?php
include "conexao.php";
?>


	<?php
    $sql = "SELECT * FROM teste_escolinha";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			$titulo = $row["titulo"];
			$assunto = $row["assunto"];
			$mensagem = $row["mensagem"];	
        }
    } else {
        echo "0 results";
    }
	$teste = 1;
	
	echo (json_encode($teste));
	
    
    mysqli_close($conn);
    ?>
