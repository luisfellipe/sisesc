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

    function editar(element) {
     doc =  document.getElementById(element).innerHTML;
     doc = "
          <form>
         <fieldset>
             <h2 class="text-primary">Informações do Aluno</h2>
             <hr>
             <label>Nome:</label>
             <input type="text" name="nome" size="45" placeholder="<?php echo $nome ?>"></input>
             <br>
             <label>Idade:</label>
             <input type="text" name="idade" size="4" placeholder="<?php echo $idade ?>"></input>
             <br>
             <label>Email:</label>
             <input type="email" name="email" size="45" placeholder="<?php echo $email ?>">
             <?php echo $email ?></input>
             <br>
             <label>Telefone:</label>
             <input type="text" name="telefone" size="15" placeholder="<?php echo $telefone ?>"></input> 
             <br>
             <label >CPF:</label>
             <input type="text" name="cpf" size="15" placeholder="<?php echo $cpf ?>"></input>
             <br>
             <label >RG:</label>
             <input  type="text" name="rg" size="15" placeholder="<?php echo $rg ?>"></input> 
             <br>
             <label>RA:</label>
             <input type="text" name="ra" size="15" placeholder="<?php echo $ra ?>"></input>
             <br>
             <input  class="btn btn-success" type="submit" value="Confirmar"> </input>
         </fieldset>
     </form> ";

 }