<?

//Game: NxPuzzle
//Versão: v0.0.1
//Criador: UnixCF


$pagina = $_GET['pageln_'] ?: "inicio";


function arquivos($valor) {

if ($valor == "inicio") 
    return "inicio";
 else if ($valor == "Yhds_level") 
    return "fase_1";
 else if ($valor == "Hsob2s_level") 
    return "fase_2";


return "inicio";
}

?>




<!DOCTYPE html><?php include './arquivos/'.arquivos($pagina).'.php';?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".responder").click(function(){
        var resposta = prompt("Sua resposta:", "");
        var check = {
            verificar: function(v) {
				if ((v == null) || (v == ""))
					return;
               var r = v.toLowerCase();
               $.post( "../arquivos/responder.php", { level: aob, resposta: r}).done(function( dados ) {
				   
				   if (!dados.includes("STATUS"))
					   return;
				   
                   var d = JSON.parse(dados);
				   
                   if (d.STATUS == "1") {
					   window.location.href = "/" + d.PAGINA;
                   } else {
                       alert("Errou, tente novamente!!!");
                   }
				   
               });
            }
        };
        check.verificar(resposta);


    });
});
</script>
</body>
</html>