<?php

class LogicHookClass {
	function beforeSaveMethod(&$bean, $event, $arguments) 
	{
	
		global $sugar_config; // declare global $sugar_config array
		
		$emailSubject="";
		$emailBody="";
		
		/***Need to change for all department managers**/
		$toAddress="";
		
		$site_url = $sugar_config['site_url']; 
		
		if($bean->fetched_row['sales_stage']=='' && $bean->sales_stage=='1')
		{
			$emailSubject="Purchase Ready For TT";
			
			$emailBody="Mr. Account Manager!\nPurchase ready For TT process!\nHere is the link for the record. ".$site_url.'/index.php?action=index.php&module=c1_purchases&action=DetailView&record='.$bean->id;
		
			/***Need to change for all department managers**/
			$toAddress="zohaibh@ae.chip-1.com";
		}
		/***TT process complete***/
		else if($bean->fetched_row['sales_stage']=='1' && $bean->sales_stage=='2')
		{
			$emailSubject="TT successfully completed";
			
			$emailBody="Mr. Purchase Manager!\nThis Record needs Your Attention !\nTT has been completed successfully.\nTT copy is attached with the record.Please take appropriate action.\nHere is the link for the record. ".$site_url.'/index.php?action=index.php&module=c1_purchases&action=DetailView&record='.$bean->id;
		
			$toAddress="zohaibh@ae.chip-1.com";
		}
		else if($bean->fetched_row['sales_stage']=='2' && $bean->sales_stage=='3')
		{
			$emailSubject="Expecting Shipment";
			
			$emailBody="Mr. Warehouse Manager!\nThis Record needs Your Attention !\nwe are expecting shipment for the purchase.\nHere is the link for the purchase record. ".$site_url.'/index.php?action=index.php&module=c1_purchases&action=DetailView&record='.$bean->id;

			$toAddress="zohaibh@ae.chip-1.com";
		}
		else if($bean->fetched_row['sales_stage']=='3' && $bean->sales_stage=='4')
		{
			$emailSubject="Shipment Received";
			
			$emailBody="Mr. Sales Manager!\nThis Record needs Your Attention !\nwe have received shipment for the purchase.\nHere is the link for the purchase record. ".$site_url.'/index.php?action=index.php&module=c1_purchases&action=DetailView&record='.$bean->id;

			$toAddress="zohaibh@ae.chip-1.com";
		}
		

		
		$this->sendEmailNotification($emailBody,$emailSubject,$toAddress);

	} 
	
	function sendEmailNotification($emailBody,$emailSubject,$toAddress)
	{
		require_once('include/SugarPHPMailer.php'); 
		
		$emailObj = new Email(); 
		$defaults = $emailObj->getSystemDefaultEmail(); 


		$mail = new SugarPHPMailer(); 
		$mail->setMailerForSystem(); 
		$mail->From = $defaults['email']; 
		$mail->FromName = $defaults['name']; 
		$mail->Subject = $emailSubject;
		// $mail->SMTPDebug = 1;
		$mail->Body = $emailBody; 
		$mail->prepForOutbound(); 
		$mail->AddAddress($toAddress); 
		 if (@$mail->Send()) {
			$GLOBALS['log']->fatal('Email sent');
		 }
		 else
		 {
			$GLOBALS['log']->fatal('Email NOT');
		 }
	}
}
?>