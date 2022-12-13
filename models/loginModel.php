<?php
function login($user,$password){
    /*
    $host='localhost';
    $user2='gledsistema';
    $password2='gledcrm2022';
    $db='gled';
    */
    
    $host='localhost';
    $user2='root';
    $password2='';
    $db='gled';
    
    
    $conection=mysqli_connect($host,$user2,$password2,$db);
    $sqlSearch="SELECT * FROM usersgledredes WHERE user='$user' and password='$password'";
    $result = mysqli_query($conection, $sqlSearch);
    
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['user']=$user;
        foreach ($result as $aux) {
            $_SESSION['id']=$aux['id'];
            $_SESSION['name'] = $aux['name'];
            $_SESSION['user'] = $aux['user'];
            $_SESSION['perfil'] = $aux['perfil'];
        }
        return true;
    }else{
        return false;
    }
}

