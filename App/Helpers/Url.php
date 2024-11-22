<?php
class Url{
    public static function redirecionar($url){
        header('Location: '.URL.DIRECTORY_SEPARATOR.$url);

    }//fim dfa função redirecionar
}//fim da classe Ulr