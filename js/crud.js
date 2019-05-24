

function trocaConteudoIFrame(tela){
	var iframe = document.getElementById("iframeDeConteudo");
	iframe.setAttribute('src', tela);
 
	a = tela.split("/")
	let path = a[a.lenght-1];

	if (path == "table.php") {
		document.getElementById('table').classList.add('active');
	}else if (path == "alert.php"){
		document.getElementById('alert').classList.add('active');
	}else if (path == "botoes.php"){
		document.getElementById('button').classList.add('active');
	}
	else if(path=="navbar.php"){
		document.getElementById('navbar').classList.add('active');
	}
	else if(path == "input.php"){
		document.getElementById('input').classList.add('active');
	}
	else if(path == "carrossel.php"){
		document.getElementById('carousel').classList.add('active');
	}
	else if(path == "grid.php"){
		document.getElementById('grid').classList.add('active');
	}
}