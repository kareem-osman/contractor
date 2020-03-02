<?php
$cr_url='../../';
require '../../include/header.php';
?>
<div id="main" class="my-5">
  <form method="post" action="updatasave.php">
  <div class="id"><h2 class="text-center">Update of Contractor Data</h2></div>
<div class="sec1">
    <div class="container">
         <div class="row">
            <div class="part col-7 bg-primary">
                        <div class="id"><h3 class="text-center">Main Data</h3></div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">ID</label>
                            <input disabled placeholder="0000" type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="cont_name">Contractor Name</label>
                            <input type="text" class="form-control form-control-sm" id="cont_name">
                        </div>
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control form-control-sm" id="brand" placeholder="Gpc">
                        </div>
                        <div class="form-group">
                            <label for="manager">Managing Dirctor Name</label>
                            <input type="text" class="form-control form-control-sm" id="manager" placeholder="mohamed ali osama">
                        </div>
            </div>
            <!-- ---------------------------s2 contact-------- -->
            <div class="part col-4 bg-info">
                        <div class="id"><h3 class="text-center">Contact Data</h3></div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control form-control-sm" id="cont_name" placeholder="20th mustafa street">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">City</label>
                            <input type="text" class="form-control form-control-sm" id="brand" placeholder="cairo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Whats Up</label>
                            <input type="text" class="form-control form-control-sm" id="manager" placeholder="0100-0000-000">
                        </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------phone----- -->
<div class="sec5">
     <div class="container">
            <div class="id"><h3 class="text-center">Phone Contact Data</span></h3></div>
            <div class="part3 row justify-content-around bg-info"> 
                    <div class="form-group col-3">
                        <label for="tel1">phone 1</label>
                        <input placeholder="0100-0000-000" type="text" class="form-control form-control-sm" id="tel1" aria-describedby="emailHelp">
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>mobile</option>
                            <option>landline</option>
                            <option>whats up</option>
                        </select>
                    </div>   
                    <div class="form-group col-3">
                        <label for="tel2">phone 2</label>
                        <input placeholder="0100-0000-000" type="text" class="form-control form-control-sm" id="tel2" aria-describedby="emailHelp">
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>mobile</option>
                            <option>landline</option>
                            <option>whats up</option>
                        </select>
                    </div>   
                    <div class="form-group col-3">
                        <label for="tel3">phone 3</label>
                        <input placeholder="0100-0000-000" type="text" class="form-control form-control-sm" id="tel3" aria-describedby="emailHelp">
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>mobile</option>
                            <option>landline</option>
                            <option>whats up</option>
                        </select>
                    </div>   
                    <div class="form-group col-3">
                        <label for="tel4">phone 4</label>
                        <input placeholder="0100-0000-000" type="text" class="form-control form-control-sm" id="tel4" aria-describedby="emailHelp">
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>mobile</option>
                            <option>landline</option>
                            <option>whats up</option>
                        </select>
                    </div>   
             </div>
     </div>
 </div>
<!-- --------------phone----- -->
  <!-- --------------------------se3-category--------- -->
  <div class="sec3">
    <div class="container">
    <div class="id"><h3 class="text-center">Documention Data</span></h3></div>
        <div class="row">
          <div class="docu col-4 bg-info">
                <div class="form-group">
                    <label for="exampleInputPassword1">Construction & Building Certificate</label>
                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="000000">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Data Expire</label>
                    <input type="date" class="form-control form-control-sm" id="manager" >
                </div>
          </div>
          <!-- -------- -->
          <div class="docu col-3 bg-primary">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tax Card No.</label>
                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="000000">                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Data Expire</label>
                    <input type="date" class="form-control form-control-sm" id="manager" >
                </div>
          </div>
          <!-- ------------ -->
          <div class="docu col-4 bg-info">
                <div class="form-group">
                    <label for="exampleInputPassword1">Commercial Register No</label>
                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="000000">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Financial Report</label>
                    <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
          </div>
          
      </div>
    </div>
  </div>
<!-- --------------cert----- -->
<div class="sec5">
     <div class="container">
            <div class="id"><h3 class="text-center">Contarctor & Buildig Certificate</span></h3></div>
            <div class="part3 row justify-content-around bg-info">
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">civil</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">elec</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">mech</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">petrolum</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">soil</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">water</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">ground</label>
                        <select class="custom-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>first</option>
                            <option>second</option>
                            <option>3th</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                        </select>
                    </div>  
             </div>
     </div>
 </div>
<!-- --------------cert----- -->
  <!-- --------------------------se6-category--------- -->
 <div class="sec4">
     <div class="container">
         <div class="id"><h3 class="text-center">Category</span></h3></div>
        <div class="part2 bg-info">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">civil</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">electric</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">mech</label>
                </div>
        </div>
     </div>
 </div>
<div class="submit text-center">
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Back</a>
    <button type="submit" class="btn btn-outline-primary btn-lg px-5 mx-5">Save Contractor Data</button>
    <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
    </div>
</div>
  </form>
</div>
<?php
require '../../include/footer.php';
?>

