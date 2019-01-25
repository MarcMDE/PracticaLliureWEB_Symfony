function openUsuari(evt, userName)
{
    var i, x, tablinks;
    x = document.getElementsByClassName("usuari");
    for (i = 0; i < x.length; i++)
    {
        x[i].style.display = "none";
    }


    tablinks = document.getElementsByClassName("tablink");
    console.log(tablinks);
    for (i = 0; i < x.length; i++)
    {
        tablinks[i].className = tablinks[i].className.replace(" w3-white", "");
    }

    document.getElementById(userName).style.display = "block";
    evt.currentTarget.className += " w3-white";
    //evt.currentTarget.style.background = "#FFE4E1";
}