<?php
include '../Backend/Utils/handleeditstudent.php';
include '../Backend/Utils/fetchstudent.php';
    while($row = mysqli_fetch_assoc($result))
    {
        $classid = $row['class_id'];
        $sectionid = $row['student_section'];
        $studentid= $row['student_unique_id'];
        $schoolid= $row['school_unique_id'];

        $bangla = $row['bangla'];
        $english = $row['english'];
        $maths = $row['maths'];
        $history = $row['history'];
        $physical_science = $row['physical_science'];
        $life_science = $row['life_science'];
        $geography = $row['geography'];
        $optional_elective = $row['optional_elective'];
    }
?>

<form action="../Backend/Utils/handleeditstudent.php?classid=<?php echo $classid ?>&sectionid=<?php echo $sectionid ?>&studentid=<?php echo $studentid ?>&schoolid=<?php echo $schoolid ?>" method="post">
    <div class="container">
        <div class="mb-3">
            <h3 class="mb-5 mt-4">Edit Subect Marks</h3>
            <div class="row mb-3">
                <div class="col">
                    <p>Bangla</p>
                    <input type="text" class="form-control" id="name" placeholder="Bangla" name="bangla" value="<?php echo $bangla ?>">
                </div>
                <div class="col">
                    <p>English</p>
                    <input type="text" class="form-control" id="name" placeholder="English" name="english" value="<?php echo $english ?>">
                </div>
                <div class="col">
                    <p>Maths</p>
                    <input type="text" class="form-control" id="name" placeholder="Mathematics" name="maths" value="<?php echo $maths ?>">
                </div>
                <div class="col">
                    <p>History</p>
                    <input type="text" class="form-control" id="name" placeholder="History" name="history" value="<?php echo $history ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Physical Science</p>
                    <input type="text" class="form-control" id="name" placeholder="Physical Science" name="physicalscience" value="<?php echo $physical_science ?>">
                </div>
                <div class="col">
                    <p>Life Science</p>
                    <input type="text" class="form-control" id="name" placeholder="Life science" name="lifescience" value="<?php echo $life_science ?>">
                </div>
                <div class="col">
                    <p>Geography</p>
                    <input type="text" class="form-control" id="name" placeholder="Geography" name="geography" value="<?php echo $geography ?>">
                </div>
                <div class="col">
                    <p>Open Elective</p>
                    <input type="text" class="form-control" id="name" placeholder="Optional Elective" name="optionalelective" value="<?php echo $optional_elective ?>">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Update Marks</button>
    </div>

</form>