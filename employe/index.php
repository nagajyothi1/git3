?php
$conn=mysqli_connect("localhost","root","","leavems");
$query="SELECT * FROM leaves";
if($res=mysqli_query($conn,$query))
{
    $result=array();
    while($row = mysqli_fetch_array($res))
    {
        array_push($result,$row);
    }
echo   json_encode($result);
}
?>