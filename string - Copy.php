<?php
$str=$_GET["query1"];
//$str=substr($str1,0,strlen($str1));
$space_index=strpos($str,' ');
$query=substr($str,0,$space_index);

if(strcasecmp($query,"define")==0)
	$service_no=1;
	
elseif(strcasecmp($query,"dictionary")==0)
	$service_no=1;
	
elseif(strcasecmp($query,"distance")==0)
	$service_no=2;
	
elseif(strcasecmp($query,"calc")==0)
	$service_no=3;
	
elseif(strcasecmp($query,"calculator")==0)
	$service_no=3;
	
elseif(strcasecmp($query,"weather")==0)
	$service_no=4;
	
elseif(strcasecmp($query,"pnr")==0)
	$service_no=5;
	
elseif(strcasecmp($query,"pnrstatus")==0)
	$service_no=5;
	
elseif(strcasecmp($query,"currency")==0)
	$service_no=6;
	
elseif(strcasecmp($query,"currencyconvert")==0)
	$service_no=6;
	
elseif(strcasecmp($query,"currencyconversion")==0)
	$service_no=6;
	
elseif(strcasecmp($query,"unit")==0)
	$service_no=7;
	
elseif(strcasecmp($query,"unitconvert")==0)
	$service_no=7;
	
elseif(strcasecmp($query,"unit")==0)
	$service_no=7;

elseif(strcasecmp($query,"unitconversion")==0)
	$service_no=7;
	
elseif(strcasecmp($query,"astro")==0)
	$service_no=8;
	
elseif(strcasecmp($query,"astrology")==0)
	$service_no=8;
	
elseif(strcasecmp($query,"movieshowtime")==0)
	$service_no=9;
	
elseif(strcasecmp($query,"movietime")==0)
	$service_no=9;
	
elseif(strcasecmp($query,"localsearch")==0)
	$service_no=10;
	
elseif(strcasecmp($query,"local")==0)
	$service_no=10;
	
elseif(strcasecmp($query,"cricketscore")==0)
	$service_no=11;
	
elseif(strcasecmp($query,"score")==0)
	$service_no=11;
	
else
{
	$service_no=0;
}


switch($service_no)
{
	case 1:
		echo "Dictionary Service.</p>";
		$def=substr($str,$space_index+1,strlen($str));
		echo $def;
	break;
		
	case 2:
		echo "Distance Service.</P>";
		$city=substr($str,$space_index+1,strlen($str));
		$city1=substr($city,0,strpos($str,' ')-1);
		$city2=substr($city,strpos($str,' ')-1,strlen($city));
		echo "Distance between ". $city1. " and ". $city2 ." is unknown for now.</p>";
	break;
	
	case 3:
		echo "Calculator Service.</p>";
		$exp=substr($str,$space_index+1,strlen($str));
		echo $exp;
	break;
	
	case 4:
		echo "Weather Service.</p>";
		$city=substr($str,$space_index+1,strlen($str));
		echo $city;
	break;
	
	case 5:
		echo "PNR Status.</p>";
		$pnr=substr($str,$space_index+1,strlen($str));
		echo $pnr;
	break;
	
	case 6:
		echo "Currency conversion service.</p>";
		$curr=substr($str,$space_index+1,strlen($str));
		echo $curr;
	break;
	
	case 7:
		echo "Unit Conversion service.</p>";
		$unit=substr($str,$space_index+1,strlen($str));
		echo $unit;
	break;
	
	case 8:
		echo "Astrology service.</p>";
		$astro=substr($str,$space_index+1,strlen($str));
		echo $astro;
	break;
	
	case 9:
		echo "Movie Show time Service.</p>";
		$movie=substr($str,$space_index+1,strlen($str));
		echo $movie;
	break;
	
	case 10:
		echo "Local Search Service.</p>";
		$localsearch=substr($str,$space_index+1,strlen($str));
		echo $localsearch;
	break;
	
	case 11:
		echo "Cricket score Service.</p>";
		$score=substr($str,$space_index+1,strlen($str));
		echo $score;
	break;
	
	default:
		echo "You entered wrong input query. Please Try Again using given formats.".<br>."define <word>, weather <city name>,".<br>."";
		echo "distance <city1> <city2>, calc <expression>,".<br>." pnr <pnrnumber>, currency <amount> <from> <to>,".<br>." unit <number> <from> <to>,";
		echo "astrology <name>,".<br>." movieshowtime <movie name> <city> <date>, localsearch <city> <word to search>,".<br>." cricket <team1> <team2> <date>";
}
?>