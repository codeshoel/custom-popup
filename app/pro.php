<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("errors.php");


include_once('dbConn.php');
include("auth.php");

// echo var_dump($auth);
// die;

$post   =  new ArrayObject($_POST,ArrayObject::ARRAY_AS_PROPS);
// var_dump($post);
// exit;
$session_id = $auth['session_id'];
// $url = $auth['instance_url'];
// $conn = $auth["conn"];

// echo "<pre>";
// print_r($auth);
// echo "</pre>";
// die();

if(isset($post->create_electorate)) {
  // var_dump($post);
  // exit;
// $set_entry_parameters = array(
//     //session id
//   // "session" => $session_id,

//     //The name of the module
//   "module_name" => "Cases",

//          //Record attributes
//   "name_value_list" => array(
//     array("name" => "categories_c", "value" => $post->category),
//     array("name" => "casestatus_c", "value" => $post->case_status),
//     array("name" => "escalated_c", "value" => $post->escalated_to),
//     array("name" => "description", "value" =>  $post->description),
//     array("name" => "resolution", "value" =>  $post->resolution),
//     array("name" => "center_number_c", "value" =>  $post->center_number_c),
//     array("name" => "account_name", "value" =>  $post->account_name),
//     array("name" => "account_id", "value" =>  $post->account_id),
//     ),
//   );

// <<<<<<< HEAD
//     $set_entry_result_c = call("set_entry", $set_entry_parameters, $url); 
    
// =======
  // echo "<pre>";
  // print_r($set_entry_parameters);
  // echo "</pre>";
  // die();

  $uuid = md5(rand(10000, 999999));
  // $name = $post->category;
  // // $modified_user_id = $session_id;
  // $account_id = $post->account_id;
  // $casestatus_c = $post->case_status;


  $accounts_cstm_data = [
    "uuid" => $uuid,
    // "name" => $post->name,
    "state_c" => $post->state_c,
    "ward_c" => $post->ward_c,
    "lga_c" => $post->lga_c,
    // "phone_office" => $post->phone_office,
    // "pollingunit_c" => $post->pollingunit_c,
    "supervisor_c" => $post->supervisor_c,
    "incidence_c" => $post->incidence_c,
    "election_c" => $post->election_c,
    "subcategory1_c" => $post->subcategory1_c,
    "action1_c" => $post->action1_c,
    "category1_c" => $post->category1_c,
    "response1_c" => $post->response1_c,
    "description2_c" => $post->description2_c,
  ];

  // echo var_dump($data);
  // die;
  // echo var_dump($data);
  // die;

  $accounts_data = [
    "uuid" => $uuid,
    "name" => $post->name,
    "phone_office" => $post->phone_office,
    // "assigned_user_id" => $session_id,
  ];
  
  // echo "<pre>"; 
  // print_r($data1);
  // echo "</pre>";
  // die();
try{

  $sql_acct = "INSERT INTO `accounts` 
  (
    `id`, 
    `name`, 
    `phone_office`
    ) VALUES (
      :uuid, 
      :name, 
      :phone_office
      )";
    
  $sql_acct_cstm = "INSERT INTO `accounts_cstm` 
  (
    `id_c`, 
    `state_c`,
    `ward_c`,
    `lga_c`, 
    `supervisor_c`, 
    `incidence_c`, 
    `action1_c`, 
    `election_c`, 
    `category1_c`, 
    `subcategory1_c`, 
    `description2_c`, 
    `response1_c`
    ) VALUES (
    :uuid, 
    :state_c,
    :ward_c, 
    :lga_c, 
    :supervisor_c, 
    :incidence_c, 
    :action1_c, 
    :election_c, 
    :category1_c, 
    :subcategory1_c, 
    :description2_c, 
    :response1_c
    )";
    // $sql = "INSERT INTO cases SET id=:uuid, name=:name, description=:description, resolution=:resolution, account_id=:account_id, date_entered=:date_entered, date_modified=:date_modified, status=:status";// VALUES (:uuid, :name, :description, :resolution, :account_id, :date_entered, :date_modified, :status)";
  
  $q = $conn->prepare($sql_acct)->execute($accounts_data);
  $q1 = $conn->prepare($sql_acct_cstm)->execute($accounts_cstm_data);

  if($q | $q1){
    header("Location: ../index.php?id=".$uuid);
  }else{
    echo var_dump($q1);
  }

}catch(\Exception $e){
  echo var_dump($e);
}

    // $set_entry_result_c = call("set_entry", $set_entry_parameters, $url);
// >>>>>>> 5c85bdb16fd3fce762efb2aa7691255603d64203
    // header("Location: ../index.php?id=".$uuid);  
}


?>