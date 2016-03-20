<?php
include("auth.php");
session_start(); 

$op = NULL;
if (isset($_GET['option'])) $op = $_GET['option'];
if (!isset($_POST['username']) && !isset($_SESSION['username'])) $op = "login";

switch ($op) {
    case "login":
        include("login.php");
        break;
    case "logout":
        include("logout.php");
        break;
	case "home_login":
        include("home_login.php");
        break;
    case "home":
        include("home.php");
        break;
    case "register_submit":
        include("register_submit.php");
        break;
    case "reg":
        include("reg.php");
        break;
    case "price":
        include("price.php");
        break;
    case "new_route":
        include("new_route.php");
        break;
    case "exist_route":
        include("exist_route.php");
        break;
    case "home_login":
        include("home_login.php");
        break;
    case "train-book":
        include("train-book");
	case "route":
        include("route.php");

        break;
    case "train_detail_station":
        include("train_detail_station.php");
        break;
		
	case "train_detail":
        include("train_detail.php");
        break;
    case "train_detail_done":
        include("train_detail_done.php");
        break;
    case "confirm_submit":
        include("confirm_submit.php");
        break;
    case "error_submit":
        include("error_submit.php");
        break;
    case "history_b":
        include("history_b.php");
        break;
    case "history_c":
        include("history_c.php");
        break;
    case "details":
        include("details.php");
        break;
    case "reject":
        include("reject.php");
        break;
    case "approve":
        include("approve.php");
        break;
    case "cycle-join":
        include("cycle-join.php");
        break;
    case "cycle-leave":
        include("cycle-leave.php");
        break;
    case "isic-get":
        include("isic-get.php");
        break;
    case "isic-leave":
        include("isic-leave.php");
        break;
    case "laptop-buy":
        include("laptop-buy.php");
        break;
    case "laptop-leave":
        include("laptop-leave.php");
        break;
    case "trunk-buy":
        include("trunk-buy.php");
        break;
    case "trunk-leave":
        include("trunk-leave.php");
        break;

    case "tshirt-gal":
        include("tshirt-gal.php");
        break;
    case "tshirt-buy":
        include("tshirt-buy.php");
        break;
    case "tshirt-check":
        include("tshirt-check.php");
        break;

    case "hacker":
        include("hacker.php");
        break;
        default:
        include("login.php");
        break;
}

?>
