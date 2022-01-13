<div class="container all-classes-container">
    <h2 class="mb-3">All Classes</h2>
    <div class="row">
    <?php
    include '../Backend/Utils/fetchclasses.php';
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['class_id'];
        $name = $row['class_name'];
        echo
        '
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">'.$name.'</h5>
            <p class="card-text">Click to visit this class</p>
            <a href="class.php?classid='.$id.'" class="btn btn-primary">Enter Class</a>
        </div>
        </div>
        ';
     }
    ?>
        
    </div>
</div>