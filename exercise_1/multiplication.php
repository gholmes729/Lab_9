<?php
echo '<h1>Multiplication Table!!!</h1>';
echo '<table cellpadding="0" cellspacing="0" style="text-align:center" border="1px solid black" border-collapse="collapse"><tbody><tr>';
for ($i=0; $i<=100; $i++) {
	for ($j=0; $j<=100; $j++) {
		if ($i==0 && $j==0) {
			echo '<td></td>';
		}
		else if ($i==0) {
			echo '<td>'.$j.'</td>';
		}
		else if ($j==0) {
			echo '<td>'.$i.'</td>';
		}
		else {
			echo '<td>'.$i*$j.'</td>';
		}
	}
	echo '</tr><tr>';
}
echo '</tr></tbody></table>';
?>