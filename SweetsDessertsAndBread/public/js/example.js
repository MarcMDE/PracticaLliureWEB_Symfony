function ajaxCall()
{
    var quant = $("#prodQuant").val();

    if (isNaN(quant))
    {
        quant = 1;
    }

    $.ajax({
        method: 'post',
        url: 'AjaxResp/',
        data: {
            id: $("#prodId").val(),
            quant: quant
        }
    }).done(function(data){
        if (data.correct == true)
        {

        }
        else
        {
            
        }
    })
}