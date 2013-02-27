<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
  $guia[12]="current";
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
            <a href="<?php servidor(); ?>eventos-destaque/pg/expo-eventos-2013"><div class="titulo">EXPO EVENTOS 2013</div></a>        
            <div class="prev">  A maior feira de eventos do Norte do País</div>
            <div class="separator"></div>              
          </li>
        </ul>
        <ul>         
          <li>
            <a href="<?php servidor(); ?>eventos-destaque/pg/autonorte-2013"><div class="titulo">AGRIFAL 2013</div></a>                
            <div class="prev"> Feira da Agricultura Familiar da Amazônia Legal </div>
            <div class="separator"></div>              
          </li>
        </ul>
        <ul>         
          <li>
           <a href="<?php servidor(); ?>eventos-destaque/pg/congreco-despertar-2013"><div class="titulo">CONGRESSO DESPERTAR 2013</div></a>                
           <div class="prev">Coram Deo – Diante da Face de Deus</div>
           <div class="separator"></div>              
         </li>
       </ul>
       <ul>         
        <li>
          <a href="<?php servidor(); ?>eventos-destaque/pg/para-negocios-2013"><div class="titulo">PARÁ NEGÓCIOS</div></a>                
          <div class="prev">Tudo em um só lugar</div> 
          <div class="separator"></div>                            
        </li>
      </ul>
      <ul>         
        <li>
          <a href="<?php servidor(); ?>eventos-destaque/pg/fenormac-2013"><div class="titulo">FENORMAC 2013</div></a>                
          <div class="prev">Feira Norte de Material de Construção</div>  
          <div class="separator"></div>             
        </li>
      </ul>
      <ul>         
        <li>
          <a href="<?php servidor(); ?>eventos-destaque/pg/frutal-amazonia-2013"><div class="titulo">FRUTAL AMANÔNIA</div></a>                
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
        <div id="imagem_Princiapl">         
          <img src="<?php servidor(); ?>images/eventos_destaque/01_abril-1.png" alt="">  
        </div>
        <div id="texto">
          <p>A EXPO EVENTOS é uma feira para todos os tipos de fornecedores de produtos e serviços para eventos. Sejam eles, local para eventos, gráfica, hotel, buffet, decoração, traje, som e iluminação, montadora, agência de turismo, publicidade e eventos, entre outros.</p>
          <p>A Feira em sua terceira edição vem mostrar ao público consumidor, o potencial, a credibilidade e o profissionalismo dos fornecedores da região Norte.</p>
          <p>A EXPO EVENTOS é de suma importância para os expositores e referência para os consumidores de eventos. A Feira vem comprovar que a promoção de eventos funciona como fator de alavancagem da indústria do turismo. Por ser uma das atividades que mais crescem neste segmento, e gera uma série de benefícios para as empresas patrocinadoras, para a cidade promotora do evento, para o comércio local e para a comunidade, além de gerar anualmente, milhares de empregos.</p>
        </div>
      <?php } ?> 

      <?php if($pg == "autonorte-2013"){ ?>
        <div id="imagem_Princiapl">          
          <img src="<?php servidor(); ?>images/eventos_destaque/02_junho.png" alt="">              
        </div>

        <div id="texto">
          <p>Verificando a necessidade de atender um setor que cresce muito em nossa região, o setor automobilístico, e devido ao momento forte que vive a indústria de veículos móveis, de duas rodas, quatro rodas e náuticos no País, a Faz e Acontece lança o - SALÃO AUTO NORTE 2013 - que mostrará novidades sobre as marcas nacionais e internacionais, acessórios, seguradoras, serviços, instituições, financeiras e combustível, para todo tipo de veículo: carros, motos, vans, caminhões, barcos, lanchas, entre outros. O evento contará também com exposições, sorteios e atrações especiais.</p>
          <p>O SALÃO AUTO NORTE 2013 irá trazer novidade em todos os segmentos, em design, estilo e motorizações, mostra o amadurecimento da engenharia brasileira e a maioridade da indústria, no que diz respeito a criatividade e eficiência dos modernos motores, menores índices de emissões de poluentes, maior economia  e rapidez de adaptação às novas e mutantes necessidades mercadológicas.</p>
        </div>
      <?php } ?>

      <?php if($pg == "congreco-despertar-2013"){ ?>
        <div id="imagem_Princiapl">          
          <img src="<?php servidor(); ?>images/eventos_destaque/03_julho.png" alt="">              
        </div>

        <div id="texto">
          <p>A Primeira igreja Batista do Pará receberá a Juventude Batista Brasileira (JBB) em seu congresso nacional chamado Congresso DESPERTAR, oportunidade em que jovens e adolescentes de todo o país são convocados a participarem. O evento acontece a cada dois anos e conta com celebrações, oficinas, fóruns, entretenimentos e feira de exposição. Em 2013 nosso tema será: Coram Deo – Diante da Face de Deus.</p>
          <p>A programação está repleta de pessoas queridas e excelentes em sua missão para nos inspirar e encorajar. 
          <p>Estamos esperando para este Despertar um público de 5.000 (cinco mil) jovens de todo o Brasil.</p>
          Para essa edição haverá também uma área de exposição onde os interessados poderão ter um estande conosco e atingir aos jovens de Deus. Por esse motivo, a Faz e Acontece, além da organização Geral, também estará, realizando a comercialização destas áreas de exposição.</p>
        </div>
      <?php } ?>

      <?php if($pg == "para-negocios-2013"){ ?>
        <div id="imagem_Princiapl">          
          <img src="<?php servidor(); ?>images/eventos_destaque/04_agosto.png" alt="">              
        </div>

        <div id="texto">
         <p>A ACP, associação que congrega empresários de diversos setores, sentiu a necessidade de dar continuidade ao evento, com o foco nos negócios, e tornar a região Norte mais participativa e atualizada diante de novas tendências no mercado.Sendo assim, realiza a 2ª Edição do evento “PARÁ NEGÓCIOS – Tudo em um só lugar”, dirigida ao público em geral, abrangendo empresários e consumidores em atividades diversas.</p>
         <p>Vale acrescentar que a Feira de Exposição agregará, também, a 11ª Outlet – a ponta de estoque de moda feminina e masculina promovida pelo Conselho da Mulher Empresária; Mamãe e Bebê – I Feira de produtos, móveis, equipamentos e confecções para futuras mães e seus bebês; III Pará Óptica – voltada para produtos e serviços do setor oftalmológico, mostrará as mais novas tecnologias nesse setor e 4ª Pet Fair – Feira de Exposição de produtos e serviços veterinários, além de oficina, cursos e desfiles voltados para esse mercado em expansão. </p>
        <p>O evento conta com a Organização da Faz e Acontece.</p>
        </div>
      <?php } ?>

      <?php if($pg == "fenormac-2013"){ ?>
        <div id="imagem_Princiapl">          
          <img src="<?php servidor(); ?>images/eventos_destaque/05_setembro.png" alt="">              
        </div>

        <div id="texto">
        <p>O segmento da construção civil é um dos setores da economia que mais cresce e gera anualmente milhares de empregos e é responsável por 14,8% do PIB nacional.</p>
        <p>O comércio varejista e atacadista de material de construção e a indústria da construção civil (obras de pequeno e grande porte) são responsáveis pela movimentação e crescimento do consumo de toda esta cadeia produtiva, que se agrega direta ou indiretamente a outros importantes setores, pela necessidade operacional de seus projetos.</p>
        <p>Nesse contexto, o SINDMACO, entidade que congrega o comércio de materiais de construção, sentiu a necessidade de criar um evento com o foco de tornar a região Norte mais participativa e atualizada diante de novas tendências no mercado mundial a fim de que isso gerasse mudança socioeconômica, política e tecnológica no âmbito interno.</p>
        <p>Em 2005 nasceu o projeto para a realização da FENORMAC- Feira Norte de Materiais de Construção, dirigida a fabricantes, distribuidores, comerciantes, engenheiros, arquitetos, revendedores de produtos e serviços e consumidores do produto final.</p>
        </div>
      <?php } ?>

      <?php if($pg == "frutal-amazonia-2013"){ ?>
        <div id="imagem_Princiapl">          
          <img src="<?php servidor(); ?>images/eventos_destaque/06_setembro.png" alt="">              
        </div>

        <div id="texto">
        <p>Consolidada como terceiro maior evento da Região Norte nos setores de frutas, flores e agroindústria no ranking nacional de transferência de tecnologia, realização de negócios e de promoção da Amazônia, a FRUTAL AMAZÔNIA nas 6 edições anteriores teve resultados significativos. Resultados que possibilitam a expansão da fruticultura, floricultura e agroindústria da Região Amazônica com bases na sustentabilidade e preservação do meio ambiente, permitindo participar do mercado nacional e internacional com uma atividade moderna, rentável, sustentável, geradora de empregos nas comunidades rurais e distribuidora de renda. Durante os quatros dias dos eventos serão realizadas feira de negócios, cursos, palestras, seminários, rodadas de negócios, oficinas, lançamentos, disseminação da informação sobre o agronegócio, facilitação de negócios e o marketing institucional.</p>
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