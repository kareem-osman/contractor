<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">Add Previous Work</h2>
<h3 class="text-center">Contractor Id: <span class="database">1001</span></h3>
<!-- ........................... -->
<form method="POST" target="save.php">
<div class="sec1">
    <div class="container">
         <div class="row">
            <div class="part col-9 bg-primary">
                        <div class="id"><h3 class="text-center">Contract Data</h3></div>
                        <div class="form-group col-md-3">
                            <label for="cont_id">Contractor Id</label>
                            <input disabled placeholder="0000" type="text" class="form-control form-control-sm" id="cont_id" aria-describedby="emailHelp">
                        </div>
                        <div class="row justify-content-start">
                                <div class="form-group col-md-3">
                                    <label for="cont_no">Project Date</label>
                                    <input type="month" class="form-control form-control-sm" id="cont_no" placeholder="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="brand">Total Budget</label>
                                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="1200000 El">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="Technical">Technical Aspact</label>
                                    <input type="text" class="form-control form-control-sm" id="Technical" aria-describedby="0000000" placeholder="owner of project">
                                </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="manager">Owner</label>
                            <input type="text" class="form-control form-control-sm" id="manager" placeholder="owner of project">
                        </div>
                        <div class="form-group">
                            <label for="manager">Title</label>
                            <input type="text" class="form-control form-control-sm" id="manager" placeholder="title of project">
                        </div>

                        <button type="submit" class="btn btn-dark mb-3 ">Save Previous Work</button>
 
            </div>

            <!-- ---------------------------s2 contact-------- -->

        </div>
    </div>
</div>
</form>
<div class="submit text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Back</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>
</div>
<?php
include_once '../../include/footer.php';
?>