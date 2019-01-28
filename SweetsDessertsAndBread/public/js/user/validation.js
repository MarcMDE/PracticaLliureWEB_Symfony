function onEmailValidation()
{
    $email = $("#inputEmail").val();

    if ($email != "")
    {
        $.ajax({
                method: 'post',
                url: '/shop/validateemail',
                data: {email: $email}
            }
        ).done(function(data){

            console.log(data.user);

            if (data.correct == true)
            {
                $("#regButton").show();
            }
            else
            {
                $("#regButton").hide();
                Swal.fire(
                    'El Email introduit ja perteneix a un usuari...',
                    'Introdueix un Email diferent',
                    'warning'
                )
            }
        });
    }
}