<?php include("header.php") ?>
<?php include("topo.php") ?>
<style type="text/css">
  #pag_contato{
    padding-top: 30px;
  }
  #pag_contato #desc{
    float:left;
  }
  #pag_contato #dados{
    float:left;
  }
</style>

    <title>FAZ E ACONTECE</title>
  </head>
  <body>
    <div id="area_title">
        <div id="content_title" class="centraliza">
          <div id="title">
            <img src="<?php servidor(); ?>images/contato/title.png" alt="">
            <br>
            <img src="<?php servidor(); ?>images/contato/sub_title.png" alt="">
          </div>
        </div>
    </div>

      <div id="content">
        <div id="pag_contato" class="centraliza">
          <div id="desc">
            Preencha o formulário abaixo e <br>entre em contato conosco.
          </div>
          <div id="dados">
            <img src="<?php servidor(); ?>images/contato/nome.png" height="14" width="58" alt=""><br>
            <input type="text" name="" id="">
            <img src="<?php servidor(); ?>images/contato/endereco.png" height="18" width="103" alt=""><br>
            <input type="text" name="" id="">
            <img src="<?php servidor(); ?>images/contato/cidadeuf.png" height="16" width="315" alt=""><br>
            <input type="text" name="" id=""><input type="text" name="" id="">
            <img src="<?php servidor(); ?>images/contato/telem.png" height="14" width="320" alt=""><br>
            <input type="text" name="" id=""><input type="text" name="" id="">
            <img src="<?php servidor(); ?>images/contato/siteql.png" height="17" width="523" alt=""><br>
            <input type="text" name="" id="">
            <img src="<?php servidor(); ?>images/contato/desc.png" height="21" width="228" alt=""><br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>

        </div>       
      </div>  
    <div id="footer">
      <?php include("footer.php") ?>
    </div>
  </body>
</html>