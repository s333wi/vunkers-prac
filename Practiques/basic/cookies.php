<?php
$users = isset($_COOKIE['users']) ? unserialize($_COOKIE['users']) : [];
if (!empty($_POST['submit']) && $_POST['submit'] == 'Login') {
    $user = !empty($_POST['user']) ? $_POST['user'] : '';
    $password = !empty($_POST['pass']) ? $_POST['pass'] : '';
    if (empty($user) || empty($password)) {
        echo '<div class="alert alert-danger">
                <a href="login.php" class="close" data-dismiss="alert" aria-label="close">Tornar X</a>
                <p><strong>Alerta!</strong></p>
                <p>Els camps son obligatoris</p>
            </div>';
    } else {

        $is_in = false;
        foreach ($users as $user_bbdd) {
            if ($user_bbdd['user'] == $user) {
                $is_in = true;
                if ($user_bbdd['pass'] == sha1($password)) {
                    setcookie('info_user', serialize($user_bbdd), time() + 7200);
                    header("Location:questionari.php");
                } else {
                    echo '<div class="alert alert-danger">
                <a href="login.php" class="close" data-dismiss="alert" aria-label="close">Tornar X</a>
                <p><strong>Alerta!</strong></p>
                <p>Contrasenya incorrecta</p>
            </div>';
                }
            }
        }
        if ($is_in == false) {
            $users[] = ['user' => $user, 'pass' => sha1($password), 'color' => "#ffffff"];
            setcookie('info_user', serialize($users), time() + 7200);
            setcookie("users", serialize($users), time() + 3600);
            header("Location:questionari.php");
        }
    }
} elseif (!empty($_POST['submit']) && $_POST['submit'] == 'profile') {
    $user_info = unserialize($_COOKIE['info_user']);
    $color=!empty($_POST['color'])? $_POST['color']:'';
    foreach($users as $key=>$user){
        
         if ($user_info['user'] == $user['user']) {
             
             echo 'hola que tallll';
             $user['color']=$color;
             $users[$key]=$user;
         } 
    }
    
    
    setcookie("users", serialize($users), time() + 3600);
    $user_info['color'] = $color;
    setcookie("info_user", serialize($user_info), time() + 3600);
    header("Location:resultat.php");
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
</html>


