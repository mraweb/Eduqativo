<div class="content">
	<p>NEWSLETTER</p>

	<a href="newsletter-download.php" class="bt-excel">Baixar relatório em Excel</a>
        
    <table>
    	<thead>
        	<tr>
            	<td><strong>NOME</strong></td>
                <td><strong>E-MAIL</strong></td>
                <td><strong>EXCLUIR</strong></td>
            </tr>
        </thead>
        
        <tbody>
        
        	<?php 
        		include_once '../classe/Newsletter.php';
        		$news = new Newsletter();
        		$news->geraLisNewsletter();
        	?>

        </tbody>
    </table>
</div>
<script type="text/javascript">
$(".excluiNews").click(function() {

	if (confirm("Deseja realmente excluir este registro?")){
		var id = $(this).attr('id');
		var txtLocal = "excluirRegistroNewsletter";
	
		$.post('../classe/Newsletter.php', {id: id, acao: txtLocal }, function(resposta) {
				if (resposta == "Apagado com Sucesso!!!") {
					alert("Registro excluido com sucesso!");
					var novaURL = "?telas=newsletter";
					$(window.document.location).attr('href',novaURL);
				}else {
					alert(resposta);
					return false;
				}				
		});
	}else{
		return false;  
	}

});

</script>