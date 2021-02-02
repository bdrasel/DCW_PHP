$(function(){
    $("#showSignUpForm").on('click',function(){
        $('#login-form-box').hide();
        $('#register-form-box').show();
    });

    $("#showLoginform").on('click',function(){
        $('#login-form-box').show();
        $('#register-form-box').hide();
    });

    $("#forgotSignBox").on('click',function(){
        $('#login-form-box').hide();
        $('#forgotten-form-box').show();
    });

    $("#forgotSignUpFrom").on('click',function(){
        $('#register-form-box').show();
        $('#forgotten-form-box').hide();
    });


})