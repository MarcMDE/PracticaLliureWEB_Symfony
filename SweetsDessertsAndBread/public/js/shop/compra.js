$(function () {
    Swal.fire({
        title: 'Enhorabona!',
        text: "Has realitzat la teva compra correctament!",
        type: 'success',
        confirmButtonColor: '#F7819F',
        confirmButtonText: 'Tornar a la Botiga'
    }).then(() => {

        window.location="/shop/shop/-1";
    })
})