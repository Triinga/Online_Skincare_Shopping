<?php
include('../includes/connect.php');

class UserPreferences {
    private $userId;
    private $cookieName;

    public function __construct($userId, $cookieName) {
        $this->userId = $userId;
        $this->cookieName = $cookieName;
    }

    public function savePreference($preferenceValue) {
        $this->saveToDatabase($preferenceValue);
        $this->setPreferenceCookie($preferenceValue);
    }

    public function getPreference() {
        if (isset($_COOKIE[$this->cookieName])) {
            return $_COOKIE[$this->cookieName];
        } else {
            return $this->getFromDatabase();
        }
    }

    private function setPreferenceCookie($preferenceValue) {
        // setcookie($this->cookieName, $preferenceValue, time() + (86400 * 30), "/"); //QET RRESHT KOMENT SE PO PRISH PUNE - VERTETO ME RINESAB
    }

    private function saveToDatabase($preferenceValue) {
        global $con;
        $sql = "INSERT INTO preferncat_perdoruesit (user_id, product_type) VALUES ('$this->userId', '$preferenceValue')";
        $con->query($sql);
    }

    private function getFromDatabase() {
        global $con;
        $sql = "SELECT product_type FROM preferncat_perdoruesit WHERE user_id='$this->userId' ORDER BY id DESC LIMIT 1";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $preferenceValue = $row["product_type"];
        } else {
            $preferenceValue = "none";
        }
        return $preferenceValue;
    }
}

?>
