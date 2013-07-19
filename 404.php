<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Erro 404 | Eduqativo - Instituto Choque Cultural</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/colorbox.css">
<!--[if ie]>
	<script type="text/javascript" src="js/html5-ie.js"></script>
<![endif]-->
<?php include "analytics.php"; ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">

<div class="bg-home">
    <?php include "inc/slide.php"; ?>
    
    <?php include "inc/header.php"; ?>
    
    <div role="main" class="bg-404">
        <section id="content" class="pag-interna pag-404">
            <div class="content-404">
                <h2 class="hidetxt">Erro 404</h2>

                <p>Infelizmente a página procurada<br />
                não foi encontrada :/</p>

                <ul>
                    <li><a href="#" title="Voltar para Página Anterior">Voltar para <strong>Página Anterior</strong></a></li>
                    <li><a href="#" title="Ir para Página Inicial">Ir para <strong>Página Inicial</strong></a></li>
                    <li><a href="#" title="Ir para Página de Contato">Ir para <strong>Página de Contato</strong></a></li>
                </ul>
            </div>
        </section><!-- FINAL CONTENT -->  
    </div>
</div>

<?php include "inc/footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>

        <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                $(".group1").colorbox({rel:'group1'});

                $('.non-retina').colorbox({rel:'group5', transition:'none'})
                $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>
</body>
</html>




































