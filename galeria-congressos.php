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

      <div id="content_congressos">
        <div id="pag_congressos" class="centraliza">
            <div id="text_congressos">
              <p><b>Clique na categoria abaixo para visualizar o álbum </b></p>
            </div>

            <div id="congressos">
              <ul>
                <li><a href=""><img src="<?php servidor(); ?>images/galerias/congressos/contabilidade_off.png" alt="" class="botao"></a></li>
                <li><a href=""><img src="<?php servidor(); ?>images/galerias/congressos/brasileiro_off.png" alt="" class="botao"></a></li>
              </ul>
            </div>                          
        </div>       
      </div>     
    <div id="footer">
      <?php include("footer.php") ?>
    </div>
  </body>
</html>