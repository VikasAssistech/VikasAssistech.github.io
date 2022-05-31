<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
	
<body>
	<?php 

	$urldata = $_SERVER['QUERY_STRING'];
	parse_str($urldata, $output);
	echo "<br />";

			echo $_SERVER['QUERY_STRING'] ;
			echo "<br />";
			echo "Hello";
			echo nl2br("\r\n");
			//echo $urldata;	
			//echo "<br />";

	//		echo $output['Name'];
	//		echo $output['Age'];
			$arr1 = [];
//			$a1 = '0K356g7xwMq1FTe6PeCVg2Umm35X/rfDXbpaN6u2xVVChvsDcNpyx5/b7JRLe0MDf57TPq9JD+FpKYCAsKVxE4J1+hZP9XddJUi/EnmeL3pAmkjxbiKziAjCkINrhT8BZPzBeEinBsQ5D0hWf/ocHA==';
//			$a1='YfwQvxKiwsBXpp5cHF7il4PkhQOTZys1p0fWuVFHeY9AGmlljtcYoPoFPi/4e1M+KRo/EtFwuxL9OomfbbaAvE/XMWTO6C4e9RG81/C6LbBDcNMgIp5RtQBkqqcy1T/5FVcG6IArzuEUJrVaXbncxw==';
//			$a1 ='nullBsBxl0gT1JvyfHoHoWGLkLePkKH3Ma/z5FgEXpIucqYe8iBQqa7 qrJCWyq80pfqEQdSrU4WD7yIzc3I qk81A3E/ZkcUN3uNZJ9k7Y lNI=='
			$a1 ='OecXDEqesMmUOTA/ wVSPexywyoYDs4aasrMT PM7x/Lhto35K6qnSvTPejI7857mbGnswoYAbtvHYqhdN 7zuVCvAWxAG/5reFq9QGMjvFql87RCgc0guh/DQAhbdIT'
			$decrypt = exec("java -cp lib/decrypt.jar;. QR_DecryptValue $a1");
			echo $decrypt;
	?>
	
	</body>
</html>