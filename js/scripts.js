$(document).ready(function () {
    // Code actif

    // Menu Burger
    $('.menu-icon').click(function (e) {
        // e.preventDefautl();

        $this= $(this);
        if($this.hasClass('is-opened')){
            $this.addClass('is-closed').removeClass('is-opened');
        }else{
            $this.removedClass('is-closed').addClass('is-opened');
        }

        });
        
    });

    // carrousel

    // Carousel

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navtext: ['Précédent', 'Suivant'],
        dots: true,
        autoplay: true,
        autoplaySpeed: 700,
        autoplayHoverPause: true,

    });


    


    // slider 


    $(document).ready(function () {
        $(".slider").slippry({
            captions: false,
            transition: 'horizontal',
            speed: 100,
        });
    
  

}); /*toujours faire gaffe a ce que cet element soit toujours en bas*/