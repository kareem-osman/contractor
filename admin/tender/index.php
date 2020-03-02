<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">Tenders</h2>
<table class="table table-hover table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Contractor Id</th>
      <th scope="col">Tender No.</th>
      <th scope="col">Annual Budget</th>
      <th scope="col">Title</th>
      <th scope="col">Total</th>
      <th scope="col">Technical Aspect</th>
      <th scope="col">Delay</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="filter.php?contid=1001">1001</a></th>
      <td>997</td>
      <td>2020-2021</td>
      <td>station bakr</td>
      <td>150000 El</td>
      <td>86%</td>
      <td>no</td>
      <td>
            <a href="update.php?contid=1001">Update</a>
            <span>  ..  </span>
            <a href="delete.php?contid=1001">Delete</a> 
      </td>
    </tr>
    <tr>
      <th scope="row"><a href="filter.php?contid=1001">1001</a></th>
      <td>997</td>
      <td>2020-2021</td>
      <td>station bakr</td>
      <td>150000 El</td>
      <td>86%</td>
      <td>no</td>
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
            <a href="new.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Add New Tender</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>

</div>
<?php
require '../../include/footer.php';
?>