<?php
require 'Note.php';
$cone=new Note();
var_dump( Note::appleNote(5));
var_dump( $cone::appleNote(15));
var_dump( $cone::appleNote(8));