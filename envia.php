

<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "casilvapinturas@casilvapinturas.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "casilvapinturas@casilvapinturas.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "EMAIL ENVIADO PELO SITE"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Assunto = $assunto \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C.A. Silva Pinturas</title>

	<meta http-equiv="content-language" content="pt-br" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="description" content="" />
	<meta name="keywords" content="Especializada em Pintura de Condominio Residencial, Comercial,pintura Industrial" />
    
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.goo	gleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
 <script src="" type="text/javascript"></script>
	<script src="js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>

    
<script type="text/javascript">
$(document).ready( function(){
	$('#slideshowHolder').jqFancyTransitions({ width: 833, height: 220 });
});
</script>
    

</head>
<body>
<div class="geral">
         <div id="topo">
            
           <div id="logo">
                    <img src="img/layout/logo-sm.png" alt="cabral"/>
           </div>         
                     <!--<div id="chat">
                    
                    	<img src="img/layout/chat.png" alt="chat" />
                    
                    
                    </div>-->
           
          	<div id="texto_topo"><span class="text">c.a.silvapintura@hotmail.com <br/>
                
                Celular: 11 97575-1292 
       		     </span></div>
            
            
           <div class="menu">
                    <div class="menu_pos">
                           <ul class="menu">
                            <li><a href="index.html"  target="_self"><span>Home</span></a></li>
                             <li><a href="empresa.html" target="_self"><span>Empresa</span></a></li>  
                             <li><a href="serv.html"  target="_self"><span>Serviços</span></a></li>
                    				<li><a href="obras.html"  target="_self"><span>Obras Realizadas</span></a></li>
                            <li><a href="contato.html" target="_self"><span>Contato</span></a></li>
                           </ul>
               </div>
           </div><!--menu-->
            
            
              <div id="clear"></div> 
            
          
            <div id="banner">
              <div id='slideshowHolder'>
                   <p><img src="img/banner/bn2.png" alt="2" /></p>
                   <p><img src="img/banner/bn4.png" alt="3" /></p>
              </div>
           </div><!--banner-->
            
       

            
              
         </div><!--topo-->
         
</div><!--geral-->         
        
         
  <!--CONTEUDO GERAL A PARTIR DESTA-->
  
  <div id="conteudo">
    <div class="geral">
  
      <div id="boxgeral">
                    <h2 class="tit">Contato</h2>
                    
      <div id="box_cont" style="text-align:center; margin-top:0px;">
               
     <form action="<? $PHP_SELF; ?>" method="POST">
        <table width="313" border="0" style="text-align:left">
              <tr style="text-align:left">
                <td width="79" class="text" style="text-align:left"><strong>Nome:</strong></td>
                <td width="224" style="text-align:left"><input type="text" name="nome" size="25" /></td>
              </tr>
              <tr>
                <td class="text" style="text-align:left"><strong>E-mail:</strong></td>
                <td style="text-align:left"><input name="email" type="text" id="email" size="25" /></td>
              </tr>
                <tr>
                <td class="text" style="text-align:left"><strong>Telefone:</strong></td>
                <td style="text-align:left"><input type="text" name="telefone" size="25" /></td>
              </tr>
              <tr>
                <td class="text" style="text-align:left"><strong>Assunto:</strong></td>
                <td style="text-align:left"><input type="text" name="assunto" size="25" /></td>
              </tr>
                      

              
              <tr>
                <td class="text"><strong>Mensagem:</strong></td>
                <td><textarea name="mensagem" cols="28" rows="4" id="mensagem"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td style="text-align:left"><input type="submit" value="Enviar" name="BTEnvia" />
                <input type="reset" value="Limpar" name="BTApaga" /></td>
              </tr>
    </table>
      </form>

      </div>
      
      <div id="box_cont2" style="text-align:center">
      
        <p><img src="img/variadas/email.png"/><br/>
          <span class="text"> c.a.silvapintura@hotmail.com</span> </p>
          <p class="text">            Escritorio:  (11) 4574-1929<br />
            Celular:  (11) 94884-3987 / 97575-1292<br />
          </p>
</div>
      
      </div>
     
   </div><!--geral-->          
   </div><!--CONTEUDO-->
   
  <div class="text2" id="rodape" style="text-align:center;">
       <p>R. Valdimiro Laurentino Pessoa, 232 -  C-06 B - Pq. Continental II C - Guarulhos/SP  Cep: 07084-156
<br/>
Tel: 11 4378-2332 -  Celular: 11 98732-3210 / 11 97575-1292 |  E-mail: c.a.silvapintura@hotmail.com<a href="mailto:c.a.silvapintura@hotmail.com" style="color:#FFFFFF"></a></p>
     </div>
   
   
                  
                  
 <div id="selo_sbv">
   <p><a target="_blank" href="http://www.sbvcriacaodesites.com.br"><img src="img/layout/selo_sbv.png" width="50" height="15"  border="0" alt="sbv"/></a><a target="_blank" href="http://www.sbvcriacaodesites.com.br" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:8px; color:#fff"><br />
    Criação de Sites</a></p>
 </div>
 <!-- fim div sbv -->   
  
 
    
</body>
</html>
