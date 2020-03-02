<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">Updata Tender Data</h2>
<!-- ........................... -->
<form method="POST" target="updatasave.php">
<div class="sec1">
    <div class="container">
         <div class="row">
            <div class="part col-7 bg-primary">
                        <div class="id"><h3 class="text-center">Tender Data</h3></div>
                        <div class="form-group col-md-3">
                            <label for="cont_id">Contractor Id</label>
                            <input placeholder="0000" type="text" class="form-control form-control-sm" id="cont_id" aria-describedby="emailHelp">
                        </div>
                        <div class="row justify-content-start">
                                <div class="form-group col-md-3">
                                    <label for="cont_no">Tender No.</label>
                                    <input type="text" class="form-control form-control-sm" id="cont_no" placeholder="9999">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="brand">Annual Budget</label>
                                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="2020-2021">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="total">Total</label>
                                    <input type="text" class="form-control form-control-sm" id="total" aria-describedby="0000000" placeholder="000000">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="manager">Title</label>
                            <input type="text" class="form-control form-control-sm" id="manager" placeholder="title of contract">
                        </div>
                        <button type="submit" class="btn btn-dark mb-2 col-md-6">Save Tender Data</button>
 
            </div>

            <!-- ---------------------------s2 contact-------- -->
            <div class="part col-4 bg-info">
                        <div class="id"><h3 class="text-center">Executive Report</h3></div>
                        <div class="form-group">
                            <label for="tech">Technical Aspect</label>
                            <input type="text" class="form-control form-control-sm" id="tech" placeholder="00%">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="delay">Delay</label>
                            <input type="text" class="form-control form-control-sm" id="delay" placeholder="00%">
                        </div>
                        <div class="form-group">
                            <label for="reason">Delay Reason</label>
                            <textarea class="form-control" id="reason" rows="3" placeholder="enter reason of delay"></textarea>
                        </div>
            </div>
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