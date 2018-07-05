<?php


function hq_carrental_set_variable( $attr )
{
    if( isset($attr) ){
        return $attr;
    }else{
        return '';
    }
}
