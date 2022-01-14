<?php
    include '../Backend/Utils/fetchstudent.php';
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['student_name'];
        $roll = $row['student_roll'];
        $section = $row['student_section'];
        $class = $row['class_id'];
        $studentid = $row['student_unique_id'];

        $bangla = $row['bangla'];
        $english = $row['english'];
        $maths = $row['maths'];
        $history = $row['history'];
        $physical_science = $row['physical_science'];
        $life_science = $row['life_science'];
        $geography = $row['geography'];
        $optional_elective = $row['optional_elective'];

        $school_name =  $_SESSION['school_name'];

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

    }
?>

<div class="container">
    <div class="container student-view-body" id="printableArea">
        <h2 class="school-name text-center"><?php echo $school_name ?></h2>
        <p class="student-id text-center">Student Unique ID: <?php echo $studentid ?></p>
        <h3 class="student-name text-center">Name: <?php echo $name ?></h3>
        <h4 class="student-class-section text-center">Class: <?php echo $classname ?> Section:
            <?php echo $sectionname ?></h4>
        <h4 class="student-roll text-center mb-3">Roll: <?php echo $roll ?></h4>
        <h5 class="student-roll text-center mb-3"><u>Marks</u></h5>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bangla</th>
                    <th scope="col">English</th>
                    <th scope="col">Maths</th>
                    <th scope="col">History</th>
                    <th scope="col">Physical Sc.</th>
                    <th scope="col">Life Sc.</th>
                    <th scope="col">Geography</th>
                    <th scope="col">Optional Elective</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $bangla ?></td>
                    <td><?php echo $english ?></td>
                    <td><?php echo $maths ?></td>
                    <td><?php echo $history ?></td>
                    <td><?php echo $physical_science ?></td>
                    <td><?php echo $life_science ?></td>
                    <td><?php echo $geography ?></td>
                    <td><?php echo $optional_elective ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <button type="button" class="btn btn-success mt-3 float-end" onclick="printDiv('printableArea')">Print Marksheet</button>
</div>

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
</script>
