<?php
session_start();
$akun=array(
    array("hafizh","hafizh"),
    array("admin","admin")
);
?>
<?php
    if(Isset($_POST['login'])){
        $username = $_POST['id'];
        $password =$_POST['password'];

        $_SESSION['name'] = $username;

        $cek =0;
        for ($i=0; $i < count($akun) ; $i++) { 
            if($akun[$i][0]==$username && $akun[$i][1] == $password){
                header("Location:form.php");
                $cek = 1;
            }
        }
        if($cek == 0){
            echo "Password atau ID anda salah";
        }
    }

?>