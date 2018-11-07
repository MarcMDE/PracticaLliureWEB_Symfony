
// When the user scrolls the page navbarResize 
window.onscroll = function() {navbarResize()};
var navBarSmallHeight = "103px";
var navBarBigHeight = "137px"; 
$(function()
{
	$(".nav-bar").css("height", navBarBigHeight);
	$(".content").css("margin-top", navBarBigHeight);
	$(document).click(function(e)
	{
		closeDropDowns();
	})

})

function onCategoriesBtnClick(e)
{
	e.stopPropagation();

	if($("#menuCategories").css("display") == "block")
	{
		$("#menuCategories").css("height", "0px");
		$("#menuCategories").css("display", "none");
	}
	else
	{
		closeDropDowns();
		$("#menuCategories").css("display", "block");
		$("#menuCategories").css("height", "auto");
	}
}

function onUsuariBtnClick(e)
{
	console.log("oi");
	e.stopPropagation();
	if($("#usuariRegistre").css("display") == "block")
	{
		$("#usuariRegistre").css("height", "0px");
		$("#usuariRegistre").css("display", "none");
	}
	else
	{
		closeDropDowns();
		$("#usuariRegistre").css("display", "block");
		$("#usuariRegistre").css("height", "auto");
	}
}

function closeDropDowns()
{
	$(".dropdown").css("height", "0px");
	$(".dropdown").css("display", "none");
	
	/*$(".dropdown").each(function()
		{
			if ($(this).css("display") == "block")
			{
				$(this).css("display", "none");
			}
		})*/
}

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

