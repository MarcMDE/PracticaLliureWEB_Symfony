/*function onAplyEdit()
{
    console.log("oi");

    var nom = $("#Nom").val();
    var cognoms = $("#Cognoms").val();
    var telefon = $("#Telf").val();
    var direccio = $("#Adreca").val();
    var localitat = $("#Loc").val();
    var codiPostal = $("#CP").val();
    var pais = $("#Pais").val();
    var email = $("#Email").val();
    var arxiuFoto = $("#Foto").val();
    var rebreMails = $("#RebM").val();

    console.log("iniciar ajax");
    $.ajax({
        method: 'post',
        url: '/user/AplyEdit/',
        data: {
            NouNom: nom,
            NouCognoms: cognoms,
            NouTelefon: telefon,
            NouAdreca: direccio,
            NouCiutat_Poble: localitat,
            NouCodiPostal: codiPostal,
            NouPais: pais,
            NouEmail: email,
            NouFoto: arxiuFoto,
            NouRebreMail: rebreMails
        }
    }).done(function(data){

        console.log("ajax acabat");

        if (data.correct == true)
        {
            Swal.fire({
                title: 'Enhorabona!',
                text: "Les teves dades s'han actualitzat correctament!",
                type: 'success',
                confirmButtonColor: '#F7819F',
                confirmButtonText: "D'acord"
            })
        }
        else
        {
            Swal.fire({
                title: 'Oooh!',
                text: "No s'han pogut actualitzar les teves dades!",
                type: 'error',
                confirmButtonColor: '#F7819F',
                confirmButtonText: "D'acord"
            })
        }
    });
}
*/