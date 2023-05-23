<?php
    $dta[0]["NAMA"]= "Intan";
    $dta[0]["TGL_LAHIR"]="2004-04-30";
    $dta[0]["JKEL"]="P";
    $dta[0]["ALAMAT"]="Badung";
    $dta[0]["UMUR"]="19";
    $dta[0]["NIM"]="2201010367";

    $dta[1]["NAMA"]= "Prayu";
    $dta[1]["TGL_LAHIR"]="2003-02-16";
    $dta[1]["JKEL"]="P";
    $dta[1]["ALAMAT"]="Badung";
    $dta[1]["UMUR"]="19";
    $dta[1]["NIM"]="2201010362";

    $dta[2]["NAMA"]= "Jono";
    $dta[2]["TGL_LAHIR"]="2004-02-18";
    $dta[2]["JKEL"]="L";
    $dta[2]["ALAMAT"]="Badung";
    $dta[2]["UMUR"]="19";
    $dta[2]["NIM"]="2201010361";

    $dta[3]["NAMA"]= "Jabrik";
    $dta[3]["TGL_LAHIR"]="2005-03-20";
    $dta[3]["JKEL"]="L";
    $dta[3]["ALAMAT"]="Badung";
    $dta[3]["UMUR"]="19";
    $dta[3]["NIM"]="2201010360";

    $dta[4]["NAMA"]= "Roro";
    $dta[4]["TGL_LAHIR"]="2000-05-10";
    $dta[4]["JKEL"]="P";
    $dta[4]["ALAMAT"]="Badung";
    $dta[4]["UMUR"]="23";
    $dta[4]["NIM"]="1801010360";

    


    header("content-type: application/json; charset=utf-8");  
    echo json_encode ($dta);

