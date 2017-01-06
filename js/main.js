$( document ).ready(function() {
    $( ".login-bc" ).click(function() {
    alert( "Зарегистрироваться" );
    var exponent = '<i class="fa fa-sign-out" aria-hidden="true"></i><a href="#">Выйти</a>';
    $( ".login-bc" ).text('');
    $( ".login-bc" ).append(exponent);
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    
    $( ".close" ).click(function() {
        $( ".offer-main" ).hide();
    });
});

