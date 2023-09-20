<?php
class Fila{
    private static $instance;

    private function Fila(){

    }

    private function ImprimeDocumento(){
        
    }
    private function RemoveDocumento(){
        
    }
    private function RemoveTodosDocumentos(){
        
    }

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}