<?php include("header.php") ?>
<?php include("topo.php") ?>

    <title>FAZ E ACONTECE</title>
  </head>
  <body>
    <div id="area_title">
        <div id="content_title" class="centraliza">
          <div id="title">
            <img src="<?php servidor(); ?>images/galerias/title.png" alt="">
            <br>
            <img src="<?php servidor(); ?>images/galerias/sub_title.png" alt="">
          </div>
        </div>
    </div>

      <div id="content_galerias">
        <div id="pag_galerias" class="centraliza">
            <div id="text_title" class="centraliza">
              <a href=""><img src="<?php servidor(); ?>images/galerias/eventos_off.png" alt="" class="botao"></a>
              <a href=""><img src="<?php servidor(); ?>images/galerias/congressos_off.png" alt="" class="botao"></a>
              <a href="<?php servidor(); ?>feiras.php"><img src="<?php servidor(); ?>images/galerias/feiras_off.png" alt="" class="botao"></a>
            </div>
                          
        </div>       
      </div>  
    <div id="footer">
      <?php include("footer.php") ?>
    </div>
  </body>
</html>