<?php
$x=file_get_contents("demo.txt");

$start=strpos($x,"<p>")+3;
$end=strpos($x,"</p>",$start);
$flag=$end;
$string=substr($x,$start,$end-$start);
$article= $string;

for(;;)
{
$start=strpos($x,"<p>",$end)+3;
$end=strpos($x,"</p>",$start);
if($flag==$end)
	break;
$string=substr($x,$start,$end-$start);

$article=$article.$string;
}

echo $article;
?>