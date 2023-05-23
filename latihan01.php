<?php
    $dta["NAMA"]= "Intan";
    $dta["TGL_LAHIR"]="2004-04-30";
    $dta["JKEL"]="P";
    $dta["ALAMAT"]="Badung";
    $dta["UMUR"]="19";
    $dta["NIM"]="2201010367";

    header("content-type: application/json; charset=utf-8");  
    echo json_encode ($dta);

