function AdicionarCarrinho(cod,nome,preco)
	{
		$.ajax({
			type: 'POST',
			url: 'anexo_adiciona_pizza.php',
			data: {
				nome: nome,
				preco: preco,
				cod: cod
			}
		}).done(function(retorno){
			$('#produtos_escolhidos').append(retorno);
			//$('#botaofechar').show();

		});
		
	}

function AdicionarCarrinho_meia(cod,nome,preco)
	{
		$('#aviso').remove();
		$.ajax({
			type: 'POST',
			url: 'anexo_adiciona_meia_pizza.php',
			data: {
				nome: nome,
				preco: preco,
				cod: cod
			}
		}).done(function(retorno){
			$('#produtos_escolhidos').append(retorno);
			//$('#botaofechar').show();


		});
		
	}


function Recheio()
{
	$('#recheios').show();
}

function fecharpedido()
{
	$('#produtos_escolhidos').hide();
	$('#fechar').show();
	$('#botaofechar').hide();
	$('#desmarcar').hide();
}
$(function(){
	$('#voltar').click(function(){
		$('#produtos_escolhidos').show();
		$('#fechar').hide();
		$('#botaofechar').show();
		$('#desmarcar').show();
	});
});
$(function(){

	$('#enviar').click(function(){
		$.ajax({
			type: 'POST',
			url: 'anexo_adiciona_pizza.php',
			data: {
				nome: $('#nome').val(),
				rua: $('#rua').val(),
				bairro: $('#bairro').val(),
				numero: $('#numero').val(),
				complemento: $('#complemento').val()
			}
		}).done(function(retorno){
		});
	});
});

function checkmeia(cod, nome)
{
	$.ajax({
			type: 'POST',
			url: 'anexo_recheio_pizza.php',
			data: {
				nome: nome,
				codigo: cod
			}
		}).done(function(retorno){
		});
}


function Button1(codigo)
{
  var oldvalues = $('#bu'+codigo).val();
  var newvals = parseFloat(oldvalues) + 1;
  $('#bu'+codigo).val(newvals);
}

function Button2(codigo)
{
  var oldvalues = $('#bu'+codigo).val();  
  if(oldvalues > 1){
  var newvals = parseFloat(oldvalues) - 1;
  } else{
    newvals = 1;
  }
  $('#bu'+codigo).val(newvals);
}

function adicionapizza(codigo)
{
	var valorantigo = $('#bu'+codigo).val();
	var  novovalor = parseFloat(valorantigo) + 1;
	$('#bu'+codigo).val(novovalor);
}
function retirar(codigo)
{
	$.ajax({
			type: 'POST',
			url: 'anexo_adiciona_pizza.php',
			data: {
				retirar: 'retirar',
				codigo: codigo
			}
		}).done(function(retorno){
			$('#divpizza'+codigo).remove();
		});

}

//inicio meiapizza
function removebotao(numero){
	$('#retiranumero'+numero).remove();
}

function retirarmeia(numero,codigo){
	$('#aviso').remove();
	$.ajax({
			type: 'POST',
			url: 'anexo_adiciona_meia_pizza.php',
			data: {
				numero: numero,
				codigo: codigo,
				retirar: retirar
			}
		}).done(function(retorno){
			$('#meia'+numero).remove();
			$('#meia1'+numero).remove();
		});
}

function checkmeia(cod, nome, numero)
{
	$.ajax({
			type: 'POST',
			url: 'anexo_recheio_meia_pizza.php',
			data: {
				nome: nome,
				codigo: cod,
				numero: numero
			}
		}).done(function(retorno){
		});
}

function Buttonmeia1(numero)
{
  var oldvalues = $('#bumeia'+numero).val();
  var newvals = parseFloat(oldvalues) + 1;
  $('#bumeia'+numero).val(newvals);
}

function Buttonmeia2(numero)
{
  var oldvalues = $('#bumeia'+numero).val();  
  if(oldvalues > 1){
  var newvals = parseFloat(oldvalues) - 1;
  } else{
    newvals = 1;
  }
  $('#bumeia'+numero).val(newvals);
}
//fim meiapizza
