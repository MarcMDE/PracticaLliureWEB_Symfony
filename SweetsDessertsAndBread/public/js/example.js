function ajaxCall(id)
{
    $.ajax({
        method: 'post',
        url: 'AjaxResp/'
    }).done(function(data){
        $('#' + id).html(data.nom_var);
    })
}