$( document ).ready(function() {
    $( ".login-bc" ).click(function() {
    alert( "������������������" );
    var exponent = '<i class="fa fa-sign-out" aria-hidden="true"></i><a href="#">�����</a>';
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

