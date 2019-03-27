console.log('index.js 2');

(function($){
    $(document).ready(function(){
        $('#title-bar').click(function(){
            document.location.href = "/";
        });

        $(window).scroll(function(e){
            if( $('body').hasClass('page-template-template-work') ){
                console.log($('.collab').position().top - window.innerHeight,window.scrollY);
                if(window.scrollY >= $('.collab').offset().top - window.innerHeight ){
                    $('body').addClass('has-scrolled-bottom');
                }
                else {
                    $('body').removeClass('has-scrolled-bottom');
                }
            }
            else {
                if(window.scrollY > 50){
                    $('body').addClass('has-scrolled');
                }
                else {
                    $('body').removeClass('has-scrolled');
                }
            }

            
        });


        $('#return-button').click(function(){
            $(window).scrollTo(0,300);
        });

        $('article').click(function(e){
            document.location.href = $(e.currentTarget).attr('data-id');
        });
    });
}(jQuery));

