 <script src="http://www.geradorcpf.com/scripts.js"></script>
    <script src="http://www.geradorcpf.com/jquery-1.2.6.pack.js"></script>
    <script src="http://www.geradorcpf.com/jquery.maskedinput-1.1.4.pack.js"></script>

    </script>

    <script type="text/javascript">$(document).ready(function(){  
      $(".cpf").mask("999.999.999-99");   

      $("#cpf").blur(function (){
        if($("#cpf").val() == '') {           
          $("#saida").html("Informe um CPF");         
          return false;   
        }    
        if(validarCPF($("#cpf").val())) {         
          $(".cpf").css('border-color','limegreen');     
        } 
        else {            
          $(".cpf").css('border-color','red');     
        } 
      });
    });
  </script>
</head>

<body>

  <form id="form1" name="form1" method="post" action="">

    <div align="center" id="saida1">
      <label>Digite o seu cpf</label>
      <input name="cpf" type="text" class="cpf" id="cpf">
    </div>

    <div align="center" id="saida1">
      <label>Teste</label>
      <input name="teste" type="text" class="teste">
    </div>

    <div align="center" id="saida" class="style7"> <!--aparece mensagem de CPF Invalido--> </div>

  </form>
</body>
</html>
javascriptvalidação