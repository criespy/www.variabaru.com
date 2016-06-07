<!-- Developed by www.myorangespot.com -->
<?

$filename = "counter.txt";

$fp = fopen( $filename,"r"); 
$Old = fread($fp, 100); 
fclose( $fp ); 

$Old = split ("=", $Old, 5);

$NewCount = $Old[1] + '1';

$New = "counter=$NewCount";

$fp = fopen( $filename,"w+");
if (flock($fp, 2)) { 
fwrite($fp, $New, 100); }
fclose( $fp ); 

print "counter=$NewCount";
exit;
?>
<!-- Developed by www.myorangespot.com -->