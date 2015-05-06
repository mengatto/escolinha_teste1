<!---------------------------------------------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------------------------------------------->
<?php
include "conexao.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento sem título</title>

<!-- menu -->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

<!-- style -->
<link href="css/style.css" rel="stylesheet" media="screen">
</head>

<body class="visible-xs cbp-spmenu-push">

<!---------------------------------------------------------------------------------------------------------------------------
																MENU
---------------------------------------------------------------------------------------------------------------------------->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3>Menu</h3>
    <a href="#">Linha do tempo</a>
    <a href="mae_cardapio.html">Cardápio</a>
    <a href="mae_mensagem.html">Mensagem</a>
</nav>
<!---------------------------------------------------------------------------------------------------------------------------
																MSG PARA SMARTPHONE
---------------------------------------------------------------------------------------------------------------------------->
<div class="visible-sm" align="center">
	App Produzido para Smartphones.
</div>
<!---------------------------------------------------------------------------------------------------------------------------
																TOPO
---------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid topo topo-mobile" align="center" style="position:fixed; width:100%; z-index:99;">
	<div class="row">	
    	<div class="col-xs-12">
	    	<img src="img/logo1.png" height="50">
            <div class="pull-right" align="right" style="display:inline-block; margin-top:12px;"><button id="showRightPush" class="img-btn"><img src="img/icon/menu.png" height="25"></button></div>
		</div>
	</div>
</div>

<!---------------------------------------------------------------------------------------------------------------------------
																TIME LINE
---------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid" style="padding-top:80px;">
	<!-- msg 1 -->
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
			?>    
			<div class="row timeline-row">
				<!-- coluna esquerda -->
				<div class="col-xs-3">
					<!-- conteúdo coluna -->
					<div class="row col-data">
						<div class="dia">06</div>
						<div class="hora">14:30</div>
					</div>
				</div>
				<!-- coluna direita -->
				<div class="col-xs-9">
					<!-- conteúdo coluna -->
					<div class="row col-msg">
						<div class="li-timeline"><img src="img/icon/li-timeline.png" height="22"></div>
						<div class="col-xs-12 msg-conteudo">
							<span class="titulo"><?php echo $titulo; ?></span>
							<span class="status"> - <?php echo $assunto; ?></span>
							<p class="corpo-msg">
								<?php echo $mensagem; ?>
							</p>
						</div>
					</div>
				</div>
			</div>			
			<?php
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
    ?>

    <!-- msg 2 -->
	<div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	<div class="dia">08</div>
                <div class="hora">11:06</div>
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">
            	<div class="li-timeline"><img src="img/icon/li-timeline.png" height="22"></div>
            	<div class="col-xs-12 msg-conteudo">
                	<span class="titulo">Briga</span>
                    <span class="status"></span>
                    <p class="corpo-msg">
                    	Seu filho bateu no amiguinho. Que coisa feia... 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- divisão do mês - MARÇO -->
    <div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">

            	<div class="col-xs-8 col-xs-offset-2 msg-mes">
                	<div class="btn btn-verde">Março</div>
                </div>
            </div>
        </div>
    </div>
    <!-- msg 3 - diretora -->
	<div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	<div class="dia">02</div>
                <div class="hora">14:30</div>
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">
            	<div class="li-timeline"><img src="img/icon/li-timeline.png" height="22"></div>
            	<div class="col-xs-12 msg-conteudo">
                	<span class="titulo">Diretora</span>
                    <span class="status"> - assunto da msg</span>
                    <p class="corpo-msg">
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <div class="col-xs-12">
                        <a href="mae_mensagem.html"><button class="btn btn-branco">Responder</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- divisão do mês - ABRIL -->
    <div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">

            	<div class="col-xs-8 col-xs-offset-2 msg-mes">
                	<div class="btn btn-verde">Abril</div>
                </div>
            </div>
        </div>
    </div>
    <!-- msg 4 -->
	<div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	<div class="dia">08</div>
                <div class="hora">11:06</div>
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">
            	<div class="li-timeline"><img src="img/icon/li-timeline.png" height="22"></div>
            	<div class="col-xs-12 msg-conteudo">
                	<span class="titulo">Briga</span>
                    <span class="status"></span>
                    <p class="corpo-msg">
                    	Seu filho bateu no amiguinho. Que coisa feia... 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- msg 5 - diretora -->
	<div class="row timeline-row">
    	<!-- coluna esquerda -->
    	<div class="col-xs-3">
        	<!-- conteúdo coluna -->
            <div class="row col-data">
            	<div class="dia">02</div>
                <div class="hora">14:30</div>
            </div>
        </div>
        <!-- coluna direita -->
        <div class="col-xs-9">
        	<!-- conteúdo coluna -->
            <div class="row col-msg">
            	<div class="li-timeline"><img src="img/icon/li-timeline.png" height="22"></div>
            	<div class="col-xs-12 msg-conteudo">
                	<span class="titulo">Diretora</span>
                    <span class="status"> - assunto da msg</span>
                    <p class="corpo-msg">
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <div class="col-xs-12">
                        <a href="mae_mensagem.html"><button class="btn btn-branco">Responder</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- MENU -->
<script src="js/classie.js"></script>
<script>
	var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		showRightPush = document.getElementById( 'showRightPush' ),
		body = document.body;

	showRightPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toleft' );
		classie.toggle( menuRight, 'cbp-spmenu-open' );
		disableOther( 'showRightPush' );
	};

	function disableOther( button ) {
		if( button !== 'showRightPush' ) {
			classie.toggle( showRightPush, 'disabled' );
		}
	}
</script>
<!-- JQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>