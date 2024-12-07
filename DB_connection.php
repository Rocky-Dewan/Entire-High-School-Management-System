<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "db_hsms";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Assuming there's a settings table with a column named 'setting_value'
    $stmt = $conn->prepare("SELECT setting_value FROM settings WHERE id = 1 LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if a result was returned
    if ($result) {
        $setting = $result['setting_value'];
    } else {
        // Default value for $setting if no result is found
        $setting = 0;
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
