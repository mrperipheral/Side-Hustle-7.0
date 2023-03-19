<?php
    
    $age=20;
    $pvc="yes";
    $ward="020";

    switch($age && $pvc && $ward){
        case $age<=18;
            echo "Voter is Underage";
        break;
        case $pvc !="yes";
            echo "Voter does not have PVC";
        break;
        case $ward !="020";
            echo "Voter's Ward Number is not correct";
        break;
        default:
            echo "Voter is Eligible to Vote";
    }

    //USING IF_ELSEIF_ELSE STATEMENT
    
     // if($age>18 && $pvc=="yes" && $ward=="020"){
    //     echo "Voter Eligible to Vote";
    // }elseif($age<=18){
    //     echo "Voter Age does Not qualify Him to Vote";
    // }elseif($pvc!="yes"){
    //     echo "Voter does not have a PVC";
    // }elseif($ward !="020"){
    //     echo "Voter's Ward Number is not correct.";
    // }
    // else{
    //     echo "Please provide right information";
    // }

?>