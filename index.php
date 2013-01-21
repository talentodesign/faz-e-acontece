<?php include("header.php") ?>
<?php include("topo.php") ?>

    <title>Home</title>
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
          <img src="<?php servidor(); ?>images/title_conheca.png" alt="">
          <p>A FAZ E ACONTECE, empresa especializada na organização de eventos, que atua no mercado com experiência e profissionalismo de qualidade. </p>
          <a href=""><img src="<?php servidor(); ?>images/saiba_mais_off.png" alt="" class="botao" id="nav_conheca"></a>
        </div>
      </div>
      
      <div id="area_contato">
        
        
      </div>

    </div>


  
    <div id="footer">
    <?php include("footer.php") ?>
    </div>
  </body>
</html>