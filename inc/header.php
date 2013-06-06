<?php $url = basename($_SERVER["SCRIPT_NAME"]); ?>
<header role="banner">
        <?php if($url == "index.php"){ ?>
        <h1><a href="/" title="Eduqativo - Instituto Choque Cultural">Eduqativo <span>Instituto Choque Cultural</span></a></h1>
        <?php }else{ ?>
        <p class="logo"><a href="/" title="Eduqativo - Instituto Choque Cultural">Eduqativo<br /> <span>Instituto Choque Cultural</span></a></p>
        <?php } ?>
        
        <nav role="navigation">
            <ul id="navMenu">
                <li><a href="/" title="Home" class="bt-home <?php if($url == "index.php"){echo "ativo1";} ?>">Home</a></li>

                <li><a href="quem-somos.php" title="Quem Somos" class="bt-quem <?php if($url == "quem-somos.php"){echo "ativo2";} ?>">Quem Somos</a></li>

                <li><a href="areas-de-atuacao.php" title="Áreas de Atuação" class="bt-area <?php if($url == "index.php"){echo "ativo3";} ?>">Áreas de Atuação</a></li>

                <li><a href="como-atuamos.php" title="Como Atuamos" class="bt-como <?php if($url == "como-atuamos.php"){echo "ativo4";} ?>">Como Atuamos</a></li>

                <li><a href="parceiros.php" title="Parceiros" class="bt-parc <?php if($url == "parceiros.php"){echo "ativo5";} ?>">Parceiros</a></li>

                <li><a href="participe.php" title="Participe" class="bt-part <?php if($url == "participe.php"){echo "ativo6";} ?>">Participe</a></li>

                <li><a href="acontecendo.php" title="Acontecendo" class="bt-acon <?php if($url == "noticias.php" or $url == "clipping.php" or $url == "agenda.php"){echo "ativo7";} ?>">Acontecendo</a></li>

                <li><a href="conteudo.php" title="Conteúdo" class="bt-cont <?php if($url == "conteudo.php"){echo "ativo8";} ?>">Conteúdo</a></li>

                <li class="sem-bg"><a href="fale-conosco.php" title="Fale Conosco" class="bt-fale <?php if($url == "fale-conosco.php"){echo "ativo9";} ?>">Fale Conosco</a></li>
            </ul>
        </nav>
    </header><!-- FINAL HEADER -->