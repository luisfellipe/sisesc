<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>


<script type="javascript">

function showForm(elemento){

  var e = document.getElementById(elemento);
    
	if(e.style.display=="none"){
		e.style.display="block";
	}else{
		e.style.display="none";
	}

}
</script>

<script type="javascript">

	var num = 50; // tanto de scroll que vai precisar para a barra ficar fixa.

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.navbar-fixed-top').css('top', 0);
    } else {
       //Quando o menu ficar fixo
        $('.navbar-fixed-top').css('top', 130); 
    }
});
</script>
