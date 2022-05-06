<?php

$this->get('/', function(){
    echo 'Estou na HOME!!';
});

$this->get('/home/', function(){
    echo 'Estou na HOME!!';
});

$this->get('/about/test', function(){
    echo 'Estou na about test!!';
});