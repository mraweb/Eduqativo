<?php
	include_once("../classe/Publicacao.php");
	include_once("../funcoes/define.php");
	$listagem = new Publicacao();

	//verifico se já existe publicacao cadastrada
	$listagem->setIdTipoPublicacao($_REQUEST['tipo']);
	$listagem->existeIdPublicadoDoTipoPublicacao();
	
	if($listagem->getId()){
		$idAlteracao = $listagem->getId();
	}else{
		$idAlteracao = "";
	}



    //recupero os dados da publicacao
	if($idAlteracao){
		$listagem->setId($idAlteracao);
		$listagem->geraDadosIdPublicacao();
	}
	
	//recupero o nome da publicacao
	$listagem->setIdTipoPublicacao($_REQUEST['tipo']);
	$listagem->buscaNomeTipoPublicacao();

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
	<p><?php echo $listagem->getNomeTipoPublicacao();?></p>
    
    <?php 
    	if($listagem->getArquivoPdf()){
    		echo '<a href="'.URL.'upload/arquivos/'.$listagem->getArquivoPdf().'" class="bt-excel" rel="external">ARQUIVO ATUAL</a>';
    	}
    ?>

    <form action="../classe/Publicacao.php" id="formPublicacao" method="post" enctype="multipart/form-data">
        <ul class="form1">
            <li>
                <label for="pdf">PDF:</label>
                <input type="file" name="pdf" id="pdf" />
                <input type="hidden" value="<?php echo $_REQUEST['tipo']?>" name="publicacao_tipo_id">
            </li>
            
            <li>
                <input type="image" src="img/btadicionar.jpg" name="Adicionar" class="bt-adicionar" />
                <input name="idAlteracao" id="idAlteracao" type="hidden" value="<?php echo $idAlteracao;?>"/>
                <?php
				  if(!$idAlteracao){
			  		echo '<input type="hidden" name="cadastrar" id="cadastrar" value="cadastrar">';
				  }else{
			  		echo '<input type="hidden" name="alterar" id="alterar" value="alterar" />';
			  		echo '<input type="hidden" name="arquivo_pdf_anterior" id="arquivo_pdf_anterior" value="'.$listagem->getArquivoPdf().'" />';			  		
				  }
			  	?>
            </li>
        </ul>
    </form>
</div>
<script type="text/javascript">

	function checkForm(){

		var pdf = $("#pdf").val();
		if (pdf == ""){
			alert("selecione o arquivo");
			$('#pdf').focus(); 
			return (false);
		}

	return true;

	}

	$(".bt-adicionar").click(function() {
		if(checkForm()){
			$("#formPublicacao").submit();
		}else{
			return false;
		}
		
	});
</script>