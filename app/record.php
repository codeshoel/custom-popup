<?php

    function sql_fetchAll($conn, $sql){
        $q = $conn->prepare($sql);
        $flag = $q->execute();
        $result = $q->fetchAll();
        $conn=null;
        return $result;
    }
    function sql_fetchOne($conn, $sql){
        $q = $conn->prepare($sql);
        $flag = $q->execute();
        $result = $q->fetch();
        $conn=null;
        return $result;
    }

    function info($auth, $phone_office){
    
        //The name of the module
        $conn = $auth['conn'];
        $sql = "SELECT * from accounts JOIN accounts_cstm ON id=id_c where phone_office = '$phone_office' AND deleted = '0' LIMIT 1 ";
        $result = sql_fetchOne($conn, $sql);
        return $result;
    }

    

    function cases($auth){
        //The name of the module
        $conn = $auth['conn'];
        $sql = "SELECT * from cases JOIN cases_cstm ON id=id_c where deleted = '0' ORDER BY date_entered DESC LIMIT 3";
        $result = sql_fetchAll($conn, $sql);
        return $result;
    }

    function feeds($auth){
    
        //The name of the module
        $conn = $auth['conn'];
        $sql = "SELECT * from alerts where is_read = '0' AND deleted = '0'  ORDER BY date_modified DESC LIMIT 3";
        $result = sql_fetchAll($conn, $sql);
        return $result;
    }


    function contracts($auth, $id){
    
        //The name of the module
        $conn = $auth['conn'];
        $sql = "SELECT * from aos_contracts_cstm where id_c = '".$id."'";
        // echo $sql;
        $result = sql_fetchAll($conn, $sql);

        return $result;
    }
    function case_escalation_dom() {
      $case_type_dom = array (
      'escalated_2nd' => '2nd Level Support',
      'escalated_life' => 'Life Threatening',
      'escalated_airtel' => 'Airtel OEM',
      'escalated_mtn' => 'MTN OEM',
      'escalated_biometric' => 'Biometrics OEM',
    );
    return $case_type_dom;
    }

    function case_category_dom() {
      $case_type_dom = array (
      'VPN' => 'VPN Issue',
      'Laptop' => 'Laptop issue',
      'Generator' => 'Generator issue',
      'Inverter' => 'Inverter issue',
    );
    return $case_type_dom;
    }

    function case_caller_dom() {
      $case_type_dom = array (
      'select' => 'Select Caller Type',
      'Supervisor' => 'Supervisor',
      'Officer' => 'Technical Officer',
      'Operator' => 'BVN Operator',
      'Network' => 'Network Operator',
      'Resident' => 'Resident Monitor',
    );
    return $case_type_dom;
    }

    function case_description_dom() {
      $case_type_dom = array (
      'VPN_connect' => 'Unable to connect to VPN',
      'VPN_login' => 'Unable to login ',
      'Laptop_missing' => 'Incident of missing laptops in the centre',
      'Laptop_incomplete' => 'Incomplete laptops provided in the centre',
      'Generator_shutdown' => 'Unexpected generator shutdown during exam',
      'Generator_stolen' => 'Incident of stolen generator in the centre',
      'Inverter_poor' => 'Poor inverter battery ',
      'Inverter_inv' => 'No inverter provided in the centre',
    );
    return $case_type_dom;
    }

    function case_status_dom() {
      $case_type_dom = array (
      'open' => 'Open',
      'resolved' => 'Resolved',
      'closed' => 'Closed',
      'escalated' => 'Escalated',
    );
    return $case_type_dom;
    }

    