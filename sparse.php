<?php

function sparse_binary_count ($number) {
    if(is_int(number)) {
        return check_sparse($number);   
    }  
    return false;	
}

function check_sparse($number){
  
    for($validator=0x00001;$validator<=0x01000; $validator=$validator<<1) {
  
        if(($number&$validator)&&($number&$validator<<1)){
            return false;
        }
    }
    return true;
}

//sparse_binary_count (300);
