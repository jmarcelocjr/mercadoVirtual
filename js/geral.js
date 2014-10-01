// JavaScript Document

try{
    xmlhttp = new XMLHttpRequest();
}catch(ee){
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(E){
            xmlhttp = false;
        }
    }
}


function mostraConteudo(cod,tipo,mostrar,aux){
	
	if(document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).title=="+"){
		document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).title="-";
		document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).innerHTML="<i class=\"icon-chevron-down\"></i>";
		document.getElementById('conteudo_'+tipo+'_'+mostrar+'_'+cod).style.display="";

		if (mostrar=='complemento'){
			carregaConteudo(aux,'complemento',cod);	
		}
		
		if (mostrar=='tvweb'){
			carregaConteudo(aux,'tvweb',cod);	
		}
		
		if (mostrar=='plano'){
			carregaConteudo(aux,'plano',cod);	
		}
		
		if (mostrar=='profile'){
			carregaConteudo(aux,'profile',cod);	
		}
	
	}else{
		
		document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).title="+";
		document.getElementById('conteudo_'+tipo+'_'+mostrar+'_'+cod).style.display="none";

		if (mostrar=='complemento'){
			document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).innerHTML="<i class=\"icon-star\"></i>";
		}
		
		if (mostrar=='tvweb'){
			document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).innerHTML="<i class=\"icon-film\"></i>";
		}
		
		if (mostrar=='plano'){
			document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).innerHTML="<i class=\"icon-shopping-cart\"></i>";
		}
		
		if (mostrar=='profile'){
			document.getElementById('btn_'+tipo+'_'+mostrar+'_'+cod).innerHTML="<i class=\"icon-eye-open\"></i>";
		}
	}

}


function carregaConteudo(codigo,conteudo,usuario){

	document.getElementById('conteudo_A_'+conteudo+'_'+usuario).style.display = "";
	document.getElementById('conteudo_A_'+conteudo+'_'+usuario).innerHTML = "Aguarde, pesquisando...!!!";	
	
	dadosDoFormulario = "id="+escape(codigo)+"&usuario="+usuario;
	xmlhttp.open("POST", "../"+conteudo+"/listaajax.php?"+dadosDoFormulario, true);
	xmlhttp.setRequestHeader('Content-Type','text/html');
	xmlhttp.setRequestHeader('encoding','utf-8');
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp.setRequestHeader('Content-length', dadosDoFormulario.lenght );
	xmlhttp.send(dadosDoFormulario);
	xmlhttp.onreadystatechange=function() {

        if (xmlhttp.readyState==4){
			if (xmlhttp.status == 200){
				var aResposta = (xmlhttp.responseText);
				//Insere a resposta da requisição dentro da tag com o ID selecionado 	
				document.getElementById('conteudo_A_'+conteudo+'_'+usuario).innerHTML = aResposta;	
			}else{
				//Erro na resposta da requisição
				document.getElementById('conteudo_A_'+conteudo+'_'+usuario).innerHTML = "Sua requisição não retornou um resultado válido.\nErro: "+xmlhttp.status;
			}
        }
    }
}


function insereItemAoUsuario(id,usuario,tipo){

	dadosDoFormulario = "id="+escape(id)+"&usuario="+escape(usuario);
	xmlhttp.open("POST", "../"+tipo+"/editaajax.php?"+dadosDoFormulario, true);
	xmlhttp.setRequestHeader('Content-Type','text/html');
	xmlhttp.setRequestHeader('encoding','utf-8');
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp.setRequestHeader('Content-length', dadosDoFormulario.lenght ); 
	xmlhttp.send(dadosDoFormulario);
	xmlhttp.onreadystatechange=function() {

        if (xmlhttp.readyState==4){
			//Recebe o código de retorno (100 a 500)
			if (xmlhttp.status == 200){
				//Resposta da Requisição
				var aResposta = (xmlhttp.responseText);
				//Insere a resposta da requisição dentro da tag com o ID selecionado
				document.getElementById('botao_'+usuario).disabled = true;
				document.getElementById('aviso_'+usuario).style.display = "";
			}else{
				//Erro na resposta da requisição
				alert("Erro: "+xmlhttp.status);
			}
        }else{
			//Carregando resposta da requisição
			//alert("Carregando conteúdo");
		}
    }
}


function editaHistoriaCategoria(campo,historia,categoria){

	if(campo.checked==true){
		tipo = "S";
	}else{
		tipo = "R";
	}

	dadosDoFormulario = "historia="+escape(historia)+"&categoria="+escape(categoria)+"&tipo="+escape(tipo);
	xmlhttp.open("POST", "../historiacategoria/edita.php?"+dadosDoFormulario, true);
	xmlhttp.setRequestHeader('Content-Type','text/html');
	xmlhttp.setRequestHeader('encoding','utf-8');
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp.setRequestHeader('Content-length', dadosDoFormulario.lenght ); 
	xmlhttp.send(dadosDoFormulario);
	xmlhttp.onreadystatechange=function() {

        if (xmlhttp.readyState==4){
			//Recebe o código de retorno (100 a 500)
			if (xmlhttp.status == 200){
				//Resposta da Requisição
				var aResposta = (xmlhttp.responseText);
				//Insere a resposta da requisição dentro da tag com o ID selecionado
				//alert("Salvo");
			}else{
				//Erro na resposta da requisição
				alert("Erro");
			}
        }else{
			//Carregando resposta da requisição
			//alert("Carregando conteúdo");
		}
    }
}