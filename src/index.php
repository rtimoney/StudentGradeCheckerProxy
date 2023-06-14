<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

//if (($_SERVER['REQUEST_METHOD']==='GET') && isset(($_GET['input_text']))) {

//$requrl= "http://localhost:120?input_text=module,400";
//$requrl= "http://localhost:120";

//$requrl = urlencode($requrl);



$service_requested = $_REQUEST['service'];




//http://classification.40103299.qpc.hal.davecutting.uk/

$totalURL = "http://totalfivek.40103299.qpc.hal.davecutting.uk/";
$maxminURL = "http://maxmin-40103299.40103299.qpc.hal.davecutting.uk/";
$sortedModulesURL = "http://sort.40103299.qpc.hal.davecutting.uk/";
$classificationURL = 'http://classification.40103299.qpc.hal.davecutting.uk/';
//$classificationURL = 'http://localhost:120/';

$input_text = $_REQUEST['input_text'];
$input_text = urlencode($input_text);



if($service_requested == 'classify'){
	$requrl = $classificationURL.'?input_text='.$input_text;
try {
    $ch = curl_init();

    // Check if initialization had gone wrong*    
    if ($ch === false) {
        throw new Exception('failed to initialize');
    }

	curl_setopt($ch, CURLOPT_URL, $requrl);	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // additional options go here 
	// curl_setopt(/* ... */);
    
	
	// execute GET request
    $content = curl_exec($ch);
	
	
	//echo var_dump($content);
	echo $content;

    if ($content === false) {
        throw new Exception(curl_error($ch), curl_errno($ch));
    }

    $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

} catch(Exception $e) {

    trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

} finally {
    // Close curl unless it failed to initialize
    if (is_resource($ch)) {
        curl_close($ch);
    }
}

}
if($service_requested == 'maxmin'){
	$requrl = $maxminURL.'?input_text='.$input_text;
try {
    $ch = curl_init();

    // Check if initialization had gone wrong*    
    if ($ch === false) {
        throw new Exception('failed to initialize');
    }

	curl_setopt($ch, CURLOPT_URL, $requrl);	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // additional options go here 
	// curl_setopt(/* ... */);
    
	
	// execute GET request
    $content = curl_exec($ch);
	
	
	//echo var_dump($content);
	echo $content;

    if ($content === false) {
        throw new Exception(curl_error($ch), curl_errno($ch));
    }

    $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

} catch(Exception $e) {

    trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

} finally {
    // Close curl unless it failed to initialize
    if (is_resource($ch)) {
        curl_close($ch);
    }
}

}

if($service_requested == 'total'){
	$requrl = $totalURL.'?input_text='.$input_text;
try {
    $ch = curl_init();

    // Check if initialization had gone wrong*    
    if ($ch === false) {
        throw new Exception('failed to initialize');
    }

	curl_setopt($ch, CURLOPT_URL, $requrl);	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // additional options go here 
	// curl_setopt(/* ... */);
    
	
	// execute GET request
    $content = curl_exec($ch);
	
	
	//echo var_dump($content);
	echo $content;

    if ($content === false) {
        throw new Exception(curl_error($ch), curl_errno($ch));
    }

    $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

} catch(Exception $e) {

    trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

} finally {
    // Close curl unless it failed to initialize
    if (is_resource($ch)) {
        curl_close($ch);
    }
}

}
if($service_requested == 'sort'){
	$requrl = $sortedModulesURL.'?input_text='.$input_text;
try {
    $ch = curl_init();

    // Check if initialization had gone wrong*    
    if ($ch === false) {
        throw new Exception('failed to initialize');
    }

	curl_setopt($ch, CURLOPT_URL, $requrl);	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // additional options go here 
	// curl_setopt(/* ... */);
    
	
	// execute GET request
    $content = curl_exec($ch);
	
	
	//echo var_dump($content);
	echo $content;

    if ($content === false) {
        throw new Exception(curl_error($ch), curl_errno($ch));
    }

    $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

} catch(Exception $e) {

    trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

} finally {
    // Close curl unless it failed to initialize
    if (is_resource($ch)) {
        curl_close($ch);
    }
}

}


?>