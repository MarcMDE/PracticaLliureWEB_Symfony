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

        Swal.fire({
            title: 'Enhorabona?',
            text: "Has realitzat la teva compra correctament!",
            type: 'success',
            confirmButtonColor: '#F7819F',
            confirmButtonText: 'Tornar a la Botiga'
        }).then(() => {

             window.location="/shop/-1";
        })
    }
   else{
        Swal.fire({
            title: 'Oooh!',
            text: "Has d'omplir el formulari amb les dades de la tarjeta per a poder realitzar la compra!",
            type: 'error',
            confirmButtonColor: '#F7819F',
            confirmButtonText: "D'acord"

        })
    }
}


