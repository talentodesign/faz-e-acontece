<?php include("header.php") ?>
<?php include("topo.php") ?>

    <title>FAZ E ACONTECE</title>
  </head>
  <body>
    <div id="area_title">
        <div id="content_title" class="centraliza">
          <div id="title">
            <img src="<?php servidor(); ?>images/agenda/title.png" alt="">
            <br>
            <img src="<?php servidor(); ?>images/agenda/sub_title.png" alt="">
          </div>
        </div>
    </div>

      <div id="content">
        <div id="pag_portifolio" class="centraliza">

          <div id="area_anos">
            <p>ESCOLHA O ANO A BAIXO</p>
            <ul>
              <li><a href=""><p>::2010</p></a></li>
              <li><a href=""><p>::2009</p></a></li>
              <li><a href=""><p>::2008</p></a></li>
              <li><a href=""><p>::2007</p></a></li>
              <li><a href=""><p>::2006</p></a></li>
              <li><a href=""><p>::2005</p></a></li>
              <li><a href=""><p>::2004</p></a></li>              
            </ul>
          </div>

          <div id="portifolio_principal">
            <p class="ano">::2010</p>

            <ul>
              <li><a href=""><img src="<?php servidor(); ?>images/portifolio/2010/meteorologia.png" alt=""></a></li>
              <li><a href=""><img src="<?php servidor(); ?>images/portifolio/2010/amazonpec.png" alt=""></a></li>
              <li><a href=""><img src="<?php servidor(); ?>images/portifolio/2010/frutal_amazonia.png" alt=""></a></li>
              <li><a href=""><img src="<?php servidor(); ?>images/portifolio/2010/expo_eventos.png" alt=""></a></li>
              <li><a href=""><img src="<?php servidor(); ?>images/portifolio/2010/congresso_bra_zoologia.png" alt=""></a></li>

            </ul>
          </div> 
        </div>       
      </div>
    



  
    <div id="footer">
    <?php include("footer.php") ?>
    </div>
  </body>
</html>