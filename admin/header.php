<?php 
if(isset($_REQUEST['telas']))
	$telas = $_REQUEST['telas'];
else
	$telas = "";
?>
<header>
	<div class="topo">
        <div class="logo">
            <img src="img/logo-admin.jpg" class="img-left" />
            
            <p><?php echo $_SESSION["nomeAdministrador"];?></p>
            
            <a href="../classe/Login.php?txtLocal=logOff" title="Sair" class="hidetxt btsair">Sair</a>
        </div>
        
        <ul id="navMenu">
        	<li>
            	<a href="javascript:void(0);" title="Usuários" <?php if($telas=='novo-usuario' || $telas=='lista-de-usuarios'){ echo'class="ativo"';}?>>Usuários</a>
                <ul class="sub-nav">
                	<li><a href="?telas=novo-usuario">Novo Usuário</a></li>
                    <li><a href="?telas=lista-de-usuarios">Lista de Usuários</a></li>
                </ul>
           	</li>
            
            <li>
            	<a href="javascript:void(0);" title="Notícias" <?php if($telas=='nova-noticia' || $telas=='lista-de-noticias'){ echo'class="ativo"';}?> >Notícias</a>
                <ul class="sub-nav">
                	<li><a href="?telas=nova-noticia">Nova Notícia</a></li>
                    <li><a href="?telas=lista-de-noticias">Lista de Notícias</a></li>
                </ul>
           	</li>
            
            <li>
            	<a href="javascript:void(0);" title="Clipping" <?php if($telas=='novo-clipping' || $telas=='lista-de-clipping'){ echo'class="ativo"';}?>>Clipping</a>
                <ul class="sub-nav">
                	<li><a href="?telas=novo-clipping">Novo Clipping</a></li>
                    <li><a href="?telas=lista-de-clipping">Lista de Clipping</a></li>
                </ul>
           	</li>
            
            <li>
            	<a href="javascript:void(0);" title="Agenda" <?php if($telas=='novo-evento' || $telas=='lista-de-evento'){ echo'class="ativo"';}?> >Agenda</a>
                <ul class="sub-nav">
                	<li><a href="?telas=novo-evento">Novo Evento</a></li>
                    <li><a href="?telas=lista-de-evento">Lista de Eventos</a></li>
                </ul>
           	</li>
            <li><a href="?telas=newsletter" title="Newsletter" <?php if($telas=='newsletter'){ echo'class="ativo"';}?>>Newsletter</a></li>
            
            <li>
            	<a href="javascript:void(0);" title="Conteúdos" <?php if($telas=='publicacao-default' || $telas=='publicacoes'){ echo'class="ativo"';}?>>Conteúdos</a>
                <ul class="sub-nav">
                	<li><a href="?telas=publicacao-default&tipo=1">Estatuto</a></li>
                    <li><a href="?telas=publicacao-default&tipo=2">Relatório Anual</a></li>
                    <li><a href="?telas=publicacoes&tipo=3">Publicações</a></li>
                    <li><a href="?telas=publicacao-default&tipo=4">Biblioteqa do Jovem</a></li>
                    <li><a href="?telas=publicacao-default&tipo=5">Biblioteqa do Professor</a></li>
                    <li><a href="?telas=publicacao-default&tipo=6">Biblioteqa do Artista</a></li>
                    <li><a href="?telas=publicacao-default&tipo=7">Biblioteqa da Cidade</a></li>
                </ul>
           	</li>
            
            <li>
            	<a href="javascript:void(0);" title="Áreas de Atuação" <?php if($telas=='areas-de-atuacao'){ echo'class="ativo"';}?>>Áreas de Atuação</a>
                <ul class="sub-nav">
                	<li><a href="?telas=areas-de-atuacao&tipo=1">Novos métodos de Educação</a></li>
                    <li><a href="?telas=areas-de-atuacao&tipo=2">Incubadora de Artistas</a></li>
                    <li><a href="?telas=areas-de-atuacao&tipo=3">Laboratório Novas Práticas</a></li>
                    <li><a href="?telas=areas-de-atuacao&tipo=4">Produção de Conteúdo</a></li>
                </ul>
           	</li>
        </ul>
    </div>
</header>