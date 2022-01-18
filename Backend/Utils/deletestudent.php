<?php
if(isset($_GET['deleteid']))
{   
        $classid = $_GET['classid'];
        $sectionid = $_GET['sectionid'];
        $schoolid = $_GET['schoolid'];

        $del_id = $_GET['deleteid'];
        $deletequery = "DELETE FROM studentsmarks WHERE student_unique_id = '$del_id'";
        $run_delete = mysqli_query($connection, $deletequery);
        
        echo
        '<script>
        window.location.href = "class.php?classid='.$classid.'&sectionid='.$sectionid.'&schoolid='.$schoolid.'";
        </script>';
}

if(isset($_GET['schoolid'])){
        $schoolid = $_GET['schoolid'];
      
        if($schoolid != $schoolsessionid)
        {
          echo
          '<script>window.location="index.php?error=accessdenied";</script>';
        }
      }
      
?>
