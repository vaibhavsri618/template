<?php


require 'connection.php';
require 'header.php'?>

<?php
require 'asider.php'
?>
<?php
$error=array();
if (isset($_POST['submit'])) {
    $categories=isset($_POST['categories'])?$_POST['categories']:'';
    if ($categories=="") {
        $error[]=array("id"=>'form','msg'=>"Field cant be empty");
    
    }
    if (count($error)==0) {

        $sql = "INSERT INTO categories (name)
VALUES ('".$categories."')";

        if ($conn->query($sql) === true) {
            echo "<p style='margin-left:20%'><b>New record created successfully<b></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }
    
}

?>


<form method="post" action="#">
<fieldset>
    <p style="margin-left:20%;margin-top:5%">
    <label>Categories Name</label>
    <input type="text" name="categories" class="text-input small-input">
    </p>
    <p style="margin-left:20%;">
    <input class="button" type="submit" value="Submit" name="submit" />
    </p>
               
</fieldset>
              
</form>

<?php
require 'footer.php'
?>