<?php
class Template {

    public function render($urlContenido,$data = []){
        include(DIR_VIEW . "template/head.php");
        include(DIR_VIEW . "template/menu.php");
        include(DIR_VIEW . "template/message.php");

        include($urlContenido);

        include(DIR_VIEW . "template/footer.php");
    }
}