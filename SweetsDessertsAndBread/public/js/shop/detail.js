function onAfegiarAlCistell()
{
    var quant = $("#prodQuant").val();

    if (isNaN(quant))
    {
        quant = 1;
    }

    $.ajax({
        method: 'post',
        url: '/shop/AfegirAlCistell/',
        data: {
            id: $("#prodId").val(),
            quant: quant
        }
    }).done(function(data){

        if (data.correct == true)
        {

            actualitzaCistell(data.cistell, data.cistellTotal);
            Swal.fire({
                title: 'Enhorabona!',
                text: "Has afegit el producte al cistell!",
                type: 'success',
                confirmButtonColor: '#F7819F',
                confirmButtonText: "D'acord"
            })
        }
        else
        {
            Swal.fire({
                title: 'Oooh!',
                text: "No s'ha pogut afegir el producte!",
                type: 'error',
                confirmButtonColor: '#F7819F',
                confirmButtonText: "D'acord"
            })
        }
    });
}


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
}

/*
jQuery('<div class="quantiatP-nav"><div class="quantiatP-button quantiatP-up">+</div><div class="quantiatP-button quantiatP-down">-</div></div>').insertAfter('.quantiatP input');
jQuery('.quantiatP').each(function() {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantiatP-up'),
        btnDown = spinner.find('.quantiatP-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

});
*/