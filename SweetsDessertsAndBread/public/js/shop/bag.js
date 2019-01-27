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
    Swal.fire({
        title: 'Estàs segur que vols buidar el cistell?',
        text: "No podràs tirar enderrera!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#F7819F',
        cancelButtonColor: '#800000',
        confirmButtonText: 'Si, buidar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                    method: 'post',
                    url: '/shop/BuidarCistell/'
                }
            ).done(function(data){

                if (data.correct == true)
                {
                    $("#dadesTarjeta").html("");
                    $("#bagContainer").html("");
                    $("#cistellBuit").show();
                    actualitzaCistell(data.cistell, data.cistellTotal);
                }
                else
                {
                    // TODO: MOSTRAR MISSATGE ERROR
                }
            });
        }
    })

function onEliminarProducte(){
    $.ajax({
            method: 'post',
        }
    ).done(function(data){

        if (data.correct == true)
        {
            $("#bagContainer").html("");
            $("#cistellBuit").show();
            actualitzaCistell(data.cistell, data.cistellTotal);
        }
        else
        {
            // TODO: MOSTRAR MISSATGE ERROR
        }
    });
}


}


}


