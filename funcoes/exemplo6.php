<?php

function test($callback){

    $callback();
}

test(function(){
    echo "terminou<br>";
});

$fn = function($a){
    var_dump($a);
};

$fn("Oi");