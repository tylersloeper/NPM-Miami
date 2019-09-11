<?php
$link = $_POST['link'];
$names = $_POST['names'];
$exmail = $_POST['exmail'];
$pieceslink = explode(",", $link);
$piecesnames = explode(",", $names);
$tab = '<table><tr>
			<td>מייל הלקוח</td>
			<td>'.$exmail.'</td>
			</tr>
			<tr>
			<td>שם מוצר</td>
			<td>קישור</td>
			</tr>';
for($i=0; $i<count($pieceslink); $i++){
	$tab .= "<tr>
			<td>".$piecesnames[$i]."</td>
			<td>".$pieceslink[$i]."</td>
			</tr>";
}
$tab .= '</table>';
$to      = 'shayshayshayshay672@gmail.com'; 
$subject = 'the subject2';
$message = $tab;
$headers = "From: webmaster@goil.co.il\r\n";
$headers .= "Reply-To: webmaster@goil.co.il\r\n";
$headers .= "CC: webmaster@goil.co.il\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


mail($to, $subject, $message, $headers);

?>