<?php
session_start();
$code_org = $_POST["codeorg"];
$code_user = $_POST["code"];
$username = $_POST["username"];
$password = $_POST["password"];
$number = $_POST["number"];
$realname = $_POST["name"];

if ($code_org == $code_user)
{
    include 'incdata/config.php';
    $conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
    $conn->set_charset("utf8");
    $count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_users");
            $row = mysqli_fetch_array($count_jobs);
            $count = $row["MAX(pID)"];
            $id_new = $count + 1;

            $sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";
            $result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $useresh = $row["pUsername"];
}

$sql1 = "SELECT * FROM sw_users WHERE pNumber= '$number' ";
            $result1 = $conn->query($sql1);

            while($row1 = $result1->fetch_assoc()) {
                $numbersh = $row1["pNumber"];
              }

            
            
            if ($useresh == $username )
            {
                header("location: register");
            }
            elseif($numbersh == $number)
            {
                header("location: register");
            }
            else
            {
            $insert_data = $conn -> query("INSERT INTO sw_users VALUE ('$id_new', '$username', '$password', '$realname', '$number', '0', '0')");
            
            mkdir("user/".$username);

            $link = dirname(__FILE__);
            
            $src = "$link/template/copy/*.*";
            $dest = "$link/user/$username";
            
            shell_exec("cp -r $src $dest");
            
            rename("user/$username/htaccess.php", "user/$username/.htaccess");

            $_SESSION["loggedIn"] = true;
            header("location: clientarea");
            $_SESSION["useresh"] = $_POST['username'];
        }
}
else
{
    header("Location: register");
}

?>