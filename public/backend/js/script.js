$(document).ready(function(){
    SITE.btnLogin();
    SITE.btnRegister();
    SITE.txtsearch();
});

SITE = {
    btnLogin:function(){
        $('.btnLogin').on('click', function(){
            $(this).toggleClass('abc');

            return false;
        });

    },
    btnRegister:function(){
        $('.btnRegister').click(function(){
            alert('Dang ky');
        });
    },
    txtsearch:function(){
       $('#txtsearch').keypress(function(){

       });
    }
}

