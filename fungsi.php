<?php

function statusStok($stok){

    if($stok > 0){
        return "Tersedia";
    }else{
        return "Habis";
    }

}

function formatJudul($judul){

    return ucwords($judul);

}

?>