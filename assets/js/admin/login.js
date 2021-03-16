$(function(){
    
    const site_url = 'http://localhost/DCW_PHP/';
    
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
    
    
    $("#register_user").on('click',function(e){

        if($("#register-form")[0].checkValidity()){
             e.preventDefault()
             $("#register_user").val("Loading...").attr('disabled', true);

             if($("#name").val() === ''){
               $("#name").addClass('is-invalid');
             }else{
                $("#name").removeClass('is-invalid');
             }

             if($("#email").val() === ''){
               $("#email").addClass('is-invalid');
             }else{
                $("#email").removeClass('is-invalid');
             }

            if($("#u_password").val() === ''){
               $("#u_password").addClass('is-invalid');
             }else{
                $("#u_password").removeClass('is-invalid');
            }

            if($("#rpassword").val() === ''){
               $("#rpassword").addClass('is-invalid');
             }else{
                $("#rpassword").removeClass('is-invalid');
            }

            if($("#u_password").val() === $("#rpassword").val()){
                
                if($("name").val() !== '' && $("#email").val() !== ''){

                    $.ajax({
                        url:site_url+'/admin/action.php',
                        method:'post',
                        data: $('#register-form').serialize() + '&action=register',
                        success:function(response){
                            console.log(response);

                            $('#register-form')[0].reset();
                        }
                    })

                }


            }else{
                $(".error").html('This password does not match!');
            }

          $("#register_user").val("Register").attr('disabled', false);
        }
       

   });


})
