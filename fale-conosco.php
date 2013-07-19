<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Fale Conosco | Eduqativo - Instituto Choque Cultural</title>
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
        <section id="content" class="pag-interna pag-fale-conosco">
            <h1>Fale Conosco</h1>

            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget leo nec augue egestas lacinia aliquam in augue. Quisque turpis urna, posuere a rhoncus scelerisque, ornare id risus. Aenean lobortis, diam nec scelerisque pretium sem feli.</p>

            <div class="box-formulario">
                <form method="post" id="formID" action="actions/">
                    <ul>    
                        <li>
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="validate[required]" />
                        </li>
                        <li>
                            <label for="tel">Telefone</label>
                            <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                        </li>
                        <li>
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="validate[required,custom[email]]" />
                        </li>
                        <li>
                            <label for="mensagem">Mensagem</label>
                            <textarea rows="7" cols="10" id="mensagem" class="validate[required]" ></textarea>
                        </li>
                        <button type="submit" class="hidetxt" title="Enviar">Enviar</button>
                    </ul>
                </form>
            </div>

            <section class="dados-contato">
                <section class="box-contatos">
                    <p class="tel"><span>11</span> 4171-6556</p>
                    <p class="email">info@institutochoquecultural.org.br</p>
                </section>

                <div class="mapa">
                    <p>Rua Medeiros de Albuquerque, 250 (fundos)<br />
                    Jardim das bandeiras - CEP 05436-060 - São Paulo</p>

                    <a href="javascript:void(0);" id="pos0" class="hidetxt dancing modal" title="Como Chegar">mapa</a>
                </div>
            </section>
            
        </section><!-- FINAL CONTENT -->  
    </div>
</div>

<div id="mapaTeste">
    <div class="mapaContent">
        <div id="mapa" class="window"></div>
        <a class="close hidetxt" title="Fechar">Fechar</a>
    </div>
    <div id="mask"></div>
</div>

<?php include "inc/footer.php"; ?>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/mapa.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
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




































