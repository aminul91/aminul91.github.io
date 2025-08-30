<?php
require_once("config.php");
require_once("phpmailer/PHPMailer.php");
#require_once("mail/htmlMimeMail.php");
#$mailToSend = new htmlMimeMail(); 


//foreach ($_POST as $field=>$value) 
//{
//    $post_string["$field"] = $value;
//    $message .= "<tr><td>$field: $value </td></tr>";
//}
//$message = '<table>'.$message.'</table>';
//
//
//
//$subject = 'success message subject';   
//$message = $message; 
//$to = 'kamrulzuiu@gmail.com';
//mail($to, $subject, $message, HEADER); 
//exit;


//$_POST['payment_status'] = 'Pending';
//$_POST['item_number'] = 5;
//$_POST['txn_id'] = '1348se4';


//$_POST['item_number'] = 9;
//$_POST['txn_id'] = 12121212;
//$_POST['payment_status'] = 'Pending';



if($_POST['payment_status'] == 'Pending' || $_POST['payment_status'] == 'Completed')
{
    $payment_id = $_POST['item_number'];
    $sql = "SELECT p.payment_id,
                   p.transaction_id,
                   p.status,
                   p.created_on,
                   p.member_id,
                   p.credit as payment_credit,
                   m.user_type,
                   m.username,
                   m.credit,
                   m.email,
                   m.contact_person_email                                      
            FROM parts_payment p 
            INNER JOIN parts_member m ON m.member_id = p.member_id
            WHERE p.payment_id = $payment_id 
            LIMIT 1";  
    $row = row_array($sql);  
    
    
    if($row['status'] != 1)
    {
        $data['status'] = 1;
        $data['transaction_id'] = $_POST['txn_id']; 
        update('parts_payment',$data,'payment_id',$payment_id);
        unset($data);
        
        
        $data['credit'] = $row['payment_credit']+$row['credit'];
        update('parts_member',$data,'member_id',$row['member_id']);

        #confirmation_mail($row,$mailBody,$stdInfo,$sesMInfo);
        #notification_mail($row,$mailBody,$stdInfo,$sesMInfo);
    }
}

function confirmation_mail($row,$mailBody,$stdInfo,$sesMInfo)
{
    $mailBody = str_replace('<##MEMBER##>',$stdInfo['username'],$mailBody);  
    $mailBody = str_replace('<##SESSION_TIME##>',$sesMInfo['session_date'].' '.$sesMInfo['session_time'],$mailBody);  
    $mailBody = str_replace('<##PROFESSOR_NAME##>',$sesMInfo['username'],$mailBody);  
    $mailBody = str_replace('<##APPLIED_STUDENT_ID##>',$row['applied_student_id'],$mailBody);  
    $mailBody = str_replace('<##LOCATION##>',$sesMInfo['location'],$mailBody);  
    $mailBody = str_replace('<##SITENAME##>',PROJECT_NAME,$mailBody); 
    
    $subject = 'Session Booking Confirmation';
    $mail = new PHPMailer();
    $mail->SetFrom('info@cramseat.com', 'cramseat.com');
    $mail->AddReplyTo("info@cramseat.com", "cramseat.com");
    $mail->Subject = $subject;

    $body = $mailBody;
    $address = $stdInfo['email'];
    $mail->AddAddress($address, $stdInfo['username']);
    $mail->MsgHTML($body);
    $mail->Send();
    $mail->ClearAllRecipients();
}

function notification_mail($row,$mailBody,$stdInfo,$sesMInfo)
{
    $mailBody = str_replace('<##MEMBER##>',$sesMInfo['username'],$mailBody); 
    $mailBody = str_replace('<##STUDENT##>',$stdInfo['username'],$mailBody); 
    $mailBody = str_replace('<##REQUEST_DATE##>',$row['request_date'],$mailBody); 
    $mailBody = str_replace('<##SESSION_TIME##>',$sesMInfo['session_date'].' '.$sesMInfo['session_time'],$mailBody);  
    $mailBody = str_replace('<##PROFESSOR_NAME##>',$sesMInfo['username'],$mailBody);  
    $mailBody = str_replace('<##APPLIED_STUDENT_ID##>',$row['applied_student_id'],$mailBody);  
    $mailBody = str_replace('<##LOCATION##>',$sesMInfo['location'],$mailBody);  
    $mailBody = str_replace('<##SITENAME##>',PROJECT_NAME,$mailBody); 
    
    $subject = 'Session Booking Notification';
    $mail = new PHPMailer();
    $mail->SetFrom('info@cramseat.com', 'cramseat.com');
    $mail->AddReplyTo("info@cramseat.com", "cramseat.com");
    $mail->Subject = $subject;

    $body = $mailBody;
    $address = $sesMInfo['email'];
    $mail->AddAddress($address, $sesMInfo['username']);
    $mail->MsgHTML($body);
    $mail->Send();
    $mail->ClearAllRecipients();
}

/*
$from = "kamrul_uiu@yahoo.com"; 
$subject = 'success message subject';   
$message = $message; 
$to = 'kamrulzuiu@gmail.com';
$mailToSend->setSubject($subject);
$mailToSend->setFrom($from);
$mailToSend->setHtml($message);
$mailToSend->send(array($to)); 
*/
?>