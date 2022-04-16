<?php
	function checkLogin(){
		if($_SESSION['loggedin'] != true){
			unset($_SESSION);
			session_destroy();
			header("location:login.html");
		}
	}
    function scramble($number) {//http://stackoverflow.com/questions/18356324/how-to-generate-card-number-so-the-users-cannot-follow-how-much-is-sold
		return (305914000*($number-10)+1516478) % 196983;
	}
	function unscramble($number) {//http://stackoverflow.com/questions/18356324/how-to-generate-card-number-so-the-users-cannot-follow-how-much-is-sold
		return (605673000*($number-1516478)+10) % 196983 ;
	}
	function generateOrder($event, $role){
		$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$orderid = date("y");
		$orderid .= $event*rand(0,9);
		$orderid .= $alphabets[rand(0,23)];
		$orderid .= scramble($role*rand(0,9));
		$orderid .= scramble($event)*rand(0,9);
		$orderid = str_replace("-", "",$orderid);
		$orderid = substr($orderid, 0, strlen($orderid)-2).date("YMDHms");
		$orderid = substr($orderid, 0, 16);
		
		return $orderid;
	}
	function generateAIFCFID($phone, $email, $event){
		$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$aifcfid = "AIFCF".date("y");
		$aifcfid .= $event*rand(0,9);
		$aifcfid .= $alphabets[rand(0,23)];
		$aifcfid .= scramble($phone*rand(0,9));
		$aifcfid .= scramble($event)*rand(0,9);
		$aifcfid = str_replace("-", "",$aifcfid);
		$aifcfid = substr($aifcfid, 0, strlen($aifcfid)-2).date("YMDHms");
		$aifcfid = substr($aifcfid, 0, 16);
		
		return $aifcfid;
	}
	function generateAlpha(){
		$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$eventalphabet = "";
		$eventalphabet .= $alphabets[rand(0,27)];
		
		return $eventalphabet;
	}
	function generateseat(){
		//$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$eventseat = "";
		$eventseat = rand(1,500);
		
		return $eventseat;
	}
	function generaterow(){
		//$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$eventrow = "";
		$eventrow = rand(1,570);
		
		return $eventrow;
	}
	
	
?>