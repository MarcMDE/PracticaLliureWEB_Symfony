function onSearch(el)
{
    $(".products-flexbox-item").each(function()
    {
        var text = $(el).val().toLowerCase();

        if ($(this).children("input").val().toLowerCase().search(text) == -1)
        {
            $(this).hide();
        }
        else
        {
            $(this).show();
        }

    })
}