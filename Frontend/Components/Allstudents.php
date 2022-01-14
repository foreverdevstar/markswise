<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Roll</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Section</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
    include '../Backend/Utils/fetchstudents.php';
    include '../Backend/Utils/deletestudent.php';
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['student_name'];
        $roll = $row['student_roll'];
        $section = $row['student_section'];
        $class = $row['class_id'];

        $student_unique_id = $row['student_unique_id'];
        $school_id = $_SESSION['school_id'];

        if($section == 1)
        {
            $sectionname = "A";
        }
        elseif($section == 2)
        {
            $sectionname = "B";
        }
        else{
            $sectionname = "C";
        }

        if($class == 1)
        {
            $classname = "V";
        }
        elseif($class == 2)
        {
            $classname = "VI";
        }
        elseif($class == 3)
        {
            $classname = "VII";
        }
        elseif($class == 4)
        {
            $classname = "VIII";
        }
        elseif($class == 5)
        {
            $classname = "IX";
        }
        elseif($class == 6)
        {
            $classname = "X";
        }
        echo
        '
        <tr>
        <th scope="row">'.$roll.'</th>
        <td>'.$name.'</td>
        <td>'.$classname.'</td>
        <td>'.$sectionname.'</td>
        <td><a href="viewstudent.php?studentid='.$student_unique_id.'"><button type="button" class="btn btn-success">View</button></a>&nbsp;&nbsp;
        <a href="editstudent.php?studentid='.$student_unique_id.'"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button></a>&nbsp;&nbsp;
        <a href="class.php?deleteid='.$student_unique_id.'&classid='.$class.'&sectionid='.$section.'&schoolid='.$school_id.'"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>
        </tr>';
     }
?>
            
        </tbody>
    </table>
</div>