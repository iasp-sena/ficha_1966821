<?php
class TemplateLogin {

    public function render($data = []){
        include(DIR_VIEW . "template_login/head.php");
        include(DIR_VIEW . "template_login/menu.php");
        include(DIR_VIEW . "template_login/message.php");

        include(DIR_VIEW . "template_login/login.php");

        include(DIR_VIEW . "template_login/footer.php");
    }
}