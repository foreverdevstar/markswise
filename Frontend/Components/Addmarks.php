<div class="container text-center mt-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Student
    </button>
</div>

<!-- Modal -->
<form action="" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Details and Student Marks</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Student Name" name="studentname">
                        </div>   
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Roll" name="roll">
                        </div>   
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Section" name="section">
                        </div>     
                        <div class="mb-3">
                            <p>Subect Marks</p>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Bangla" name="bangla">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="English" name="english">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Mathematics" name="maths">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="History" name="history">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Physical Science" name="physicalscience">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Life science" name="lifescience">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Geography" name="geography">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="name" placeholder="Optional Elective" name="optionalelective">
                                </div>
                            </div>
                        </div>      
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>