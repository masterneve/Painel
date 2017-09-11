//To - Do: Trás o conteudo do Link via HTTP
$(document).ready(function(){
		$(".menu").click(function( e ){
			e.preventDefault();
		   $.ajax({
           url: $(this).attr('href'),
           type : 'POST',
            success: function(res) {
                $('.central').html(res);
               }
        });
      });
});
//To - Do: limpar divs ao clicar no home
$(document).ready(function(){
		$(".home").click(function( e ){
      location.reload();
    });
  });

//To - Do: Validar os campos do Form para abertura de chamados 


//To - Do: Habilitar campos para responder o chamado


// 