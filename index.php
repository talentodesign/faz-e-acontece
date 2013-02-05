<?php include("header.php") ?>
<?php include("topo.php") ?>

    <title>FAZ E ACONTECE</title>
  </head>
  <body>
    <div id="area_info">
      <div id="area_conteudo_home" class="centraliza">

        <div id="principal_slider">
          <div id="slider">
            <a href=""><img src="<?php servidor(); ?>images/home_slider/slider_01.png" alt=""></a>
            <a href=""><img src="<?php servidor(); ?>images/home_slider/slider_02.png" alt=""></a>
          </div>        
        </div>

        <div id="area_destaque">
          <div id="menu">
            <?php 
            $ul = 1;
            while ( $ul <= 03) {  ?>       
                <ul>         
                  <li>
                    <div class="data"> 
                      <p class="d"> 03 </p>
                      <br/>
                      <p class="m"> nov </p> 
                    </div>
                    <div class="titulo"> TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO </div>
                    <div class="separator"></div>                   
                  </li>
                </ul>
                <hr>      
            <?php $ul++; }  ?>
              <center><a href="<?php servidor(); ?>noticias/"><img src="<?php servidor(); ?>images/not_bt_off.png" alt="" class="botao"></a></center>
          </div> 
        </div>
      </div>
    </div>

    <div id="area_home_principal">

      <div id="area_noticias" class="centraliza">

        <div id="link_conheca">         
         <a href=""><div id="img_1"></div></a>
         <a href=""><div id="img_2"></div></a>
         <a href=""><div id="img_3"></div></a>                  
        </div>

        <div id="area_noticias">
          <div id="noticias">            
            <ul>        
              <li>
                <div class="noticias">
                  <p class="data">14/01/2013 - CONGRESSSO DESPERTAR</p> <br/>
                  <p class="texto">É com grande satisfação que a Faz e Acontece, organiza, juntamente com a Juventude Batista Brasileira... </p>
                  <a href=""><p class="leia_mais">leia mais...</p></a> 
                </div>                                 
              </li>
            </ul>

            <div class="separator"></div><br/>        

            <ul>        
              <li>
                <div class="noticias">
                  <p class="data">28/09/12 - PARÁ NEGÓCIOS</p> <br/>
                  <p class="texto">No dia 26 de Outubro de 2011 a ACP, o Conjove e a CME lançaram a feira PARÁ NEGÓCIOS.</p><a href=""><p class="leia_mais">leia mais...</p></a> 
                </div>
                <div class="separator"></div><br/>                
              </li>
            </ul>

            <ul>        
              <li>
                <div class="noticias">
                  <p class="data">28/09/12 - Nota de agradecimento Expo Eventos 2010.</p> <br/><br/>
                  <p class="texto">A Expo Eventos 2010 aconteceu no Hangar Centro de Convenções e Feiras da Amazônia</p><a href=""><p class="leia_mais">leia mais...</p></a> 
                </div>               
              </li>
            </ul>
          <a href="<?php servidor(); ?>noticias"><img src="images/bt_noticias_off.png" alt="" class="botao"></a>
          </div>        
        </div>

        <div id="agenda">
          <a href="<?php servidor(); ?>agenda"><img src="<?php servidor(); ?>images/bt_agenda_off.png" alt="" class="botao"></a>
        </div>
      </div>
    </div> 

    <div id="area_galeria">
      <div id="home_galeria" class="centraliza">
        <div id="topo_galeria">
          <img src="<?php servidor(); ?>images/title_galeria.png" alt="" id="title_galeria">
          <a href=""><img src="<?php servidor(); ?>images/bt_galeria_ampli_off.png" alt="" id="bt_ampliar" class="botao"></a>
          <a href=""><img src="<?php servidor(); ?>images/bt_galeria_off.png" alt="" id="bt_agenda" class="botao"></a>
        </div> 

        <div id="home_area_images">

          <div id="area_images"> 
            <a href=""><img src="<?php servidor(); ?>images/prev_off.png" alt="" class="botao" id="next"></a> 

            <div id="area_conteiner">
              <div id="area">                 
                <ul id="conteiner">
                  <li><a href=""><img src="<?php servidor(); ?>images/home_galeria/img_01.png" alt=""></a></li>
                  <li><a href=""><img src="<?php servidor(); ?>images/home_galeria/img_02.png" alt=""></a></li>
                  <li><a href=""><img src="<?php servidor(); ?>images/home_galeria/img_03.png" alt=""></a></li>
                  <li><a href=""><img src="<?php servidor(); ?>images/home_galeria/img_04.png" alt=""></a></li>
                  <li><a href=""><img src="<?php servidor(); ?>images/home_galeria/img_03.png" alt=""></a></li>         
                </ul>
              </div>
            </div> 
            <a href=""><img src="<?php servidor(); ?>images/next_off.png" alt="" class="botao" id="prev"></a>            
          </div>
        </div>     
      </div>
    </div>


    <div id="footer">
    <?php include("footer.php") ?>
    </div>
  </body>
</html>