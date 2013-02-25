<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
  $guia[8]="current";
    if(isset($_GET["pg"]) ){
        $pg = $_GET["pg"];
    }else{ 
      $pg="expo-eventos-2013";
    }
?>

<title>FAZ E ACONTECE</title>
</head>
<body>
  <div id="area_title">
    <div id="content_title" class="centraliza">
      <div id="title">
        <img src="<?php servidor(); ?>images/noticias/title.png" alt="">
        <br>
        <img src="<?php servidor(); ?>images/noticias/sub_title.png" alt="">
      </div>
    </div>
  </div>

  <div id="content">
    <div id="pag_destaque" class="centraliza">
     <div id="destaque">
       <div id="titulo">DESTAQUE</div>
       <div id="area_destaque">
        <ul>         
          <li>
            <a href="<?php servidor(); ?>agenda/pg/expo-eventos-2013"><div class="titulo">EXPO EVENTOS 2013</div></a>        
            <div class="prev">  A maior feira de eventos do Norte do País</div>
            <div class="separator"></div>              
          </li>
        </ul>
        <ul>         
          <li>
            <a href=""><div class="titulo">AGRIFAL 2013</div></a>                
            <div class="prev"> Feira da Agricultura Familiar da Amazônia Legal </div>
            <div class="separator"></div>              
          </li>
        </ul>
        <ul>         
          <li>
           <a href=""><div class="titulo">CONGRESSO DESPERTAR 2013</div></a>                
           <div class="prev">Coram Deo – Diante da Face de Deus</div>
           <div class="separator"></div>              
         </li>
       </ul>
       <ul>         
        <li>
          <a href=""><div class="titulo">PARÁ NEGÓCIOS</div></a>                
          <div class="prev">Tudo em um só lugar</div> 
          <div class="separator"></div>                            
        </li>
      </ul>
      <ul>         
        <li>
          <a href=""><div class="titulo">FENORMAC 2013</div></a>                
          <div class="prev">Feira Norte de Material de Construção</div>  
          <div class="separator"></div>             
        </li>
      </ul>
      <ul>         
        <li>
          <a href=""><div class="titulo">FRUTAL AMANÔNIA</div></a>                
          <div class="prev">Semana da Fruticultura, Floricultura e Agroindústria</div>   
          <div class="separator"></div>              

        </li>
      </ul>
      <!-- <div id="destaque_navi">
        <div id="volt"><a href=""><b> &lt;&lt; ANTERIOR </b></a></div>               
        <div id="proxi"><a href=""><b> PRÓXIMA &gt;&gt; </b></a></div>
      </div> -->
    </div>
  </div> 

  <div id="destaque_principal">
    <?php if($pg == "expo-eventos-2013"){ ?>            
      <div id="destaque_texto">
        <img src="<?php servidor(); ?>images/eventos_destaque/01_abril-1.png" alt="">              

        <p>A EXPO EVENTOS é uma feira para todos os tipos de fornecedores de produtos e serviços para eventos. Sejam eles, local para eventos, gráfica, hotel, buffet, decoração, traje, som e iluminação, montadora, agência de turismo, publicidade e eventos, entre outros.</p>
        <p>A Feira em sua terceira edição vem mostrar ao público consumidor, o potencial, a credibilidade e o profissionalismo dos fornecedores da região Norte.</p>
        <p>A EXPO EVENTOS é de suma importância para os expositores e referência para os consumidores de eventos. A Feira vem comprovar que a promoção de eventos funciona como fator de alavancagem da indústria do turismo. Por ser uma das atividades que mais crescem neste segmento, e gera uma série de benefícios para as empresas patrocinadoras, para a cidade promotora do evento, para o comércio local e para a comunidade, além de gerar anualmente, milhares de empregos.</p>
      </div>
    <?php } ?> 


  </div>                    
</div>       
</div>  
<div id="footer">
  <?php include("footer.php") ?>
</div>
</body>
</html>