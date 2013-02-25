<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
  $pg = 0;
  $guia[12]="current";
    if(isset($_GET["pg"]) ){
        $pg = $_GET["pg"];
    }else{ 
      $pg="abril";
    }
?>

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
        <div id="pag_agenda" class="centraliza">

          <div id="agenda">
            <img src="<?php servidor(); ?>images/agenda/ano.png" alt="">
            <ul>
              <li><a href="<?php servidor(); ?>agenda/pg/janeiro"><p>JAN</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/fevereiro"><p>FEV</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/marco"><p>MAR</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/abril"><p>ABR</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/maio"><p>MAI</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/junho"><p>JUN</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/julho"><p>JUL</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/agosto"><p>AGO</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/setembro"><p>SET</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/outubro"><p>OUT</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/novembro"><p>NOV</p></a></li>
              <li><a href="<?php servidor(); ?>agenda/pg/dezembro"><p>DEZ</p></a></li> 
            </ul>
          </div>

          <div id="agenda_info">
            <?php if($pg == "janeiro"){ ?>
            <?php } ?> 


            <?php if($pg == "fevereiro"){?>
            <?php } ?>


            <?php if($pg == "marco"){ ?>
            <?php } ?>


            <?php if ($pg == "abril") { ?>  
              <div id="eventos">
                <p class= "title">EXPO EVENTOS 2013 – De 04 a 07 de Abril de 2013</p>
              </div>
            <?php } ?>


            <?php if ($pg == "maio") { ?>              
            <?php } ?>


            <?php if ($pg == "junho") { ?> 
              <div id="eventos">
                <p class= "title"> SALÃO AUTO NORTE – 21 a 23 de Junho de 2013</p>                               
              </div>             
            <?php } ?>


            <?php if ($pg == "julho") { ?>   
              <div id="eventos"><p class= "title"> AGRIFAL 2013 – De 03 a 05 de Julho de 2013</p>
                                <p class= "title"> DESPERTAR 2013 – De 17 a 20 de Julho de 2013</p>
              </div>            
            <?php } ?>


            <?php if ($pg == "agosto") { ?>   
              <div id="eventos">
                <p class= "title">PARA NEGÓCIOS – De 22 a 25 de Agosto de 2013</p>
              </div>           
            <?php } ?>

            <?php if ($pg == "setembro") { ?>  
              <div id="eventos">
                <p class= "title">FENORMAC 2013 – De 04 a 07 de Setembro de 2013</p>
                <p class= "title">FRUTAL AMAZÔNIA 2013 – De 12 a 15 de Setembro de 2013</p>
              </div>          
            <?php } ?>

            <?php if ($pg == "outubro") { ?>            
            <?php } ?>

            <?php if ($pg == "novembro") { ?>            
            <?php } ?>

            <?php if ($pg == "dezembro") { ?>           
            <?php } ?>







 




          
          </div> 
        </div>       
      </div>
    



  
    <div id="footer">
    <?php include("footer.php") ?>
    </div>
  </body>
</html>