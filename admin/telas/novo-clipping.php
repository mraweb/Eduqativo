<?php
include_once("../funcoes/define.php");
if(isset($_REQUEST['idAlteracao'])){
	$idAlteracao = $_REQUEST["idAlteracao"];
}else{
	$idAlteracao = "";
}



include_once("../classe/Clipping.php");
	$listagem = new Clipping();
	if($idAlteracao){
		$listagem->setId($idAlteracao);
		$listagem->geraDadosIdClipping();
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
	<p>ADICIONAR NOVO CLIPPING</p>
    
    <form action="../classe/Clipping.php" id="formClipping" method="post" enctype="multipart/form-data">
        <ul class="form1">
        	<li>
                <label for="data">Data:</label>
                <input name="dataEvento" type="text" id="data_1" class="mask-data" size="50" value="<?php if($idAlteracao){echo $listagem->getDataEvento();}else{ echo date('d/m/Y'); } ?>">
            </li>
            
            <li>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo $listagem->getTitulo();?>"/>
            </li>
        </ul>    
        
        <ul class="tabs">
        	<li><a href="#videos">Vídeo</a></li>
            <li><a href="#imagem">Imagem</a></li>
            <li><a href="#pdfs">PDF</a></li>
        </ul>
        
        <ul id="videos" class="tab_content form1">
        	<li>
                <label for="video">Vídeo:</label>
                <input type="text" name="video" id="video" />
            </li>
        </ul>
        
        <ul id="imagem" class="tab_content form1">
            <li>
                <label for="arquivo">Imagem:</label>
                <input type="file" name="arquivo" id="arquivo" />
            </li>
       	</ul>
        
        <ul id="pdfs" class="tab_content form1">
        	<li>
                <label for="pdf">PDF:</label>
                <input type="file" name="pdf" id="pdf" />
            </li>
        </ul>
        <br /><br />
        <ul id="" class="">
        	<li>
            <?php 
        	if($listagem->getYoutube()){
				echo '<iframe width="250" height="190" src="http://www.youtube.com/embed/'.$listagem->getYoutube().'" frameborder="0" allowfullscreen></iframe>';
			}elseif($listagem->getArquivoImagem()){
				echo '<a href="'.URL.'upload/arquivos/'.$listagem->getArquivoImagem().'" class="bt-excel" rel="external">ARQUIVO ATUAL</a>';
				echo'<input type="hidden" name="arquivo_anterior" value="'.$listagem->getArquivoImagem().'">';
			}elseif($listagem->getArquivoPdf()){
				echo '<a href="'.URL.'upload/arquivos/'.$listagem->getArquivoPdf().'" class="bt-excel" rel="external">ARQUIVO ATUAL</a>';
				echo'<input type="hidden" name="pdf_anterior" value="'.$listagem->getArquivoPdf().'">';
			}
			?>
            </li>
        </ul>

        
        
        <input type="image" src="img/btadicionar.jpg" name="Adicionar" class="bt-adicionar" id="alinha" />
        <input name="idAlteracao" id="idAlteracao" type="hidden" value="<?php echo $idAlteracao;?>"/>
	    <?php
		  if(!$idAlteracao){
	  		echo '<input type="hidden" name="cadastrar" id="cadastrar" value="cadastrar">';
		  }else{
	  		echo '<input type="hidden" name="alterar" id="alterar" value="alterar" />';
	  		echo '<input type="hidden" name="arquivo_pdf_anterior" id="arquivo_pdf_anterior" value="'.$listagem->getArquivoPdf().'" />';			  		
		  }
	  	?>
    </form>
</div>
<script type="text/javascript">

	function checkForm(){

		var titulo = $("#titulo").val();
		if (titulo == ""){
			alert("preencha o título");
			$('#titulo').focus(); 
			return (false);
		}

	return true;

	}

	$(".bt-adicionar").click(function() {
		if(checkForm()){
			$("#formClipping").submit();
		}else{
			return false;
		}
		
	});
</script>