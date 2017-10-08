<?PHP   
include("../connect/connect.php");

$jsonsql = mysql_query("select * from androidkayit"); 
 
while($json = mysql_fetch_assoc($jsonsql)) 
{ 

$data[] = $json;  

}  

print json_encode($data);  

?>