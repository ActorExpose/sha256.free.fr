<h2>SHA 512 DB</h2>
<p>
<?php
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha512');
$donnees = mysql_fetch_array($r);
echo "<b>Hash stock&#233;s :&nbsp;".$donnees['nbre_entrees']."</b><br><br>";


$r2 = mysql_query("SELECT * FROM sha512");
while($r1 = mysql_fetch_array($r2) )
{
echo $r1['value'] . "&nbsp;" . $r1['hash']."<br>\n";
}
?>
</p>
