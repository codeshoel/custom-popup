<?php
require('./dropdown_option.php');
require('./ward.php');

$lgas_all = $GLOBALS['app_list_strings']['lga_list'];
$state = $GLOBALS['app_list_strings']['state_list'];

function getLGA($lgas_all){

    if(isset($_GET['state_id'])){
        $state=substr($_GET['state_id'], 0, 2);
        $state=strtolower($state);

        $lgas=array_filter($lgas_all, function($lga) use ($state){
            return substr($lga, 0, 2) == $state;
        }, ARRAY_FILTER_USE_KEY);
        
        echo json_encode($lgas);
    }

}
if(isset($_GET['state_id'])) getLGA($lgas_all);
if(isset($_GET['lga_id'])) getWards();

// $polling_units_all = $GLOBALS['app_list_strings']['polling_unit_list'];
// $lgas_all = $GLOBALS['app_list_strings']['lga_list'];


function getWards(){
    echo "Ward";
    $wards_all = $GLOBALS['app_list_strings']['wards_list'];
    if(isset($_GET['lga_id'])){
        $lga=$_GET['lga_id'];
        $wards=array_filter($wards_all, function($ward) use ($lga){
           return substr($ward, 0, (count($lga)-1)) == $lga;
        }, ARRAY_FILTER_USE_KEY);

        echo json_encode($wards);
    }else{
        echo "Hello Baddy";
    }
}






