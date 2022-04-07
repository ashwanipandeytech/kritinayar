<?php



function my_mail_from($email)
{
    return ($_REQUEST['replyemail'] == 'true') ? get_option('Email_noreply_text') : $_REQUEST['from'];
}
function wpse_224496_phpmailer_init($phpmailer)
{
    // SMTP setup

    //  echo($_REQUEST['replyemail']);
   // $phpmailer->isSMTP();
  // $phpmailer=  new PHPMailer();
    $phpmailer->Host = 'smtp.hostinger.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'admin@urbancfo.in';
    $phpmailer->Password = 'adminurbanCFO123!@#';  
   
    $phpmailer->SMTPDebug = 0;
    $phpmailer->IsHTML(true);
	
}
function wpse_224496_wp_mail($mail)
{
	
    add_action('phpmailer_init', 'wpse_224496_phpmailer_init');

    return $mail;
}



function send_email()
{

	

	$copyrighttext = '© 2022 urbanCFO.in '; 


    $name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];

    $from = $_REQUEST['from'];

    $subject = 'Contact form submission'; //$_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" .$from . "<" .$from . ">" . "\r\n";

    $headers .= "Reply-To:" . "<" .$from . ">" . "\r\n";
    $headers .= "Return-Path:" . "<" .$from . ">" . "\r\n";

    $to = 'info.urbancfo@gmail.com'; 

    $emailheaderlogo='https://urbancfo.in/wp-content/themes/urbanCFO/images/ub.png';//get_option('Email_header_logo');
    $emailfooterlogo='https://urbancfo.in/wp-content/themes/urbanCFO/images/ub.png';//get_option('Email_footer_logo');
   
    

    $message = '<html><head><style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese");
body * {
    font-family: "Open Sans", sans-serif !important;
    font-weight: 300 !important;
}
</style></head><body><table align="center" border="0" cellpadding="0" cellspacing="0" width="600"  style="font-family: "Open Sans", sans-serif !important;font-weight:300 !important;margin:auto!important;;table-layout:fixed;">
    <tbody>
        <tr>
            <td align="left" width="600" style="font-family: "Open Sans", sans-serif !important;table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;width:600px;color:#555555;">
                <table width="600px" bgcolor="#15487a" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;background:#15487a;padding: 10px 0px;">
                    <tr>
                        <td width="" align="center" style="table-layout: fixed;padding-left:5px;padding-right:5px;">
                            <img src="'.$emailheaderlogo.'" alt="" title="" style="width:352px">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr><td align="center" bgcolor="#ffffff" bg_type="backgroundColor" width="600px" style="font-family: "Open Sans", sans-serif !important;border: 0px; border-collapse: collapse; background-size: cover;table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;padding: 30px;width:600px;color:#555555;">
                <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                    <tr>
                        <td width="100%" align="left" style="font-family: "Open Sans", sans-serif !important;padding:20px;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">
                            <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                <tr>

                                    <td width="100%" align="left" style="font-family: "Open Sans", sans-serif !important;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;"><table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                            <tbody><tr>
                                                <td width="100%" align="left" style="padding:20px;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">
                                                    <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                                        <tbody><tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= '<strong>Name: </strong>' .$_REQUEST['name'];
    $message .= '</td>
                                                        </tr>

                                                        <tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= '<strong>Contact No: </strong>' . $_REQUEST['phone'];
    $message .= '</td>
                                                        </tr>

                                                        <tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= '<strong>Email: </strong>' . $_REQUEST['from'];
    $message .= '</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= '<strong>Appointment Date: </strong>' . $_REQUEST['consultDate'];
    $message .= '</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;padding: 10px 0px;">';
    $message .= '<strong>Message: </strong><span style="font-size:16px;font-style: italic;">' . $_REQUEST['message'].'</span>';
    $message .= '</td>
                                                        </tr>
                                                    </tbody></table>


                                                </td>
                                            </tr>
                                        </tbody></table>

                                           </td>
                                </tr>

                            </table>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center"  width="600px" style="table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;width:600px;color:#ffffff;">
                <table width="100%" bgcolor="#15487a" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#ffffff;table-layout:fixed;padding: 10px 0px;background:#15487a">
                    <tr>
                        <td width="240px" align="center" style="font-size:14px;color:#ffffff;width:40%;table-layout: fixed;padding-left:5px;padding-right:5px;">';

    $message .= '<img src="'.$emailfooterlogo.'" width="150px">';
    $message .= '<div  style="margin-top: 14px;">' . $copyrighttext . '</div></td></tr></table>';
    $message .= '<table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#ffffff;table-layout:fixed;padding: 10px 0px;background:#121212;"><tr>';

    $message .= ' </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table></body></html>';

//echo var_dump(wp_mail($to, $subject, $message, $headers)); exit;
    if (wp_mail($to, $subject, $message, $headers)) {
        echo json_encode(array("result" => "complete"));
    } else {
        echo json_encode(array("result" => "mail_error"));
        var_dump($phpmailer->ErrorInfo);
    }

    wp_die();
    // }
}


function send_replythanks_email()
{

	$emailheaderlogo='https://urbancfo.in/wp-content/themes/urbanCFO/images/ub.png';//get_option('Email_header_logo');
$emailfooterlogo='https://urbancfo.in/wp-content/themes/urbanCFO/images/ub.png';//get_option('Email_footer_logo');
	$phpmailer->From = 'info.urbancfo@gmail.com';
    $phpmailer->FromName = 'info.urbancfo@gmail.com'; 
  
   
  
	$copyrighttext = '© 2022 urbanCFO.in';

    $name = 'urbanCFO.in';
    $from = 'info.urbancfo@gmail.com';
    $subject = ' Thank you for your enquiry'; 
   
 
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $name ."<".$from.">" . "\r\n";
    $headers .= "Reply-To:" ."<".$from.">" . "\r\n";
    $headers .= "Return-Path:" ."<".$from.">" . "\r\n";
    $to = $_REQUEST['from']; 
    $message = '<html><head><style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese");
body * {
    font-family: "Open Sans", sans-serif !important;
    font-weight: 300 !important;
}
</style></head><body><table align="center" border="0" cellpadding="0" cellspacing="0" width="600"  style="font-family: "Open Sans", sans-serif !important;font-weight:300 !important;margin:auto!important;;table-layout:fixed;">
    <tbody>
        <tr>
		<td align="left" width="600" style="font-family: "Open Sans", sans-serif !important;table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;width:600px;color:#555555;">
		<table width="600px" bgcolor="#15487a" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;background:#15487a;padding: 10px 0px;">
                    <tr>
					<td width="" align="center" style="table-layout: fixed;padding-left:5px;padding-right:5px;">
					<img src="'.$emailheaderlogo.'" alt="" title="" style="width:352px">
				</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr><td align="center" bgcolor="#ffffff" bg_type="backgroundColor" width="600px" style="font-family: "Open Sans", sans-serif !important; border: 0px; border-collapse: collapse; background-size: cover;table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;padding: 30px;width:600px;color:#555555;">
                <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                    <tr>
                        <td width="100%" align="left" style="font-family: "Open Sans", sans-serif !important;padding:20px;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">
                            <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                <tr>

                                    <td width="100%" align="left" style="font-family: "Open Sans", sans-serif !important;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;"><table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                            <tbody><tr>
                                                <td width="100%" align="left" style="padding:20px;table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">
                                                    <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#555555;table-layout:fixed;text-align: left;">
                                                        <tbody><tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= 'Dear ' . $_REQUEST['name'] . ',';
    $message .= '</td><td width="100%" height="45px" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" align="left" colspan="2" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= 'Thank you for reaching out to us.<br/>We have received your enquiry ,we will contact you soon.';
    $message .= '</td>
                                                        </tr>

                                                        <tr>
                                                            <td width="100%" height="15px" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 4.4;text-align: left;">';

    $message .= '</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" align="left" style="table-layout: fixed;font-size: 16px; color: #555555; line-height: 1.4;text-align: left;">';
    $message .= 'Best regards,<br/>';
    $message .= 'urbanCFO.in';
    $message .= '</td>
                                                        </tr>
                                                    </tbody></table>


                                                </td>
                                            </tr>
                                        </tbody></table>

                                           </td>
                                </tr>

                            </table>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center"  width="600px" style="table-layout:fixed;font-size:14px;font-family: "Open Sans", sans-serif;width:600px;color:#ffffff;">
                <table width="100%" bgcolor="#15487a;" align="center" border="0" cellpadding="0" cellspacing="0" style="color:#ffffff;table-layout:fixed;padding: 10px 0px;background:#15487a;">
                    <tr>
                        <td width="240px" align="center" style="font-size:14px;color:#ffffff;width:40%;table-layout: fixed;padding-left:5px;padding-right:5px;">';

    $message .= '<img src="'.$emailfooterlogo.'" width="150px">';
    $message .= '<div style="margin-top: 14px;">' . $copyrighttext . '</div></td></tr></table>';
    $message .= '</td></tr>
    </tbody>
</table></body></html>';
//echo $message; exit;
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(array("result" => "complete"));
    } else {
		echo var_dump($phpmailer->ErrorInfo);
        echo json_encode(array("result" => "mail_error"));
      
    }

    wp_die();
    // }
}


add_filter('wp_mail', 'wpse_224496_wp_mail');
add_filter('wp_mail_from', 'my_mail_from');



add_action('wp_ajax_nopriv_send_email', 'send_email');
add_action('wp_ajax_send_email', 'send_email');

add_action('wp_ajax_nopriv_send_replythanks_email', 'send_replythanks_email');
add_action('wp_ajax_send_replythanks_email', 'send_replythanks_email');
add_action('wp_ajax_folder_contents', 'folder_contents');