<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM office WHERE companyname like '" . $_POST["keyword"] . "%' ORDER BY companyname LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["companyname"]; ?>');"><?php echo $country["companyname"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>