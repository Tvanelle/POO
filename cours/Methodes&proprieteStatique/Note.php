<?php
class Note{
    public $note;
    public $nom;
    private static $zero=0;
    const SUFFIX='$';

    private static function noteGenerale($note){
        if ($note<9) {
            return "Le nombre est desormais ".self::$zero.$note.self::SUFFIX;
        }
        else{
            return "Le nombre reste".$note.self::SUFFIX;
        }
    }
    public static function appleNote($note){
        return self::noteGenerale($note);
    }
}