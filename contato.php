<?php include("header.php") ?>
<?php include("topo.php") ?>
<style type="text/css">
  #pag_contato{
    padding-top: 30px;
  }
  #pag_contato #desc{
    float:left;
    margin-left: 100px;
    font-size: 15px;
  }
  #pag_contato #dados{
    float:left;
    margin-left: 70px;
  }
  #pag_contato input[type=text], #pag_contato textarea{
    background-color: #b2afaf;
    border:none;
    outline:none;
    margin: 5px 0;
  }
  #pag_contato input[type=text]{
    width: 520px;
    height:34px;
    padding: 0 5px;
  }
  #pag_contato textarea{
    width: 520px;
    height:82px;
    padding: 5px;
  }
  #pag_contato #cidade{
    width:283px;
    margin-right: 2px;
  }
  #pag_contato #uf{
    width:225px;
  }
  #pag_contato #tel{
    width:243px;
    margin-right: 2px;
  }
  #pag_contato #email{
    width:263px;
  }
  #pag_contato #site{
    width:242px;
  }
  #pag_contato #dados div.rdfake{
    height: 22px;
    display:inline;
  }
  #pag_contato #dados div.rdfake div{
    float:right;
    margin: 10px 5px 0 0;
  }
  #pag_contato #dados div.rdfake img{
    opacity: 0;
    cursor: pointer;
  }
  #pag_contato div.social{
    background: url("<?php servidor(); ?>images/contato/radio/1_off.png") no-repeat;
  }
  #pag_contato div.tecnico{
    background: url("<?php servidor(); ?>images/contato/radio/2_off.png") no-repeat;
  }
  #pag_contato div.prof{
    background: url("<?php servidor(); ?>images/contato/radio/3_off.png") no-repeat;
  }
  #pag_contato .secreto{
    display:none;
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
            <form action="">
            <img src="<?php servidor(); ?>images/contato/nome.png" height="14" width="58" alt=""><br>
            <input type="text" name="nome" id="nome"><br>
            <img src="<?php servidor(); ?>images/contato/endereco.png" height="18" width="103" alt=""><br>
            <input type="text" name="endereco" id="endereco"><br>
            <img src="<?php servidor(); ?>images/contato/cidadeuf.png" height="16" width="315" alt=""><br>
            <input type="text" name="cidade" id="cidade"><input type="text" name="uf" id="uf"><br>
            <img src="<?php servidor(); ?>images/contato/telem.png" height="14" width="320" alt=""><br>
            <input type="text" name="tel" id="tel"><input type="text" name="email" id="email"><br>
            <img src="<?php servidor(); ?>images/contato/siteql.png" height="17" width="523" alt=""><br>
            <input type="text" name="site" id="site">
            <div class="rdfake">
              <div class="social">
                <img src="<?php servidor(); ?>images/contato/radio/1_on.png" alt="social" >
              </div>
              <div class="tecnico">
                <img src="<?php servidor(); ?>images/contato/radio/2_on.png" alt="tecnico" >
              </div>
              <div class="prof">
                <img src="<?php servidor(); ?>images/contato/radio/3_on.png" alt="prof" >
              </div>
              <div class="separator"></div>
            </div>
            <br>
            <img src="<?php servidor(); ?>images/contato/desc.png" height="21" width="228" alt="">
            <br>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
            <div class="secreto">
              <input type="radio" name="tipo" id="p" value="Profissional"> Profissional
              <input type="radio" name="tipo" id="t" value="Tecnico"> Tecnico
              <input type="radio" name="tipo" id="s" value="Social"> Social
            </div>
            <center>
              <a href="" height="39" width="159"><img src="<?php servidor(); ?>images/contato/bt.png" alt="" id="cont_bt2"></a>
            </center>
          </div>
          </form>

        </div>       
      </div>  
    <div id="footer">
      <?php include("footer.php") ?>
    </div>
    <script type="text/javascript">

      $('#pag_contato #dados div.rdfake img').click(function(){
        $("#pag_contato #dados div.rdfake img").stop().animate({opacity: 0},"fast");
        $(this).stop().animate({opacity: 1},"fast");  
      });

      $('#pag_contato #dados .social').click(function(){
        $('#s').prop('checked', true);    
      });
      $('#pag_contato #dados .tecnico').click(function(){
        $('#t').prop('checked', true);    
      });
      $('#pag_contato #dados .prof').click(function(){
        $('#p').prop('checked', true);    
      });

    $("#contato_enviando").on('hidden',function(){
      $("#contato_enviando p").html('<center><img src="images/loading2.gif" alt=""></center>');
      $("#contato_enviando h3").html('Enviando sua mensagem...');
    });
  var some=function(){$('#contato_enviando').modal('hide')};
    $("#cont_bt2").click(function(){
      var passou=false;
        $("input").each(function(){
          if($(this).val() ==""){
            passou=false;
          return false;
          }
          else{
            passou=true;
          }
        });        
        var dados=$("form").serialize();
        if(!passou){
          $('#contato_vazio').modal("show");
          }
        else{
          $('#contato_enviando').modal({backdrop:"static"});
          $('#contato_enviando').modal("show");
          $.ajax({
            type: "POST",
            url: "mail_contato.php",
            data: dados,
            cache: false,
            success: function(){
              $("#contato_enviando p").html('<center><img src="<?php servidor(); ?>/images/email-send-icon.png" alt=""></center>').find('center').hide().fadeIn("slow");
              $("#contato_enviando h3").html('Mensagem Enviada');
              $("input:text, textarea").val("");
              setTimeout(some,2000);
            }
            
            });
        }
        return false;
        });      

    </script>
    <?php include ('contato_msg.php'); ?>
  </body>
</html>