<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Notícias | Eduqativo - Instituto Choque Cultural</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css" />
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
        <section id="content" class="pag-interna pag-noticias">
            <div id="bread" itemprop="breadcrumb">
                <a class="link" href="/">Home</a> »
                <strong>Notícias</strong>
            </div>

            <h1>Notícias</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam magna nulla, volutpat ut
            commodo eu, tempor non nibh.</p>

            <article>
                <img src="img/noticias/imagem-01.jpg" alt="imagem" width="204" height="143" />
                
                <div class="text">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam magna nulla, volutpat ut commodo eu,
                    tempor non nibh. Proin nulla lectus, tempor a ullamcorper vel, gravida vitae nibh. In mollis tincidunt augue vel 
                    tempor. Nulla facilisi. In vehicula accumsan vel tempor.</p>
                    <a href="noticia-detalhe.php" title="Ver notícia inteira">Ver notícia inteira</a>
                </div>
            </article>

            <article>
                <img src="img/noticias/imagem-02.jpg" alt="imagem" width="204" height="143" />
                
                <div class="text">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam magna nulla, volutpat ut commodo eu,
                    tempor non nibh. Proin nulla lectus, tempor a ullamcorper vel, gravida vitae nibh. In mollis tincidunt augue vel 
                    tempor. Nulla facilisi. In vehicula accumsan vel tempor.</p>
                    <a href="#" title="Ver notícia inteira">Ver notícia inteira</a>
                </div>
            </article>

            <article>
                <img src="img/noticias/imagem-03.jpg" alt="imagem" width="204" height="143" />
                
                <div class="text">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam magna nulla, volutpat ut commodo eu,
                    tempor non nibh. Proin nulla lectus, tempor a ullamcorper vel, gravida vitae nibh. In mollis tincidunt augue vel 
                    tempor. Nulla facilisi. In vehicula accumsan vel tempor.</p>
                    <a href="#" title="Ver notícia inteira">Ver notícia inteira</a>
                </div>
            </article>

            <div class="paginacao">
                <ul>
                    <li><a href="#" class="ativo" title="01">01</a></li>
                    <li><a href="#" title="02">02</a></li>
                    <li><a href="#" title="03">03</a></li>
                    <li><a href="#" title="04">04</a></li>
                    <li><a href="#" title="05">05</a></li>
                    <li><a href="#" title="06">06</a></li>
                </ul>
                <a href="#" class="left" title="avançar">»</a>
            </div>

            <section class="newsletter">
                <div class="text-new">
                    <h3>newsletter</h3>
                    <p>Lorem ipsum dolor sitor sit amet,
                    consectetur adipiscing elit.</p>
                </div>

                <div class="form-new">
                    <form method="post" id="formID" action="actions/">
                        <ul>
                            <li>
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="validate[required]" />
                            </li>
                            <li>
                                <label for="email">Email</label>
                                <input type="text" name="Email" id="email" class="validate[required,custom[email]]" />
                            </li>
                            <li>
                                <button type="submit" title="Enviar">Enviar</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
        </section><!-- FINAL CONTENT -->  
    </div>
</div>

<?php include "inc/footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript">

    // validacao formulario
    jQuery(document).ready(function(){
        jQuery("#formID").validationEngine();
    });
    function checkHELLO(field, rules, i, options){
        if (field.val() != "HELLO") {
            return options.allrules.validate2fields.alertText;
        }
    }

    $('#tel').mask('(00) 0000-0000', 
        {onKeyPress: function(phone, e, currentField, options){
         var new_sp_phone = phone.match(/^(\(11\) 9(5[0-9]|6[0-9]|7[01234569]|8[0-9]|9[0-9])[0-9]{1})/g);
         new_sp_phone ? $(currentField).mask('(00) 00000-0000', options) : $(currentField).mask('(00) 0000-0000', options)
       }
    });

</script>
</body>
</html>




































