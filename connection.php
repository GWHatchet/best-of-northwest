 <?php 
 // Connects to Our Database 
 $con = mysql_connect("localhost", "root", "");
 if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('sa_guide');
$query = mysql_query("SELECT * FROM bonw_winners where category = 'Going Out'", $con);
while($row = mysql_fetch_assoc($query)){
     $goingout[] = $row;
}
$query = mysql_query("SELECT * FROM bonw_winners where category = 'Activities'", $con);
while($row = mysql_fetch_assoc($query)){
     $activities[] = $row;
}
$query = mysql_query("SELECT * FROM bonw_winners where category = 'Campus Life'", $con);
while($row = mysql_fetch_assoc($query)){
     $campuslife[] = $row;
}
$query = mysql_query("SELECT * FROM bonw_winners where category = 'Food'", $con);
while($row = mysql_fetch_assoc($query)){
     $food[] = $row;
}
$query = mysql_query("SELECT * FROM bonw_categories", $con);
while($row = mysql_fetch_assoc($query)){
     $categories[] = $row;
}
?> 