<?php
//To store the session for each candidate
if (isset($_POST["vote"])) {
    if (!isset($_POST["president"])) {
        $_SESSION["president"] = "";
    } else {
        $_SESSION["president"] = $_POST["president"];
    }
    if (!isset($_POST["vice_president"])) {
        $_SESSION["vice_president"] = "";
    } else {
        $_SESSION["vice_president"] = $_POST["vice_president"];
    }
    if (!isset($_POST["secretary"])) {
        $_SESSION["secretary"] = "";
    } else {
        $_SESSION["secretary"] = $_POST["secretary"];
    }
    if (!isset($_POST["assistant_secretary"])) {
        $_SESSION["assistant_secretary"] = "";
    } else {
        $_SESSION["assistant_secretary"] = $_POST["assistant_secretary"];
    }
    if (!isset($_POST["financial_secretary"])) {
        $_SESSION["financial_secretary"] = "";
    } else {
        $_SESSION["financial_secretary"] = $_POST["financial_secretary"];
    }
    if (!isset($_POST["treasurer"])) {
        $_SESSION["treasurer"] = "";
    } else {
        $_SESSION["treasurer"] = $_POST["treasurer"];
    }
    if (!isset($_POST["socials"])) {
        $_SESSION["socials"] = "";
    } else {
        $_SESSION["socials"] = $_POST["socials"];
    }
    if (!isset($_POST["health"])) {
        $_SESSION["health"] = "";
    } else {
        $_SESSION["health"] = $_POST["health"];
    }
    if (!isset($_POST["research"])) {
        $_SESSION["research"] = "";
    } else {
        $_SESSION["research"] = $_POST["research"];
    }
    if (!isset($_POST["sports"])) {
        $_SESSION["sports"] = "";
    } else {
        $_SESSION["sports"] = $_POST["sports"];
    }
    if (!isset($_POST["provost"])) {
        $_SESSION["provost"] = "";
    } else {
        $_SESSION["provost"] = $_POST["provost"];
    }
    if (!isset($_POST["pro"])) {
        $_SESSION["pro"] = "";
    } else {
        $_SESSION["pro"] = $_POST["pro"];
    }
}
?>
