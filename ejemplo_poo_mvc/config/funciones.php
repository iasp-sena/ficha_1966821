<?php
function getUrlControllerMethod($controller,$method){
    return CONTEXT_ROOT . "/$controller/$method"; 
}