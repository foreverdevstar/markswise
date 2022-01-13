<!-- button to trigger add class -->
<div class="container mt-3 text-center">
    <button class="btn btn-primary addclass-btn" data-bs-toggle="modal" data-bs-target="#addclassModal"><i
            class="fas fa-plus-circle"></i> Add Class</button>
</div>
<!-- Modal -->
<form method="POST" action="../Backend/Authentication/handleaddclass.php">
    <div class="modal fade" id="addclassModal" tabindex="-1" aria-labelledby="addclassModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addclassModalLabel">Add Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form inside modal -->
                    <select class="form-select" aria-label="Default select example" name="selectclass">
                        <option selected>Open to select class</option>
                        <option value="five">Five</option>
                        <option value="six">Six</option>
                        <option value="seven">Seven</option>
                        <option value="eight">Eight</option>
                        <option value="nine">Nine</option>
                        <option value="ten">Ten</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>