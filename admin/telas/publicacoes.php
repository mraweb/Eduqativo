<?php
	include_once("../classe/Publicacao.php");
	include_once("../funcoes/define.php");
	$listagem = new Publicacao();


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
	<p>PUBLICAÇÕES</p>
    
    <form action="../classe/Publicacao.php" id="formPublicacao" method="post" enctype="multipart/form-data">
        <ul class="form2">            
            <li>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" />
            </li>
            
            <li>
                <label for="arquivo">Imagem:</label>
                <input type="file" name="arquivo" id="botao_enviar_arquivo" />
            </li>
            
            <li>
                <input type="image" src="img/btadicionar.jpg" name="Adicionar" class="bt-adicionar" />
                <input type="hidden" value="<?php echo $_REQUEST['tipo']?>" name="publicacao_tipo_id">
                <input type="hidden" id="nomeArquivoTemp" name="nomeArquivoTemp" value="">
                <?php
			  		echo '<input type="hidden" name="cadastrar" id="cadastrar" value="cadastrar">';
			  	?>
            </li>
        </ul>
    </form>
    
    <div class="imagem-cadastrada">
    	<span>
        	<div id="conteudoImagemTemp"></div>   
            <div id="excluirImagemTemp">
                <div id="botaoExcluirTemp"></div>
				<!-- <input type="radio" name="destaque-imagem" value="" class="left" /> -->
            </div>
        </span>
    </div>
    
    <?php 
    	$listagem->geraImagensPublicacoes();
    ?>
</div>

<script type="text/javascript">

	$(document).ready(function(){
		$('#excluirImagemTemp').hide();
	});

	function checkForm(){

		var titulo = $("#titulo").val();
		if (titulo == ""){
			alert("preencha o campo título");
			$('#titulo').focus(); 
			return (false);
		}
		
		var arquivo = $("#arquivo").val();
		if (arquivo == ""){
			alert("selecione o arquivo");
			$('#arquivo').focus(); 
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

					$('#conteudoImagemTemp').html("<img src='img/loading.gif' />");
					
					if (! (extensao && /^(jpg|jpeg)$/.test(extensao))){
					    //neste if acima estamos fazendo uma verificao para enviar somente imagens
					    //mas o ideal é fazer esta verificação no servidor também				    
	                    $('#conteudoImagemTemp').html('Somente imagens JPG podem ser enviadas.');
	                    return false; //se retornar false o upload nao é feito
					}
				
			},
			//esta funcao od onComplete é chamada depois que o upload é feito
			onComplete: function(arquivo, resposta){ //arquivo é o nome do arquivo enviado, resposta é a resposta do servidor

				//se reposta for igual a sucesso é só exibir a imagem usando o nome dela.
				if(resposta != "error" && resposta != "tamanho incorreto"){
					
					$('#nomeArquivoTemp').val(resposta);

				    var conteudo_imagem = '<img src="../uploadTemp/thumb/'+ resposta + '" />'; 
				    $('#conteudoImagemTemp').html(conteudo_imagem);

				    var d = new Date();
		 		    var n = d.getMilliseconds();
		 		    
				    var botaoExcluirTemp = '<a href="javascript:void(0);" id="'+resposta+'|'+n+'" onclick="excluirImagemTemp(this);" class="hidetxt bt-excluir left">Excluir</a>';
				    $('#excluirImagemTemp').html(botaoExcluirTemp);
				    $('#excluirImagemTemp').show();
				    
				}else if(resposta == "tamanho incorreto"){
					$('#conteudoImagemTemp').html('O tamanho do arquivo é inferior a altura de 172px e largura de 172px');
				} else{
					$('#conteudoImagemTemp').html('Erro ao enviar ' + arquivo);
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
			$.post('../classe/Publicacao.php', {
				arquivoTemp: file,
				acao: acao
				}, function(resposta) { 
					$('#conteudoImagemTemp').html("");
					$('#excluirImagemTemp').html("");
			}); 
	
		}

	}

	$(".excluirPublicacao").click(function () {
		var idItemExclusao = $(this).attr('id');	
		var acao = "excluirRegistro";
		if (confirm("Deseja realmente excluir este registro?")){

			// Fazemos a requisão ajax com o arquivo php e enviamos os valores de cada campo através do método POST
			$.post('../classe/Publicacao.php', {
				id: idItemExclusao,
				acao: acao 
				}, function(resposta) {
					// Se a resposta é um erro
					if (resposta != "Erro ao deletar item") {
						var novaURL = "?telas=publicacoes&tipo=3";
						$(window.document.location).attr('href',novaURL);
					} 
					// Se não ocorreu nenhum erro
					else {
						alert("erro ao deletar publicação");
					}				
			}); 
		}else{
			return false;  
		}
    });
</script>