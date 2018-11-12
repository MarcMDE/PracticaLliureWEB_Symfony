// When the user scrolls the page navbarResize
window.onscroll = function() {navbarResize()};
var navBarSmallHeight = "56pxpx";
var navBarBigHeight = "70px";
$(function()
{
    $(".nav-bar").css("height", navBarBigHeight);
    $(".content").css("margin-top", navBarBigHeight);
    $(document).click(function(e)
    {
        closeDropDowns();
    })

})

function navbarResize()
{
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
    {
        $(".nav-bar").css("height", navBarSmallHeight);
        $(".content").css("margin-top", navBarSmallHeight);
        $("#onlinetext").hide();
    }
    else
    {
        $(".nav-bar").css("height", navBarBigHeight);
        $(".content").css("margin-top", navBarBigHeight);
        $("#onlinetext").fadeIn();
    }
}

