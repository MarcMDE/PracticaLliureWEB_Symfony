function onComprar(){

    var correcte = true;

    $(".dadesTG input").each(function ()
    {
        console.log($(this).val());
        if($(this).val()=="" )
        {
            correcte = false;
        }
    })

    if(correcte == true)
    {
        window.location = "/shop/compra";
    }
   else{
        Swal.fire({
            title: 'Oooh!',
            text: "Has d'omplir el formulari amb les dades de la targeta per a poder realitzar la compra!",
            type: 'error',
            confirmButtonColor: '#F7819F',
            confirmButtonText: "D'acord"

        })
    }
}

function onBuidarCistell()
{
    
    $.ajax({
        method: 'post',
        url: '/shop/AfegirAlCistell/',
        data: {
            id: $("#prodId").val(),
            quant: quant
        }
    }).done(function(data){

        if (data.correct == true)
        {
            actualitzaCistell(data.cistell, data.cistellTotal);
        }
        else
        {
            console.log("AJAX ERROR");
            // TODO: MOSTRAR MISSATGE ERROR
        }
    });
}


