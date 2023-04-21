$servername="localhost";
$username="root";
$password="";
$dbname="ecom";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comment=$_POST['comment'];
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    $sql="INSERT INTO contact_us (name,email,mobile,comment) VALUES ('$name','$email','$mobile','$comment')";  
}