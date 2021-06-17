<?php
require "connection.php";
function Save_New_Project($project_name,$project_type,$project_owner_name,$project_monitor,$project_location,$start_date,$end_date)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO project_creation 
(Project_name,Project_type,Project_owner_name,Project_monitor_by,Project_location,Project_start_date,Project_end_date)
VALUES (:project_name,:project_type,:project_owner_name,:project_monitor,:project_location,:start_date,:end_date)");
$sql->bindParam(':project_name', $project_name);
$sql->bindParam(':project_type', $project_type);
$sql->bindParam(':project_owner_name', $project_owner_name);
$sql->bindParam(':project_monitor', $project_monitor);
$sql->bindParam(':project_location', $project_location);
$sql->bindParam(':start_date', $start_date);
$sql->bindParam(':end_date', $end_date);
$sql->execute();
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Material_Setup($material_name,$meterial_type,$uom,$meterial_unititem,$meterial_price,$material_unit,$material_supplier1,$material_supplier2,$material_supplier3)
{
$material_name;
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO setup_material(Material_name,Material_type,uom,meterial_unit_item,meterial_price,material_unit,material_supplier1,material_supplier2,material_supplier3) VALUES (:material_name,:meterial_type,:uom,:material_unit,:meterial_price,:material_unit,:material_supplier1,:material_supplier2,:material_supplier3)");
$sql->bindParam(':material_name', $material_name);
$sql->bindParam(':meterial_type', $meterial_type);
$sql->bindParam(':uom', $uom);
$sql->bindParam(':material_unit', $material_unit);
$sql->bindParam(':meterial_price', $meterial_price);
$sql->bindParam(':meterial_price', $material_unit);
$sql->bindParam(':material_supplier1', $material_supplier1);
$sql->bindParam(':material_supplier2', $material_supplier2);
$sql->bindParam(':material_supplier3', $material_supplier3);
$sql->execute();
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Supplier_Setup($Supplier_Name,$Supplier_Shop_Name,$Supplier_Business,$Supplier_Contact,$Supplier_Address)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO supplier_setup(Supplier_Name,Supplier_Shop_Name,Supplier_Business,Supplier_Contact,Supplier_Address)
VALUES (:Supplier_Name,:Supplier_Shop_Name,:Supplier_Business,:Supplier_Contact,:Supplier_Address)");
$sql->bindParam(':Supplier_Name', $Supplier_Name);
$sql->bindParam(':Supplier_Shop_Name', $Supplier_Shop_Name);
$sql->bindParam(':Supplier_Business', $Supplier_Business);
$sql->bindParam(':Supplier_Contact', $Supplier_Contact);
$sql->bindParam(':Supplier_Address', $Supplier_Address);
$sql->execute();
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Register_user($Staff_Name,$Staff_Surname,$Staffjoining,$Staff_Email,$Staff_Password,$payment,$setup,$inventory,$report,$dms)
{
try {
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  register_staff(`Staff_Name`, `Staff_Surname`,`staff_joining`, `Staff_Email`, `Staff_Password`, `Payment`, `Setup`, `Inventory`, `Report`, `Document_Management_System`) values (:Staff_Name,:Staff_Surname,:Staffjoining,:Staff_Email,:Staff_Password,:payment,:setup,:inventory,:report,:dms)");

$sql->bindParam(':Staff_Name', $Staff_Name);
$sql->bindParam(':Staff_Surname', $Staff_Surname);
$sql->bindParam(':Staffjoining', $Staffjoining);
$sql->bindParam(':Staff_Email', $Staff_Email);
$sql->bindParam(':Staff_Password', $Staff_Password);
$sql->bindParam(':payment', $payment);
$sql->bindParam(':setup', $setup);
$sql->bindParam(':inventory', $inventory);
$sql->bindParam(':report', $report);
$sql->bindParam(':dms', $dms);
$sql->execute();
}
catch(Exception $e) {
}
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Unit($material_name,$meterial_type,$materials_price,$material_unit)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  uom(`Material_name`,`uom`,`perunit`,`Material_Price`) 
values (:material_name,:meterial_type,:material_unit,:materials_price)");

$sql->bindParam(':material_name', $material_name);
$sql->bindParam(':meterial_type', $meterial_type);
$sql->bindParam(':materials_price', $materials_price);
$sql->bindParam(':material_unit', $material_unit);
$sql->execute();

if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function UnitEdit($id,$meterial_type,$materials_price,$material_unit)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("UPDATE uom SET `uom`=:meterial_type,`perunit`=:material_unit,
`Material_Price`=:materials_price WHERE `ID`='$id'");


$sql->bindParam(':meterial_type', $meterial_type);

$sql->bindParam(':material_unit',$material_unit );
$sql->bindParam(':materials_price', $materials_price);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php 
function delete_uom($id)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("delete from uom where ID=:title");
$sql->bindParam(':title', $id);
$sql->execute();
if($sql)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Voucher_Allotment($min,$max)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO voucher_allotment(voucher_min,voucher_max) values (:min,:max)");
$sql->bindParam(':min', $min);
$sql->bindParam(':max', $max);
$sql->execute();
if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Voucher_Assignment($id,$min,$max)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO voucher(Project_ID,start,end) values (:id,:min,:max)");
$sql->bindParam(':id', $id);
$sql->bindParam(':min', $min);
$sql->bindParam(':max', $max);
$sql->execute();
if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Material_Requirment($projectid,$Project_name,$empID,$emp_id,$empID1,$emp_id1,$empID2,
$emp_id2,$empID3,$emp_id3,$empID4,$emp_id4,$empID5,$emp_id5,$Land_Acquisition,$Land_Acquisition_Cost,
$Architectural_engineering,$Architectural_engineering_cost,$Expected_Labour,$Expected_Labour_Cost,
$Field_supervision,$Field_supervision_cost,$Insurance_taxes,$Insurance_taxes_cost
,$Owner_office_overhead,$Owner_office_overhead_cost,$Inspection_testing,$Inspection_testing_cost,
$other_expences1,$other_expences_cost1,$other_expences2,$other_expences_cost2,$other_expences3,
$other_expences_cost3,$total_cost)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO material__requirment(
`Project_ID`, `Project_Name`, `Material_1`, `Cost_1`, `Material_2`, `Cost_2`, `Material_3`, `Cost_3`, `Material_4`, `Cost_4`, `Material_5`, `Cost_5`, `Material_6`, `Cost_6`, `Land_Acquisition`, `Land_Acquisition_cost`, `Architectural_engineering`, `Architectural_engineering_cost`, `Expected_Labour`, `Expected_Labour_Cost`, `Field_supervision`, `Field_supervision_cost`, `Insurance_taxes`, `Insurance_taxes_cost`, `Owner_office_overhead`, `Owner_office_overhead_cost`, `Inspection_testing`, `Inspection_testing_cost`, `other_expences1`, `other_expences_cost1`, `other_expences2`, `other_expences_cost2`, `other_expences3`, `other_expences_cost3`,`total_project_cost`) 
VALUES (:projectid,:Project_name,:empID,:emp_id,:empID1,:emp_id1,:empID2,:emp_id2,:empID3,:emp_id3,:empID4,
:emp_id4,:empID5,:emp_id5,
:Land_Acquisition,:Land_Acquisition_Cost,:Architectural_engineering,:Architectural_engineering_cost
,:Expected_Labour,:Expected_Labour_Cost,:Field_supervision,:Field_supervision_cost,
:Insurance_taxes,:Insurance_taxes_cost,
:Owner_office_overhead,:Owner_office_overhead_cost,:Inspection_testing,:Inspection_testing_cost
,:other_expences1,:other_expences_cost1,:other_expences2,:other_expences_cost2,
:other_expences3,:other_expences_cost3,:total_cost)");
$sql->bindParam(':projectid', $projectid);
$sql->bindParam(':Project_name', $Project_name);
$sql->bindParam(':empID', $empID);
$sql->bindParam(':emp_id', $emp_id);
$sql->bindParam(':empID1', $empID1);
$sql->bindParam(':emp_id1', $emp_id1);
$sql->bindParam(':empID2', $empID2);
$sql->bindParam(':emp_id2', $emp_id2);
$sql->bindParam(':empID3', $empID3);
$sql->bindParam(':emp_id3', $emp_id3);
$sql->bindParam(':empID4', $empID4);
$sql->bindParam(':emp_id4', $emp_id4);
$sql->bindParam(':empID5', $empID5);
$sql->bindParam(':emp_id5', $emp_id5);
$sql->bindParam(':Land_Acquisition', $Land_Acquisition);
$sql->bindParam(':Land_Acquisition_Cost', $Land_Acquisition_Cost);
$sql->bindParam(':Architectural_engineering', $Architectural_engineering);
$sql->bindParam(':Architectural_engineering_cost', $Architectural_engineering_cost);
$sql->bindParam(':Expected_Labour', $Expected_Labour);
$sql->bindParam(':Expected_Labour_Cost', $Expected_Labour_Cost);
$sql->bindParam(':Field_supervision', $Field_supervision);
$sql->bindParam(':Field_supervision_cost', $Field_supervision_cost);
$sql->bindParam(':Insurance_taxes', $Insurance_taxes);
$sql->bindParam(':Insurance_taxes_cost', $Insurance_taxes_cost);
$sql->bindParam(':Owner_office_overhead', $Owner_office_overhead);
$sql->bindParam(':Owner_office_overhead_cost', $Owner_office_overhead_cost);
$sql->bindParam(':Inspection_testing', $Inspection_testing);
$sql->bindParam(':Inspection_testing_cost', $Inspection_testing_cost);
$sql->bindParam(':other_expences1', $other_expences1);
$sql->bindParam(':other_expences_cost1', $other_expences_cost1);
$sql->bindParam(':other_expences2', $other_expences2);
$sql->bindParam(':other_expences_cost2', $other_expences_cost2);
$sql->bindParam(':other_expences3', $other_expences3);
$sql->bindParam(':other_expences_cost3', $other_expences_cost3);
$sql->bindParam(':total_cost', $total_cost);

$sql->execute();
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Supplier_Entry($Supplier_Name,$Project_ID,$project_name,$Supplier_Suplies_Materials,$Material_Amount,$Material_Supply_Date,$Material_Price)
{
try {
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  supplier_entry(`Supplier_Name`, `Project_ID`, `project_name`, `Supplier_Suplies_Materials`, `Material_Amount`, `Material_Supply_Date`, `Material_Price`, `remaining`)
values (:Supplier_Name,:Project_ID,:project_name,:Supplier_Suplies_Materials,:Material_Amount,:Material_Supply_Date,:Material_Price,:Material_Price)");

$sql->bindParam(':Supplier_Name', $Supplier_Name);
$sql->bindParam(':Project_ID', $Project_ID);
$sql->bindParam(':project_name', $project_name);
$sql->bindParam(':Supplier_Suplies_Materials', $Supplier_Suplies_Materials);
$sql->bindParam(':Material_Amount', $Material_Amount);
$sql->bindParam(':Material_Supply_Date', $Material_Supply_Date);
$sql->bindParam(':Material_Price', $Material_Price);
$sql->execute();
}
catch(Exception $e) {
}
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Labour_Entry($Labour_Name,$project_id,$Project_Name,$Labour_Total_Week_Presenty,$Labour_week_payment,$entry_date)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO labour_entry(`Labour_name`,`Labour_site_id`,`Labour_site`,`Labour_week_presenty`,`Labour_week_payment`,`remaining`,`entry_date`)
values (:Labour_Name,:project_id,:Project_Name,:Labour_Total_Week_Presenty,:Labour_week_payment,:Labour_week_payment,:entry_date)");
$sql->bindParam(':Labour_Name', $Labour_Name);
$sql->bindParam(':project_id', $project_id);
$sql->bindParam(':Project_Name', $Project_Name);
$sql->bindParam(':Labour_Total_Week_Presenty', $Labour_Total_Week_Presenty);
$sql->bindParam(':Labour_week_payment', $Labour_week_payment);
$sql->bindParam(':entry_date', $entry_date);
$sql->execute();

if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Staff_Entry($Staff_name,$Staff_salary,$month)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO staff_entry(Staff_Name,Staff_Salary,month,remaining)
values (:Staff_name,:Staff_salary,:month,:Staff_salary)");

$sql->bindParam(':Staff_name', $Staff_name);
$sql->bindParam(':Staff_salary', $Staff_salary);
$sql->bindParam(':month', $month);
$sql->execute();

if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Update_Supplier_Payment_Detail($payment1,$id1)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE supplier_entry SET paid=:payment, partial_paid=:payment, remaining='0' WHERE `ID`='$id1'");

$sql->bindParam(':payment', $payment1);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Update_Partial_Payment($payment,$id,$remaining)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE supplier_entry SET partial_paid=:payment, paid=:payment, remaining=:remaining WHERE `ID`='$id'");

$sql->bindParam(':payment', $payment);
$sql->bindParam(':remaining', $remaining);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Update_Partial_Payment_Labour($payment,$id,$remaining)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE labour_entry SET partial_paid=:payment, paid=:payment, remaining=:remaining WHERE `ID`='$id'");

$sql->bindParam(':payment', $payment);
$sql->bindParam(':remaining', $remaining);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Update_Labour_Payment_Detail($payment1,$id1,$voucher)
{
$entry_date=date('Y/m/d');
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE labour_entry SET paid=:payment, partial_paid=:payment, remaining='0', voucher_no=:voucher, payment_date=:date WHERE `ID`='$id1'");

$sql->bindParam(':payment', $payment1);
$sql->bindParam(':voucher', $voucher);
$sql->bindParam(':date', $entry_date);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Update_Partial_Payment_Staff($payment,$id,$remaining)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE staff_entry SET partial_paid=:payment, paid=:payment, remaining=:remaining WHERE `ID`='$id'");

$sql->bindParam(':payment', $payment);
$sql->bindParam(':remaining', $remaining);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Update_Staff_Payment_Detail($payment1,$id1)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE staff_entry SET paid=:payment, partial_paid=:payment, remaining='0' WHERE `ID`='$id1'");

$sql->bindParam(':payment', $payment1);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>

<?php
require "connection.php";
function Update_Voucher($site_id,$Labour_site,$name,$Labour_name,$voucher,$payment1,$date)
{
echo $name;
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO voucher_alloted(`project_id` ,
`Project_name` ,
`category` ,
`name` ,
`voucher` ,
`Voucher_payment` ,
`date`) 
values (:site_id,:Labour_site,:name,:Labour_name,:voucher,:payment1,:date)");

$sql->bindParam(':site_id', $site_id);
$sql->bindParam(':Labour_site', $Labour_site);
$sql->bindParam(':name', $name);
$sql->bindParam(':Labour_name', $Labour_name);
$sql->bindParam(':voucher', $voucher);
$sql->bindParam(':payment1', $payment1);
$sql->bindParam(':date', $date);
$sql->execute();

if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function MoveInventory($id,$name,$materialid)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE material_entry SET Project_ID=:projectid,Project_name=:name WHERE `ID`='$materialid'");
$sql->bindParam(':projectid', $id);
$sql->bindParam(':name', $name);
$sql->execute();
if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Payment_received($Project_ID,$project_name,$Payment_Received,$Payment_Received_By,
$payment,$Payment_Received_Date,$submitted_date)
{
try {
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  payment_received(`project_id` ,`project_name` ,`amount` ,`amount_received_by` ,`Payment_in` ,`Received_date` ,`Payment_submit_date`)
values (:Project_ID,:project_name,:Payment_Received,:Payment_Received_By,:payment,:Payment_Received_Date,:submitted_date)");

$sql->bindParam(':Project_ID', $Project_ID);
$sql->bindParam(':project_name', $project_name);
$sql->bindParam(':Payment_Received', $Payment_Received);
$sql->bindParam(':Payment_Received_By', $Payment_Received_By);
$sql->bindParam(':payment', $payment);
$sql->bindParam(':Payment_Received_Date', $Payment_Received_Date);
$sql->bindParam(':submitted_date', $submitted_date);
$sql->execute();
}
catch(Exception $e) {
}
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Consumed_material($id,$consumed,$remaining)
{

$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("UPDATE material_entry SET consumed_inventory=:consumed, remaining_inventory=:remaining WHERE `ID`='$id'");

$sql->bindParam(':consumed', $consumed);
$sql->bindParam(':remaining', $remaining);
$sql->execute();


if($sql->rowCount()==1)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Reminder($title,$event,$date,$location,$description)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO calender(`name`, `event`, `description`, `location`, `date`)
values (:title,:event,:description,:location,:date)");
$sql->bindParam(':title', $title);
$sql->bindParam(':event', $event);
$sql->bindParam(':date', $date);
$sql->bindParam(':location', $location);
$sql->bindParam(':description', $description);
$sql->execute();

if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>


<?php
require "includes/connection.php";
function Material_Entry($projectid,$project_name,$Material_Supplier_name,$Material_Supplier_ID,$shop,$Material_Name,
$Material_Amount,$Measure,$Material_Price,$Material_Received_Date,$billno,$voucher,$Vehicle,$location,$Time,$Remark,$Description)
{
try {
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  material_entry(Project_ID, Project_name,Supplier,supplier_id,shop,Material_Name,Material_Amount,measure,Material_Price,Material_Received_Date,consumed_inventory,remaining_inventory,date,Bill,voucher,Vehicle,Unloaded_Location,Time,Remark,Description,remaining)
values (:projectid,:project_name,:Material_Supplier_name,:Material_Supplier_ID,:shop,:Material_Name,:Material_Amount,:Measure,:Material_Price,:Material_Received_Date,'0',:Material_Amount,'".date('Y/m/d')."',:billno,:voucher,:Vehicle,:location,:Time,:Remark,:Description,:Material_Price)");

$sql->bindParam(':projectid', $projectid);
$sql->bindParam(':project_name', $project_name);
$sql->bindParam(':Material_Supplier_name', $Material_Supplier_name);
$sql->bindParam(':Material_Supplier_ID', $Material_Supplier_ID);
$sql->bindParam(':shop', $shop);
$sql->bindParam(':Material_Name', $Material_Name);
$sql->bindParam(':Material_Amount', $Material_Amount);
$sql->bindParam(':Measure', $Measure);
$sql->bindParam(':Material_Price', $Material_Price);
$sql->bindParam(':Material_Received_Date', $Material_Received_Date);
$sql->bindParam(':billno', $billno);
$sql->bindParam(':voucher', $voucher);
$sql->bindParam(':Vehicle', $Vehicle);
$sql->bindParam(':location', $location);
$sql->bindParam(':Time', $Time);
$sql->bindParam(':Remark', $Remark);
$sql->bindParam(':Description', $Description);


$sql->execute();
}
catch(Exception $e) {
}
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function Material_Supplier_bill($supplier,$add,$bill,$payment)
{
try {
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');

$sql = $db->prepare("INSERT INTO  supplier_material_payment(Supplier_name,Supplier_id,bill,payment) values (:supplier,:add,:bill,:payment)");

$sql->bindParam(':supplier', $supplier);
$sql->bindParam(':add', $add);
$sql->bindParam(':bill', $bill);
$sql->bindParam(':payment', $payment);
$sql->execute();
}
catch(Exception $e) {
}
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
require "connection.php";
function folder($kkk)
{
$db = new PDO('mysql:host=localhost;dbname=constro;charset=utf8', 'root', '');
$sql = $db->prepare("INSERT INTO folder (folder) VALUES (:project_name)");
$sql->bindParam(':project_name', $kkk);

$sql->execute();
if($sql->rowCount())
{
return 1;
}
else
{
return 0;
}
}
?>





