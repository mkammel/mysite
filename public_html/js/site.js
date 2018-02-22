jQuery(document).ready(function($){
    var $mobileLogo = $('#mobile-logo'),
        $mobileNav = $('#mobile-nav');

    $('.content').css('opacity', 1);

    $('#menu-toggle').click(function(e){
        $mobileLogo.toggleClass('open');
        $mobileNav.toggleClass('open');

        if($mobileNav.hasClass('open')){
            $mobileNav.css('z-index', 1000);
        }
    });

    $("#mobile-nav").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
        if(! $(this).hasClass('open')){
            $(this).css('z-index', '-1');
        }
    });

    $('#toggle-contact').click(function(e){
        e.preventDefault();

        $(this).toggleClass('active');
        $('#contact-backdrop').toggleClass('active');
        $('#contact-thanks').hide();
        if($('#contact-form').hasClass('active')){
            $('#contact-form').removeClass('active');
        }else{
            setTimeout(function(){
                $('#contact-form').addClass('active');
            }, 300);
        }

    });

    $('#contact-form form').submit(function(e){
        e.preventDefault();

        $.post( "ajax/mail.php", $(this).serialize(),  function( data ) {

            console.log(data);

            $('#toggle-contact').removeClass('active');
            $('#contact-backdrop').removeClass('active');
            $('#contact-form').removeClass('active');
            setTimeout(function(){
                $('#contact-thanks').fadeIn(300);
            }, 300);

        });

        return false;
    });


});

/**
 *Print Console Banner and Welcome Message
 */
(function(){var c117='background:#808080;',c112='background:#858585;',c125='background:#868686;',c126='background:#878787;',c90='background:#909090;',c113='background:#929292;',c96='background:#939393;',c103='background:#949494;',c83='background:#959595;',c101='background:#969595;',c97='background:#969696;',c91='background:#979797;',c92='background:#989898;',c0='background:#c6c5c5;',c1='background:#c5c4c4;',c2='background:#c4c3c3;',c3='background:#c9c8c8;',c4='background:#bebdbd;',c5='background:#bdbbbb;',c6='background:#cac9c9;',c7='background:#bfbebe;',c8='background:#efeeee;',c9='background:#f3f2f2;',c10='background:#bcbbbb;',c11='background:#c2c1c1;',c12='background:#c3c2c2;',c13='background:#d6d6d6;',c14='background:#d1d0d0;',c15='background:#c0bfbf;',c16='background:#c1c1c1;',c17='background:#fdfdfd;',c18='background:#dfdfdf;',c19='background:#e9e9e9;',c20='background:#fefefe;',c21='',c22='background:#d4d4d4;',c23='background:#bcbaba;',c24='background:#f7f6f6;',c25='background:#e7e8e8;',c26='background:#bbb9b9;',c27='background:#dedddd;',c28='background:#dcdcdc;',c29='background:#ebebeb;',c30='background:#e7e6e6;',c31='background:#c0bdbd;',c32='background:#f7f7f7;',c33='background:#f4f3f3;',c34='background:#e4e5e5;',c35='background:#c0bebe;',c36='background:#f6f5f5;',c37='background:#b8b7b7;',c38='background:#dddddd;',c39='background:#ecebeb;',c40='background:#bab9b9;',c41='background:#e0dfdf;',c42='background:#d8d8d8;',c43='background:#bbbaba;',c44='background:#e3e2e2;',c45='background:#d2d2d2;',c46='background:#fafafa;',c47='background:#c1c0c0;',c48='background:#bfbdbd;',c49='background:#c8c7c7;',c50='background:#f2f2f2;',c51='background:#bcbcbc;',c52='background:#c3c1c1;',c53='background:#dcdbdb;',c54='background:#b5b3b3;',c55='background:#e2e4e4;',c56='background:#e8e8e8;',c57='background:#cfcece;',c58='background:#fbfbfb;',c59='background:#f6f6f6;',c60='background:#f1f0f0;',c61='background:#ededed;',c62='background:#d4d3d3;',c63='background:#d0cece;',c64='background:#f2f1f1;',c65='background:#c2c0c0;',c66='background:#efefef;',c67='background:#cfcfcf;',c68='background:#e4e3e3;',c69='background:#e5e5e5;',c70='background:#bdbcbc;',c71='background:#e4e4e4;',c72='background:#f2f4f4;',c73='background:#edeeee;',c74='background:#efeded;',c75='background:#dfdede;',c76='background:#d3d2d2;',c77='background:#d3d3d3;',c78='background:#d5d5d5;',c79='background:#d0cfcf;',c80='background:#cecdcd;',c81='background:#c7c6c6;',c82='background:#abaaaa;',c84='background:#8e8e8e;',c85='background:#cccbcb;',c86='background:#cdcbcb;',c87='background:#b7b6b6;',c88='background:#a3a3a3;',c89='background:#8f8f8f;',c93='background:#b0afaf;',c94='background:#9c9c9c;',c95='background:#8c8d8d;',c98='background:#cbcaca;',c99='background:#bebebe;',c100='background:#aaaaaa;',c102='background:#8d8e8e;',c104='background:#a7a7a7;',c105='background:#8b8b8b;',c106='background:#b9b8b8;',c107='background:#c2c2c2;',c108='background:#dadada;',c109='background:#e1e1e1;',c110='background:#b8b8b8;',c111='background:#8d8d8d;',c114='background:#e0e0e0;',c115='background:#f4f4f4;',c116='background:#9a9a9a;',c118='background:#cdcdcd;',c119='background:#a9a9a9;',c120='background:#7f7f7f;',c121='background:#8c8c8c;',c122='background:#dad9d9;',c123='background:#dbdbdb;',c124='background:#b2b2b2;',c127='background:#d2d1d1;',c128='background:#c5c5c5;';

console.log('%c                                  \n%c                                  \n%c                                  \n%c                                  \n%c                                  \n%c                                  \n%c                                  \n%c                                  \n%c     %c %c                      %c %c     \n%c    %c %c %c %c         %c  %c        %c %c %c %c %c    \n%c    %c %c %c %c %c %c      %c %c %c %c %c      %c %c %c %c %c %c    \n%c    %c %c %c %c %c %c %c %c    %c %c %c %c %c    %c %c %c %c  %c %c %c    \n%c    %c %c %c %c %c %c %c %c %c   %c %c %c %c %c   %c %c %c %c %c %c %c %c %c    \n%c    %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c    \n%c    %c %c %c %c %c %c %c %c %c %c  %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c %c    \n%c    %c %c %c %c %c  %c %c %c %c %c %c %c %c %c %c %c %c %c %c   %c %c %c %c %c    \n%c    %c %c %c %c %c    %c %c %c %c %c %c %c %c %c %c %c    %c %c %c %c %c    \n%c    %c %c %c %c %c     %c %c %c %c  %c %c %c      %c %c %c %c %c    \n%c    %c %c %c %c %c     %c %c %c   %c %c %c %c     %c %c %c %c %c    \n%c    %c %c %c %c %c   %c %c %c %c %c %c %c %c %c %c %c %c %c   %c %c %c %c %c    \n%c    %c %c %c %c %c   %c %c %c %c %c %c %c %c %c %c %c %c %c   %c %c %c %c %c    \n%c    %c %c %c %c %c    %c %c %c %c %c %c %c %c %c %c %c    %c %c %c %c %c    \n%c    %c %c %c %c %c       %c %c %c %c %c       %c %c %c %c %c    \n%c    %c %c %c %c %c       %c %c %c %c %c       %c %c %c %c %c    \n%c     %c  %c         %c  %c         %c  %c   %c %c \n%c                            %c  %c %c %c %c \n%c                         %c %c %c %c %c %c %c %c %c \n%c                      %c %c %c %c %c %c %c %c %c %c %c %c \n%c                  %c  %c %c %c %c %c %c %c %c %c %c     \n%c                 %c %c %c %c %c %c %c %c %c %c        \n%c             %c %c %c %c %c %c %c %c %c %c %c           \n%c          %c %c %c %c %c %c %c  %c %c %c %c %c %c %c          \n%c       %c %c %c %c %c %c %c        %c %c %c %c %c %c %c       \n%c   %c %c %c %c %c %c %c                %c %c %c %c %c %c    \n%c %c %c %c %c %c %c                      %c %c %c %c %c %c \n%c %c %c                             %c %c %c \n',c0,c0,c0,c0,c0,c0,c0,c0,c0,c1,c0,c1,c0,c0,c2,c3,c4,c0,c2,c0,c1,c5,c6,c1,c0,c0,c7,c8,c9,c10,c11,c0,c12,c13,c14,c12,c0,c15,c16,c17,c18,c12,c0,c0,c7,c19,c20,c21,c22,c23,c1,c0,c7,c24,c25,c7,c0,c1,c26,c27,c21,c28,c12,c0,c0,c7,c29,c30,c31,c21,c32,c4,c11,c0,c7,c33,c34,c35,c0,c15,c1,c21,c36,c37,c36,c38,c12,c0,c0,c7,c29,c39,c7,c40,c41,c21,c42,c43,c1,c0,c7,c33,c34,c35,c0,c2,c43,c44,c21,c45,c43,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c7,c12,c17,c46,c47,c15,c33,c34,c15,c48,c49,c21,c50,c51,c52,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c1,c43,c53,c21,c28,c54,c33,c55,c54,c56,c21,c57,c10,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c47,c11,c58,c59,c60,c61,c21,c61,c10,c12,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c1,c37,c62,c21,c1,c10,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c10,c63,c21,c17,c1,c7,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c1,c15,c64,c21,c65,c66,c28,c67,c21,c68,c11,c1,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c15,c66,c69,c43,c70,c33,c71,c10,c48,c72,c57,c2,c0,c15,c32,c38,c12,c0,c0,c7,c29,c39,c15,c0,c15,c47,c0,c7,c33,c71,c35,c0,c7,c2,c0,c15,c32,c38,c12,c0,c0,c7,c73,c74,c15,c0,c7,c32,c30,c7,c0,c15,c58,c75,c12,c0,c0,c12,c76,c77,c12,c0,c12,c78,c79,c12,c0,c2,c13,c14,c12,c0,c0,c2,c0,c2,c0,c2,c0,c1,c0,c0,c1,c0,c3,c80,c2,c0,c1,c0,c81,c6,c63,c7,c82,c83,c84,c0,c1,c0,c49,c85,c86,c87,c88,c89,c90,c83,c91,c92,c0,c1,c81,c3,c80,c81,c93,c94,c95,c96,c97,c92,c0,c81,c98,c80,c99,c100,c101,c102,c103,c91,c92,c0,c1,c12,c70,c7,c104,c83,c105,c89,c97,c91,c92,c0,c2,c11,c106,c107,c108,c33,c21,c109,c110,c111,c112,c113,c97,c92,c0,c2,c7,c37,c98,c114,c17,c21,c115,c107,c116,c117,c89,c83,c92,c0,c1,c12,c70,c43,c45,c19,c21,c118,c119,c120,c121,c103,c92,c2,c11,c37,c2,c122,c33,c21,c123,c124,c125,c126,c96,c97,c127,c68,c21,c66,c128,c88);
return '';})();
