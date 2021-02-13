<html style="margin: 0px; line-height: 1.5; text-align: center;">
	<head>
		<title>Sefa Kuru - Para Üstü</title>
	</head>
	<body style="text-align:center ; background: #e7eff8; border: 2px solid #e66465 ";>
			<table style="margin: 0px; line-height: 1.5; text-align: center;">
		<form action="" method="post">
  	<tr>
    	<td>Alışveriş Tutarı =></td>
    	<td><input name="tuttu" type="text"/></td>
  	</tr>
  	<tr>
    	<td>Ödenen Para =></td>
    	<td><input name="miktar" type="text"/></td>
  	</tr>
  	<tr>
    	<td>&nbsp;</td>
    	<td><input name="gonder" type="submit" value="Para Üstü" /></td>
  	</tr>
			</table>
		</form>

<?php 
if(empty($_POST['tuttu']) && empty($_POST['miktar'])){
$tuttu=0;
$odendi=0;
}else{
$tuttu=$_POST['tuttu'];
$odendi=$_POST['miktar'];

}
echo "********************** <br>"; 
echo "Alışveriş Tutarı => ".$tuttu."<br>";
echo "********************** <br>"; 
echo "Ödenen Tutar => ".$odendi."<br>";
echo "********************** <br>";
$para=$odendi-$tuttu;
echo "Para Üstü => ".$para."<br>";
echo "********************** <br>"; 
function ParaKontrol($para_sonuc){
	$sonuc=0;
	if($para_sonuc<=0){
		$sonuc=0;
	}else{
		$sonuc=$para_sonuc;
		
	}
	return $sonuc;
}
if($para >=0 ){
	
    $para =  $para * 100;
    $tpara = $para;

    $a100 = 0;
    $a50 = 0;
    $a25 = 0;
    $a10 = 0;
    $a5 = 0;
    $a1 = 0;


    //1 Tl adedi
    if ($para >= 100) {
        $a100 = $para / 100;
        $tpara = $para % 100;
        $para = intval($tpara);
    }

    //50 Kuruş adedi
    if ($para >= 50) {
        $a50 = $para / 50;
        $tpara = $para % 50;
        $para = intval($tpara);
    }

    //25 Kuruş Adedi
    if ($para >= 25) {
        $a25 = $para / 25;
        $tpara = $para % 25;
        $para = intval($tpara);
    }

    //10 Kuruş Adedi
    if ($para >= 10) {
        $a10 = $para / 10;
        $tpara = $para % 10;
        $para = intval($tpara);
    }

    //5 Kuruş Adedi
    if ($para >= 5) {
        $a5 = $para / 5;
        $tpara = $para % 5;
        $para = intval($tpara);
    }

    //1 Kuruş Adedi
    if ($para >= 1) {
        $a1 = $para / 1;
        $tpara = $para % 1;
        $para = intval($tpara);
    }
	
	echo "			1 TL	x ".intval($a100)."<br>";
	echo "********************** <br>"; 
	
	echo "			50 Krş x ".intval($a50)."<br>";
	echo "********************** <br>"; 
	
	echo "			25 Krş x ".intval($a25)."<br>";
	echo "********************** <br>"; 
	
	echo "			10 Krş x ".intval($a10)."<br>";
	echo "********************** <br>"; 
	
	echo "			5 Krş x ".intval($a5)."<br>";
	echo "********************** <br>";
	
	echo "			1 Krş x ".intval($a1)."<br>";
	echo "********************** <br>";
}
elseif ($para<0){
	echo "Para yetmedi :D ";
}
?>

</body>
</html>
