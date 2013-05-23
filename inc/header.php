<?php $url = basename($_SERVER["SCRIPT_NAME"]); ?>
<header role="banner">
        <?php if($url == "index.php"){ ?>
        <h1><a href="/" title="Eduqativo - Instituto Choque Cultural">Eduqativo <span>Instituto Choque Cultural</span></a></h1>
        <?php }else{ ?>
        <p class="logo"><a href="/" title="Eduqativo - Instituto Choque Cultural">Eduqativo <span>Instituto Choque Cultural</span></a></p>
        <?php } ?>
        
        <nav role="navigation">
            <ul>
                <li><a href="/" title="Home" class="bt-home <?php if($url == "index.php"){echo "ativo1";} ?>">Home</a></li>
                <li><a href="quem-somos.php" title="Quem Somos" class="bt-quem">Quem Somos</a></li>
                <li><a href="areas-de-atuacao.php" title="Áreas de Atuação" class="bt-area">Áreas de Atuação</a></li>
                <li><a href="como-atuamos.php" title="Como Atuamos" class="bt-como">Como Atuamos</a></li>
                <li><a href="parceiros.php" title="Parceiros" class="bt-parc">Parceiros</a></li>
                <li><a href="participe.php" title="Participe" class="bt-part">Participe</a></li>
                <li><a href="acontecendo.php" title="Acontecendo" class="bt-acon">Acontecendo</a></li>
                <li><a href="conteudo.php" title="Conteúdo" class="bt-cont">Conteúdo</a></li>
                <li class="sem-bg"><a href="fale-conosco.php" title="Fale Conosco" class="bt-fale">Fale Conosco</a></li>
            </ul>
        </nav>
    </header><!-- FINAL HEADER -->