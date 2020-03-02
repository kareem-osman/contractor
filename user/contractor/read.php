<?php
$cr_url='../../';
require '../../include/header.php';
?>
<div id="main" class="my-5">
  <div class="id">
    <h3 class="text-center">Contractor Data</span></h3>
    <h3 class="text-center">ID: <span class="database">1001</span></h3>
  </div>
    <div class="data col-10">
          <div class="container">
              <div class="card bg-white" >
                <div class="row no-gutters">
                  <div class="col-md-2">
                    <img src="<?=$cr_url?>imges/main_data.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <h5 class="card-title">Main Data</h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <span class="database">general ptrolum company</span></li>
                        <li class="list-group-item">Brand Name: <span class="database">Gpc</span></li>
                        <li class="list-group-item">Managing Director Name: <span class="database">kareem osman</span></li>
                      </ul>
                      <div class="card-body">
                        <a href="../tender/filter.php?contid=1001" class="card-link">Tenders</a>
                        <a href="../work/filter.php?contid=1001" class="card-link">Previous Works</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
          </div>
    </div>
    <div class="row">
          <div class="contect col-md-4">
                <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">Contact Data</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email: <span class="database">gpc9287@gmail.com</span></li>
                        <li class="list-group-item">Address: <span class="database">assiut</span> <span class="database">10 street</span></li>
                        <li class="list-group-item">Phone: <span class="database">01005787697</span>-<span class="database">01111525337</span></li>
                    </ul>
                  </div>
                </div>
          </div>
          <div class="docum col-md-7">
                <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Document Data</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <div class="row justify-content-center">
                              <ul class="list-group ">
                                <li class="list-group-item">Contractor Certificate No.: <span class="database">120-252</span> </li>
                                <li class="list-group-item">Commercial Regsiter No.: <span class="database">120-252</span> </li>
                                <li class="list-group-item">Tax Card No.: <span class="database">120-252</span> </li>
                              </ul>
                              <ul class="list-group ">
                                <li class="list-group-item">- Date Expire: <span class="database">20-2-2020</span></li>
                                <li class="list-group-item">- Date Expire: <span class="database">20-2-2020</span></li>
                                <li class="list-group-item">- Date Expire: <span class="database">20-2-2020</span></li>
                              </ul>
                      </div>
                    </div>
                  </div>
          </div>
    </div>
   <!-- -------------------------------  -->
    <div class="cert bg-white">
          <h3 class="text-center text-info my-3">Construction Certificate</h3>
          <div class="row justify-content-around">
                <ul class="list-group list-group-flush">
                              <li class="list-group-item">Division: <span class="database">first</span></li>
                              <li class="list-group-item">Specialization: <span class="database">civil</span></li>
                              <li class="list-group-item">Category: <span class="database">7th</span></li>
                </ul>
                <ul class="list-group list-group-flush">
                              <li class="list-group-item">Division: <span class="database">first</span></li>
                              <li class="list-group-item">Specialization: <span class="database">civil</span></li>
                              <li class="list-group-item">Category: <span class="database">7th</span></li>
                </ul>
                <ul class="list-group list-group-flush">
                              <li class="list-group-item">Division: <span class="database">first</span></li>
                              <li class="list-group-item">Specialization: <span class="database">civil</span></li>
                              <li class="list-group-item">Category: <span class="database">7th</span></li>
                </ul>
          </div>
    </div>
<!-- ------------------- -->
    <div class="tags text-center bg-white">
    <h3 class="text-center text-info my-3">Categorys</h3>
          <a href="#"><span class="database">civil</span></a> 
          <span> .. </span>
          <a href="#"><span class="database">electrical</span></a> 
          <span> .. </span>
          <a href="#"><span class="database">Mechanical</span></a> 
    </div>
    <!-- ---------------- -->
    <div class="submit text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Back</a>
            <a href="all.php" class="btn btn-primary px-5 btn-lg" role="button" aria-pressed="true">All Contractor</a>
            <a href="../category/index.php" class="btn btn-primary px-5 btn-lg" role="button" aria-pressed="true">All Category</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>
</div>
<?php
require '../../include/footer.php';
?>

