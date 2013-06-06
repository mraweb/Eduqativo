<?php
if(isset($_REQUEST['idAlteracao'])){
	$idAlteracao = $_REQUEST["idAlteracao"];
}else{
	$idAlteracao = "";
}



include_once("../classe/Evento.php");
	$listagem = new Evento();
	if($idAlteracao){
		$listagem->setId($idAlteracao);
		$listagem->geraDadosIdEvetno();
	}

if(isset($_REQUEST['msn'])){
	$msn = $_REQUEST["msn"];
	echo'
	<script type="text/javascript">
		alert("'.base64_decode($msn).'");
	</script>
	';
}
?>
<div class="content">
	<p>ADICIONAR NOVO EVENTO</p>
    
    <form action="../classe/Evento.php" method="post" enctype="multipart/form-data" id="form">
        <ul class="form1">
        	<li>
                <label for="data">Data:</label>
                <input name="dataEvento" type="text" id="data_1" class="mask-data" size="50" value="<?php if($idAlteracao){echo $listagem->getDataEvento();}else{ echo date('d/m/Y'); } ?>">
            </li>
            
            <li>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo $listagem->getTitulo();?>" />
            </li>
            
            <li>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="menor"><?php echo $listagem->getDescricao();?></textarea>
            </li>
            
            <li>
                <input type="image" src="img/btadicionar.jpg" name="Adicionar" class="bt-adicionar" />
                <input name="idAlteracao" id="idAlteracao" type="hidden" value="<?php echo $idAlteracao;?>"/>
                <?php
				  if(!isset($_GET["acao"])){
			  		echo '<input type="hidden" name="cadastrar" id="cadastrar" value="cadastrar">';
				  }else{
			  		echo '<input type="hidden" name="alterar" id="alterar" value="alterar" />';
				  }
			  	?>
            </li>
        </ul>
    </form>
</div>
<script type="text/javascript">

	function checkForm(){

		var titulo = $("#titulo").val();
		if (titulo == ""){
			alert("preencha o campo título");
			$('#titulo').focus(); 
			return (false);
		}

	return true;

	}

	$(".bt-adicionar").click(function() {
		if(checkForm()){
			$("#form").submit();
		}else{
			return false;
		}
		
	});
</script>