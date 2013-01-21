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
                <ul>         
                  <li>
                    <div class="data"> DATA <br/> DATA </div>
                    <div class="titulo"> TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO </div>
                    <div class="separator"></div>                   
                  </li>
                </ul>   
                <hr>             
                <ul>         
                  <li>
                    <div class="data"> DATA <br/> DATA </div>
                    <div class="titulo"> TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO </div>
                    <div class="separator"></div>                   
                  </li>
                </ul>
                <hr>
                <ul>         
                  <li>
                    <div class="data" class="centraliza"> DATA <br/> DATA </div>
                    <div class="titulo"> TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO TITULO </div>
                    <div class="separator"></div>                   
                  </li>
                </ul>
              <center><a href="<?php servidor(); ?>noticias/"><img src="<?php servidor(); ?>images/not_bt_off.png" alt="" class="botao"></a></center>
          </div> 
        </div>
      </div>
    </div>

    <div id="area_home_principal">
      

    </div>


  
    <div id="footer">
    <?php include("footer.php") ?>
    </div>
  </body>
</html>