<?php 
/***
 * Plugin name: Megaform
 * Author: Jhovanny Giraldo
 * Description: Plugin para crear un formulario el cual enviará datos a correo electrónico, y a whatsapp, Dicho plugin se agregará con un shortcode [plugin_megaform]
 */

 //Definir la llamada al shortcode*****
add_shortcode('plugin_megaform', 'plugin_megaform');

function Plugin_megaform()
{
    ob_start();
    ?>
    <form action="<?php get_the_permalink();?>" method="post" class="cuestionario">
    <div class="head">
    <p class="ayuda">¿Como podemos ayudarte?</p>
    </div>
    <div class="form-input">
        <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
    </div> 
    <div class="form-input">
        <input type="text" name="apellido" id="apellido" required placeholder="Apellido">
    </div> 
    <div class="form-input">
        <input type="text" name="numero" id="numero" required placeholder="Número de Whatsapp">
    </div>  

    <textarea name="mensaje" class
    ="form-input" id="" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea> 
    </form>

    <input type="submit" name="submit" class="btn btn-primary" value="Enviar mensaje">  
    </form>
    <?php 
    return ob_get_clean();
}


