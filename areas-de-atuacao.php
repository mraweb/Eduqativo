<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Novos métodos de educação através da arte | Eduqativo - Instituto Choque Cultural</title>
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
    
    <div role="main">
        <section id="content" class="pag-interna pag-atuacao">
            <h1>Novos métodos de educação através da arte</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu pulvinar leo. Nulla nisi lectus, lacinia ut hendrerit et,
            adipiscing at urna. Aliquam erat volutpat. Aenean et placerat purus. Suspendisse et elit neque, quis semper lorem. Donec et arcu
            vitae neque commodo gravida et in ipsum.</p>

            <article class="box">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu pulvinar leo.</p>
                <p>Nulla nisi lectus, lacinia ut hendrerit et, adipiscing at urna.</p>
                <ul>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-01.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-01.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-02.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-02.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-03.jpg" title="imagem">
                        <img src="img/areas-atuacao/novos-metodos/imagem-03.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-04.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-04.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                </ul>
            </article >

            <article class="box sem">
                <h2>Lorem ipsum dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu pulvinar leo.</p>
                <p>Nulla nisi lectus, lacinia ut hendrerit et, adipiscing at urna.</p>
                <ul>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-05.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-05.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-06.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-06.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-07.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-07.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                    <li>
                        <a class="group1" href="img/areas-atuacao/novos-metodos/imagem-08.jpg" title="imagem">
                            <img src="img/areas-atuacao/novos-metodos/imagem-08.jpg" alt="imagem" width="196" height="135" />
                        </a>
                    </li>
                </ul>
            </article>
            
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




































