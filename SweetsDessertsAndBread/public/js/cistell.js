function actualitzaCistell(arr, total)
{
    var cistell = "";
    console.log("L:" + arr.length);
    if (arr.length === 0)
    {
        cistell += "<p><b>Afegeix algún producte al cistell!</b></p>"
    }
    else
    {
        cistell += "<ul>";

        for(var i=0; i<arr.length; i++)
        {
            cistell += "<li>" + arr[i] + "</li>";
        }

        cistell += "</ul>";
        cistell += "<hr class='preuT'>";
        cistell += "<p class='w3-center preuNum'><b>Preu Total: " + total + " €</b></p>";
    }

    console.log(cistell);
    $("#cistellContent").html(cistell);
}