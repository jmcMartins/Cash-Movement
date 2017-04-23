function funcaoCadastrar()
{
	$("#descricao").keyup(function() {

		if($("#descricao").val() == ''){
			$("#submit").attr("disabled", true);
		}else{
			alert("Cadastrado com Sucesso!"); 
		}
	});
}
   
	