<?
    include_once ($_SERVER["DOCUMENT_ROOT"].'/sopdu/core/connect.php');
    function getAge($y, $m, $d) {
        if($m > date('m') || $m == date('m') && $d > date('d')){
            return (date('Y') - $y - 1);
        } else{
            return (date('Y') - $y);
        }
    }
    $user_rs = mysql_query("
        select * from users where login = '".$_REQUEST["login"]."' and password = '".md5($_REQUEST["pass"])."'
    ");
    while ($user_res = mysql_fetch_array($user_rs)){
        if(!empty($user_res) and $user_res["active"] == 'Y' and $user_res["login"] == $_REQUEST["login"] and $user_res["password"] == md5($_REQUEST["pass"])){
            $birthday = explode("-", $user_res["birthday"]);
            session_start();
            $_SESSION["user"] = array(
                "avtorize" => 'Y',
                "sid" => $user_res["sid"],
                "login" => $user_res["login"],
                "name" => $user_res["name"],
                "family" => $user_res["family"],
                "surname" => $user_res["surname"],
                "birthday" => $birthday[2].'.'.$birthday[1].'.'.$birthday[0],
                "are" => getAge($birthday[0],$birthday[1],$birthday[2]),
                "status" => $user_res["status"]
            );
            unset($_REQUEST["login"]);
            unset($_REQUEST["pass"]);
        }
    }
    if(empty($_SESSION["user"])){
        if(!empty($_REQUEST)){
            $avtorize_error = 'y';
        }
    }
?>