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
            <tr>
            <?php
    include '../Backend/Utils/fetchstudents.php';
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['student_name'];
        $roll = $row['student_roll'];
        $section = $row['student_section'];
        $class = $row['class_id'];

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
        <th scope="row">'.$roll.'</th>
        <td>'.$name.'</td>
        <td>'.$classname.'</td>
        <td>'.$sectionname.'</td>
        <td><button type="button" class="btn btn-success">View</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button>&nbsp;&nbsp;<button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        ';
     }
?>
            </tr>
        </tbody>
    </table>
</div>