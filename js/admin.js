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
$(document).ready(function(){
	$('.sr-only').click(function( e ){
		 window.log('Ola');
		//$('.chamados').fadeOut(100);
		});
});
