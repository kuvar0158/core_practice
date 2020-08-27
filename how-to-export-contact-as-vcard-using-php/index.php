<?php
require_once "DBController.php";
$dbController = new DBController();



if(!empty($_GET["action"])) {
    $query = "SELECT * FROM tbl_contact WHERE id = ?";
    $param_type = "i";
    $param_value_array = array($_GET["id"]);
    $contactResult = $dbController->runQuery($query,$param_type,$param_value_array);
    
    require_once "VcardExport.php";
    $vcardExport = new VcardExport();
    $vcardExport->contactVcardExportService($contactResult);
    exit;
}

$query = "SELECT * FROM tbl_contact";
$result = $dbController->runBaseQuery($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>How to Export Contact as vCard using PHP</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php 
if(!empty($result))
{
?>
    <div class="tbl-contact">
        <div class="contact-row-header">
            <div class="col_name">Name</div>
            <div>Email</div>
            <div>Phone</div>
            <div>Address</div>
            <div class="action">Export</div>
        </div>
<?php 
    foreach($result as $k=>$v)
    {
?>
        
        
        <div class="contact-row">
            <div class="col_name"><?php echo $result[$k]["first_name"]; ?> <?php echo $result[$k]["last_name"]; ?></div>
            <div><?php echo $result[$k]["email"]; ?></div>
            <div><?php echo $result[$k]["phone"]; ?></div>
            <div><?php echo $result[$k]["address"]; ?></div>
            <div class="action"><a href="index.php?action=export&id=<?php echo $result[$k]["id"]; ?>" title="Export to vCard"><img src="vcard_icon.png" alt="vCard"></a></div>
        </div>
<?php 
    }
?>
    </div>
<?php 
}
?>
</body>
</html>