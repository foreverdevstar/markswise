<?php
if(isset($_GET['deleteid']) && isset($_GET['schoolid']) && isset($_GET['sectionid']))
{   
        $del_id = $_GET['deleteid'];
        $deletequery = "DELETE FROM studentsmarks WHERE student_unique_id = '$del_id'";
        $run_delete = mysqli_query($connection, $deletequery);
}
?>