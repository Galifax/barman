$('#login').click(function(){
	$('#login-load').load('/site/login');
});
$('#category').click(function(){
	$('#category-load').load('/site/category');
});

// ===========filter orders===========
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

});


// ======proffile start======
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
    $('[data-toggle="popover"]').popover()
})
// ============proffile end=======