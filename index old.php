<?php
$html=file_get_contents('http://www.mustseeindia.com/distances?from=surat&to=porbandar');

//For Distance
	//$html=file_get_contents('http://www.mustseeindia.com/distances?from=surat&to=porbandar');
/*	$html=file_get_contents('G:\BE College\8th Semester\Project\chatbot\testFile.txt');
	$temp=stripos($html,'div id="top"',0);
	$cutted=substr($html,$temp,strlen($html));
	$cont=strpos($cutted,'</div>',0);
	$cutted=substr($cutted,0,$cont);
	echo $temp."</P>".$cont."</p>".$cutted;
*/
//For dictionary
	// here talent is a word that;s meaning is required
	//$html=file_get_contents('http://dictionary.reference.com/browse/talent');
	//$html=file_get_contents('http://dictionary.reference.com/browse/talent?s=t');
	//$html=file_get_contents('http://dictionary.cambridge.org/dictionary/british/talent_1?q=talent');
	//$html=file_get_contents('http://oxforddictionaries.com/definition/english/talent?q=talent');


//$html=file_get_contents('');

 //header('Location: http://www.ankur.pro');

//Writing content of html page in to XML file

	$myFile = "testFile.xml";
	$fh = fopen($myFile, 'w') or die("can't open file");
	//$stringData = "Bobby Bopper\n";
	fwrite($fh, $html);
	$stringData = "Tracy Tanner\n";
	fclose($fh);
	echo "File created successfully....";

?>