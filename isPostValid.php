<?php

/**
 * @param string ...$args Nom de la clé $_POST[]
 * @return bool
 */
function isPostValid(string... $args) : bool {

    for($i = 0; $i < count($args);$i++)
    {
        try {
            if(isset($_POST[$args[$i]]) && !empty($_POST[$args[$i]])) {
                continue;
            }
            else return false;
        }
        catch(Exception){
            return false;
        }
    }
    return true;
}