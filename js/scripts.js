$(function(){
    //Aqui vai todo nosso código de JavaScript
    $('nav.mobile').click(function(){
        //O que vai acontecer quando clicarmos na nav.mobile!
        var listaMenu = $('nav.mobile ul');
        // listaMenu.slideToggle();//abrir ou fechar o menu

        //<i class="fa-solid fa-x"></i>

        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
         }
    });



})