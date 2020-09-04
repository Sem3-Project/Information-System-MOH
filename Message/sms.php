<?php
ob_start();

$servername = "localhost:3307"; 
$username = "root";
$password ="123456";
$dbname="moh";
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * FROM optionaldate"; 
$result=mysqli_query($conn,$sql);
echo "<pre>";
echo "NIC           Conf.Date        Chk.Date       Today <br>";
while ($row=mysqli_fetch_array($result)){
	$id=$row['id'];
	$ndate=$row['confirmedDate'];
	echo $id."    ";
	echo $row['confirmedDate']."       ";
	$con_dt=date('Y-m-d', strtotime('-1 day', strtotime($row['confirmedDate'])));
	$dt=date('Y-m-d');
	echo $con_dt."     ";
	echo $dt;
	if ($con_dt==$dt){
		$sq="SELECT * FROM data WHERE id='".$id."'";
		$re=mysqli_query($conn,$sq);
		$ro=$row=mysqli_fetch_array($re);
		$phone=$ro['tele'];
		
		
		echo "    Valid   ".$phone."  ".$phone."  -";
		
		
		$txt=$ndate." -Clinic Date";
		$session=createSession('','esmsusr_15q5','1a576oh','');
		echo sendMessages($session,'UPDCS_Admin',$txt,array($phone),0);
		closeSession($session);

		echo "<br>";
	}else{
		echo "<br>";
	}
}
echo "
<br><br>*** 200 means message sent sucessfully</pre>";




function getClient()
{

    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://smeapps.mobitel.lk:8585/EnterpriseSMSV3/EnterpriseSMSWS?wsdl");

    return $client;

}



function serviceTest($id,$username,$password,$customer)
{

    $client = getClient();

    $user = new stdClass();
    $user->id = '';
    $user->username = $username;
    $user->password = $password;
    $user->customer = '';

    $serviceTest = new stdClass();
    $serviceTest->arg0 = $user;

    return $client->serviceTest($serviceTest);

}


function createSession($id,$username,$password,$customer)
{

    $client = getClient();

    $user = new stdClass();
    $user->id = $id;
    $user->username = $username;
    $user->password = $password;
    $user->customer = $customer;

    $createSession = new stdClass();
    $createSession->user = $user;

    $createSessionResponse = new stdClass();
    $createSessionResponse = $client->createSession($createSession);

    return $createSessionResponse->return;

}


function isSession($session)
{

    $client = getClient();

    $isSession = new stdClass();
    $isSession->session = $session;

    $isSessionResponse = new stdClass();
    $isSessionResponse = $client->isSession($isSession);

    return $isSessionResponse->return;
}


function sendMessages($session,$alias,$message,$recipients,$messageType)
{
    $client=getClient();

    $smsMessage= new stdClass();
    $smsMessage->message=$message;
    $smsMessage->messageId="";
    $smsMessage->recipients=$recipients;
    $smsMessage->retries="";
    $smsMessage->sender=$alias;
    $smsMessage->messageType=$messageType;
    $smsMessage->sequenceNum="";
    $smsMessage->status="";
    $smsMessage->time="";
    $smsMessage->type="";
    $smsMessage->user="";

    $sendMessages = new stdClass();
    $sendMessages->session = $session;
    $sendMessages->smsMessage = $smsMessage;

    $sendMessagesResponse = new stdClass();
    $sendMessagesResponse = $client->sendMessages($sendMessages);

    return $sendMessagesResponse->return;
}


function sendMessagesMultiLang($session,$alias,$message,$recipients,$messageType)
{
    $client=getClient();

    $smsMessageMultiLang = new stdClass();
    $smsMessageMultiLang->message=$message;
    $smsMessageMultiLang->messageId="";
    $smsMessageMultiLang->recipients=$recipients;
    $smsMessageMultiLang->retries="";
    $smsMessageMultiLang->sender=$alias;
    $smsMessageMultiLang->messageType=$messageType;
    $smsMessageMultiLang->sequenceNum="";
    $smsMessageMultiLang->status="";
    $smsMessageMultiLang->time="";
    $smsMessageMultiLang->type="";
    $smsMessageMultiLang->user="";

    $sendMessagesMultiLang = new stdClass();
    $sendMessagesMultiLang->session = $session;
    $sendMessagesMultiLang->smsMessageMultiLang = $smsMessageMultiLang;

    $sendMessagesMultiLangResponse = new stdClass();
    $sendMessagesMultiLangResponse = $client->sendMessagesMultiLang($sendMessagesMultiLang);

    return $sendMessagesMultiLangResponse->return;
}


function sendCampaignMessages($session,$alias,$message,$recipients,$datetime,$multilanguage,$messageType)
{
    $client=getClient();

    $smsCampaignMessage = new stdClass();
    $smsCampaignMessage->message = $message;
    $smsCampaignMessage->messageId = "";
    $smsCampaignMessage->recipients = $recipients;
    $smsCampaignMessage->retries = "";
    $smsCampaignMessage->sender = $alias;
    $smsCampaignMessage->messageType=$messageType;
    $smsCampaignMessage->sequenceNum = "";
    $smsCampaignMessage->status = "";
    $smsCampaignMessage->time = $datetime;
    $smsCampaignMessage->type = "";
    $smsCampaignMessage->user = "";
    $smsCampaignMessage->esmClass = $multilanguage;

    $sendCampaignMessages=new stdClass();
    $sendCampaignMessages->session=$session;
    $sendCampaignMessages->smsCampaignMessage=$smsCampaignMessage;


    $sendCampaignMessagesResponse = new stdClass();
    $sendCampaignMessagesResponse = $client->sendCampaignMessages($sendCampaignMessages);

    return $sendCampaignMessagesResponse->return;
}


function renewSession($session)
{

    $client = getClient();

    $renewSession = new stdClass();
    $renewSession->session = $session;

    $renewSessionResponse = new stdClass();
    $renewSessionResponse = $client->renewSession($renewSession);

    return $renewSessionResponse->return;

}



function closeSession($session)
{

    $client = getClient();

    $closeSession = new stdClass();
    $closeSession->session = $session;

    $client->closeSession($closeSession);

}


function getMessagesFromShortCode($session,$shortCode)
{

    $client = getClient();

    $getMessagesFromShortCode = new stdClass();
    $getMessagesFromShortCode->session = $session;
    $getMessagesFromShortCode->shortcode = $shortCode;

    $getMessagesFromShortcodeResponse = new stdClass();
    $getMessagesFromShortcodeResponse->return = "";
    $getMessagesFromShortcodeResponse = $client->getMessagesFromShortcode($getMessagesFromShortCode);

    if(property_exists($getMessagesFromShortcodeResponse,'return'))
        return $getMessagesFromShortcodeResponse->return;

    else return NULL;

}


function getDeliveryReports($session,$alias)
{

    $client = getClient();

    $getDeliveryReports = new stdClass();
    $getDeliveryReports->session = $session;
    $getDeliveryReports->alias = $alias;

    $getDeliveryReportsResponse = new stdClass();
    $getDeliveryReportsResponse->return = "";
    $getDeliveryReportsResponse = $client->getDeliveryReports($getDeliveryReports);

    if(property_exists($getDeliveryReportsResponse,'return'))
        return $getDeliveryReportsResponse->return;

    else return NULL;

}


function getMessagesFromLongNumber($session,$longNumber)
{

    $client = getClient();

    $getMessagesFromLongNumber = new stdClass();
    $getMessagesFromLongNumber->session = $session;
    $getMessagesFromLongNumber->longNumber=$longNumber;

    $getMessagesFromLongNumberResponse = new stdClass();
    $getmessagesFromLongNumberResponse->return = "";
    $getMessagesFromLongNumberResponse = $client->getMessagesFromLongNumber($getMessagesFromLongNumber);

    if(property_exists($getMessagesFromLongNumberResponse,'return'))
        return $getMessagesFromLongNumberResponse->return;

    else return NULL;

}



?>
