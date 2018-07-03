<?php
$vote = $_REQUEST['vote'];

//get content of text file

$filename = "poll_result.txt";
$content = file($filename);

//putting contents to array

$array = explode("||",$content[0]);
$val_a = $array[0];
$val_b = $array[1];
$val_c = $array[2];
$val_d = $array[3];
$val_e = $array[4];
$val_f = $array[5];
$val_g = $array[6];
$val_h = $array[7];
$val_i = $array[8];
$val_j = $array[9];
$val_k = $array[10];
$val_l = $array[11];
$val_m = $array[12];
$val_n = $array[13];
$val_o = $array[14];
$val_p = $array[15];

//incrementing vote

if($vote == 0)
{ $val_a = $val_a + 1; }
if($vote == 1)
{ $val_b = $val_b + 1; }
if($vote == 2)
{ $val_c = $val_c + 1; }
if($vote == 3)
{ $val_d = $val_d + 1; }
if($vote == 4)
{ $val_e = $val_e + 1; }
if($vote == 5)
{ $val_f = $val_f + 1; }
if($vote == 6)
{ $val_g = $val_g + 1; }
if($vote == 7)
{ $val_h = $val_h + 1; }
if($vote == 8)
{ $val_i = $val_i + 1; }
if($vote == 9)
{ $val_j = $val_j + 1; }
if($vote == 10)
{ $val_k = $val_k + 1; }
if($vote == 11)
{ $val_l = $val_l + 1; }
if($vote == 12)
{ $val_m = $val_m + 1; }
if($vote == 13)
{ $val_n = $val_n + 1; }
if($vote == 14)
{ $val_o = $val_o + 1; }
if($vote == 15)
{ $val_p = $val_p + 1; }

//inserting contents into file

$insertvote = 
	$val_a."||".$val_b"||".$val_c"||".$val_d"||".$val_e"||".$val_f"||".$val_g"||".$val_h"||".$val_i"||".$val_j"||".$val_k"||".$val_l"||".$val_m"||".$val_n"||".$val_o"||".$val_p;
$fp = fopen($filename, "w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>RESULT:</h2>
<table>
<tr>
<td>Black Panther:</td>
<td><?php echo(100*round($val_a/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
<tr>
<td>Black Widow:</td>
<td><?php echo(100*round($val_b/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
<tr>
<td>Captain America:</td>
<td><?php echo(100*round($val_c/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
<tr>
<td>Deadpool:</td>
<td><?php echo(100*round($val_d/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
<tr>
<td>Drax:</td>
<td><?php echo(100*round($val_e/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Gamora:</td>
<td><?php echo(100*round($val_f/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Groot:</td>
<td><?php echo(100*round($val_g/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Hulk:</td>
<td><?php echo(100*round($val_h/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Iron Man:</td>
<td><?php echo(100*round($val_i/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Mantis:</td>
<td><?php echo(100*round($val_j/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Rocket:</td>
<td><?php echo(100*round($val_k/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>SpiderMan:</td>
<td><?php echo(100*round($val_l/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>StarLord:</td>
<td><?php echo(100*round($val_m/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Thor:</td>
<td><?php echo(100*round($val_n/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr><tr>
<td>Wolverine:</td>
<td><?php echo(100*round($val_o/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
<tr>
<td>Others:</td>
<td><?php echo(100*round($val_p/($val_a+$val_b+$val_c+$val_d+$val_e+$val_f+$val_g+$val_h+$val_i+$val_j+$val_k+$val_l+$val_m+$val_n+$val_o+$val_p),16)); ?> %</td>
</tr>
</table>