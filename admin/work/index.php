<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">Previous Works</h2>
<h3 class="text-center">Contractor Id: <span class="database">1001</span></h3>
<table class="table table-hover table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Project Name</th>
      <th scope="col">Total Budget</th>
      <th scope="col">Date</th>
      <th scope="col">Owner</th>
      <th scope="col">Technical Aspect</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10</th>
      <td>suez pro</td>
      <td>120000</td>
      <td>2020</td>
      <td>suez company</td>
      <td>86%</td>
      <td>
            <a href="update.php?contid=1001">Update</a>
            <span>  ..  </span>
            <a href="delete.php?contid=1001">Delete</a> 
      </td>
    </tr>
  </tbody>
</table>
<div class="submit text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="../contractor/index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Back</a>
            <a href="new.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Add New Pervious Work</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>
</div>
<?php
require '../../include/footer.php';
?>