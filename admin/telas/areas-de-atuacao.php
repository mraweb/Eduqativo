<?php
	include_once("../classe/AreasDeAtuacao.php");
	include_once("../funcoes/define.php");
	$listagem = new AreasDeAtuacao();
	$listagem->setIdTipoAreasDeAtuacao($_REQUEST['tipo']);
	$listagem->buscaNomeTipoAreasDeAtuacao();

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
	<p><?php echo $listagem->getNomeTipoAreasDeAtuacao();?></p>
    
    <form action="../classe/AreasDeAtuacao.php" id="formAreasDeAtuacao" method="post" enctype="multipart/form-data">
        <ul class="form1">            
            <li>
                <label for="projeto">Projeto:</label>
                <input type="text" name="projeto" id="projeto" />
            </li>

            <li>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao"></textarea>
            </li>
            
            <li>
                <label for="arquivo">Galeria:</label>
                <input type="file" name="arquivo" id="botao_enviar_arquivo" />
                <div id="loading"></div>
            </li>
            
            <li>
                <input type="image" src="img/btadicionar.jpg" name="Adicionar" class="bt-adicionar" />
                <input type="hidden" value="<?php echo $_REQUEST['tipo']?>" name="area_atuacao_tipo">
                <input type="hidden" name="cadastrar" id="cadastrar" value="cadastrar">
            </li>
        </ul>
    
    
	    <ul class="galeria" id="galeria">
			<!-- imagens temp -->
	    </ul>
    </form>
    
    <p class="float-left">PROJETOS ATUAIS DE: <?php echo $listagem->getNomeTipoAreasDeAtuacao();?></p>
    
    <table>
    	<thead>
        	<tr>
            	<td><strong>NOME DO PROJETO</strong></td>
                <td><strong>EDITAR</strong></td>
                <td><strong>EXCLUIR</strong></td>
            </tr>
        </thead>
        
        <tbody>
        	<?php 
        		$listagem->setIdTipoAreasDeAtuacao($_REQUEST['tipo']);
        		$listagem->geraLisAreasDeAtuacao();
        	?>
        </tbody>
    </table>
</div>
<script type="text/javascript">

	function checkForm(){

		var projeto = $("#projeto").val();
		if (projeto == ""){
			alert("preencha o campo projeto");
			$('#projeto').focus(); 
			return (false);
		}

	return true;

	}

	$(".bt-adicionar").click(function() {
		if(checkForm()){
			$("#formAreasDeAtuacao").submit();
		}else{
			return false;
		}
		
	});

	$(function(){

		var tipoArquivo = "imagem";
		var acaoUpload = "imagem";

		//-------------------------------------------------------------------------
		new AjaxUpload($('#botao_enviar_arquivo'), //botao que var permitir o usuário escolher o arquivo
		    {
			action: '../funcoes/uploadMultiplos.php', //nome do script que vai tratar a requisição enviando o arquivo
			name: 'arquivo', //nome do campo de arquivo do form que vai ser enviado, no php vai o arquivo vai ser acessado como $_FILES['arquivo']
			//esta funcao do onSubmit é chamada antes do arquivo ser enviado então é possível fazer verificações e validações.
			onSubmit: function(arquivo, extensao){ //arquivo é o nome do arquivo e extensao sua extensao

					$('#loading').html("<img src='img/loading.gif' />");
					
					if (! (extensao && /^(jpg|jpeg)$/.test(extensao))){
					    //neste if acima estamos fazendo uma verificao para enviar somente imagens
					    //mas o ideal é fazer esta verificação no servidor também				    
	                    $('#loading').html("");
	                    alert('Somente imagens JPG podem ser enviadas.');
	                    return false; //se retornar false o upload nao é feito
					}
				
			},
			//esta funcao od onComplete é chamada depois que o upload é feito
			onComplete: function(arquivo, resposta){ //arquivo é o nome do arquivo enviado, resposta é a resposta do servidor

				//se reposta for igual a sucesso é só exibir a imagem usando o nome dela.
				if(resposta != "error" && resposta != "tamanho incorreto"){

				    var conteudo_imagem = '<img src="../uploadTemp/thumb/'+ resposta + '" />'; 
				    
				    var d = new Date();
		 		    var n = d.getMilliseconds();
		 		    
				    $("#galeria").append('<li id="li_'+n+'"><img src="../uploadTemp/thumb/'+resposta+'" width="55" height="50" /><a href="javascript:void(0);"><img src="img/btexcluir.png" width="55" height="17" id="'+resposta+'|'+n+'" onclick="excluirImagemTemp(this);"></a><input type="hidden" name="nomeImagemTemp[]" value="'+resposta+'"></li>');

				    $('#loading').html("");
				}else if(resposta == "tamanho incorreto"){
					alert('O tamanho do arquivo é inferior a altura de 172px e largura de 172px');
				} else{
					alert('Erro ao enviar ' + arquivo);
				}
			},
			//usando este parametro data você pode enivar outros valores além do arquivo para o servidor
			//neste exemplo você acessaria estes valores no PHP usando o array global $_POST
			data: {
			    valor1 : tipoArquivo,
			    valor2 : acaoUpload,
			    tamanhoMax: 200,
			    tamanhoMin: 106
			}
		});

	});

	function excluirImagemTemp(e){

		if (confirm("Tem certeza que deseja excluir o registo?")) {  

			// Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
			var conteudo = e.getAttribute("id");
			var parte = conteudo.split("|");
			var file = parte[0];
			var id = parte[1];
			var acao = "excluirImagemTemp";

			// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
			$.post('../classe/AreasDeAtuacao.php', {
				arquivoTemp: file,
				acao: acao
				}, function(resposta) { 
					$('#li_'+id).hide();
			}); 
	
		}

	}

	$(".excluirRegistro").click(function() {

		if (confirm("Deseja realmente excluir este registro?")){
			var id = $(this).attr('id');
		
			$.post('../classe/AreasDeAtuacao.php', {id: id}, function(resposta) {

				alert("Registro excluido com sucesso!");
				window.location.reload();			
			
			});
		}else{
			return false;  
		}

	});
</script>