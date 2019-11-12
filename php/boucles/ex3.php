

 <?php echo "<table><thead><tr>";
  echo"<th>  </th>";
 for($i=0;$i<=12;$i++){echo"<th>$i</th>";}
 echo"</tr></thead>"; 
 echo"<tbody>";
 for($i=0;$i<=12;$i++)
 {echo"<tr>";
 echo"<td>$i</td>";
 for($j=0;$j<=12;$j++){echo"<td>".$i*$j."</td>";}
echo"</tr>";}
echo"</tbody>";
?>
