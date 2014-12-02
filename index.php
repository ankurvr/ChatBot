<?php

//For Distance Service
/*
	$html=file_get_contents('http://m.mustseeindia.com/distances?from='.$_GET["from"].'&to='.$_GET["to"]);
	$fstr=strchr($html,ucfirst($_GET["from"]));
	$lpos=strpos($fstr,")",0);
	$subs=substr($fstr,0,$lpos+1);
	t$subs=str_replace("<b>","",$subs);
	$subs=str_replace("</b>","",$subs);
	$fstring= str_replace("<br>",PHP_EOL,$subs);
*/

//For PNR status check
	//lccp_pnrno1 id of text box
	
//For dictionary
	// here talent is a word that;s meaning is required
	//$html=file_get_contents('http://dictionary.reference.com/browse/'.$_GET["word"]);
	$html=file_get_contents('dictionary1.html');
	/*$subs=str_replace('<div class="pbk"','<div class="pbk" id="chatbot"',$html);
	$subs=str_replace('<head>','<head><script type="text/javascript">window.location.replace("index1.php");</script>',$subs);
	$subs=str_replace('<head>','<head><script type="text/javascript">var tt=document.getElementById("chatbot").innerHTML;alert(tt);</script>',$subs);
//	include "dictionary.html";
	echo "<script type='text/javascript'>document.getElementById('chatbot').innerHTML;</script>";*/
	//$fstr=strchr($subs,'<div class="pbk"');
	$fdiv=strpos($html,'<div class="pbk"',0);
	echo $fdiv."<br/>";
	for(;;)
	{
		$indiv=strpos($html,'<div',$fdiv);
		if($indiv<strpos($html,'</div>',$fdiv))
		{
			
			break;
		}
	}
	$myFile = "dictionary.html";
	$fh = fopen($myFile, 'w') or die("can't open file");
	//echo $fstring."<br/>";
	fwrite($fh,$subs);
	fclose($fh);
	
	//echo $fstr;
	//$html=file_get_contents('http://dictionary.reference.com/browse/talent?s=t');
	//$html=file_get_contents('http://dictionary.cambridge.org/dictionary/british/talent_1?q=talent');
	//$html=file_get_contents('http://oxforddictionaries.com/definition/english/talent?q=talent');

//For Currency Converter
	//$html=file_get_contents('http://www.xe.com/currencyconverter/convert/?Amount=1&From=USD&To=INR');

 //header('Location: http://www.ankur.pro');

//Writing content of html page in to XML file

	$myFile = "dictionary.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	fwrite($fh,$html);
	fclose($fh);
	echo "File created successfully....";
?>