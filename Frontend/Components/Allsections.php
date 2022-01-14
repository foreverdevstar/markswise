<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    echo
    '<div class="container all-classes-container">   
    <h2 class="mb-3">All Sections</h2>
    <div class="row">';
    include '../Backend/Utils/fetchsections.php';
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['section_id'];
        $name = $row['section_name'];
        echo
        '
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">'.$name.'</h5>
            <p class="card-text">Click to visit this class</p>
            <a href="class.php?sectionid='.$id.'&schoolid='.$_SESSION['school_id'].'"><button class="btn btn-primary">Enter Class</button></a>
        </div>
        </div>
        ';
     }
     echo
     '</div>
     </div>';    
}
else{
    echo'
    <div class="container mt-3">
        <div class="alert alert-warning" role="alert">
            Please login to get started.
        </div>
    </div>
    ';
}
    ?>