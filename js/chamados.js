//Fade na ao selecionar o chamado
$(document).ready(function(){
    $(".bttn").click(function(){
        $('.chamado').fadeIn(100);
       $('.table-responsive').fadeOut(0);
    });
});

//Fade para sair da tela de chamado
$(document).ready(function(){
    $(".sair").click(function(){
        $('.chamado').fadeOut(0);
       $('.table-responsive').fadeIn(100);
    });
});