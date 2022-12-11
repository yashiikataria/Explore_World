
<?php
//including the database connection file
include("form.php");
if(isset($_POST['Submit'])) {    
$pname = $_POST['pname'];
$pemail = $_POST['pemailid'];
$pplace = $_POST['pplace'];
$ppreviews=$_POST['previews'];
        
// checking empty fields
//if(empty($pname) || empty($pemail) || empty($pplace)|| empty($ppreviews)) 
//{                
//if(empty($pname)) {
//echo "<font color="red">Name field is empty.</font><br>";
//}
//if(empty($pemail)) {
//echo "<font color="red">Email-id field is empty.</font><br>";
//}
//if(empty($pplace)) {
//echo "<font color="red">Place field is empty.</font><br>";
//}
//if(empty($ppreviews)) {
  // echo "<font color="red">Reviews field is empty.</font><br>";
   //}

//link to the previous page
 //echo "<br><a href="javascript:self.history.back();">Go Back</a>";
 //} else { 
// if all the fields are filled (not empty)             
//insert data to database
$result = mysqli_query($cser, "INSERT INTO reviews(FirstName,Place,Reviews,email) VALUES('$pname','$pplace','$ppreviews','$pemail')");

//display success message
echo "Data added successfully.";
        
}
//}
?>