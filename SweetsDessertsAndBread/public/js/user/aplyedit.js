$(function () {
    Swal.fire({
        title: 'Enhorabona!',
        text: "Les teves dades s'han actualitzat correctament!",
        type: 'success',
        confirmButtonColor: '#F7819F',
        confirmButtonText: "D'acord"
    }).then(() => {

        window.location="/shop/shop/-1";
    })
})