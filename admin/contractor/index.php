<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">All Contractor</h2>
<table class="table table-hover table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Contractor Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1001</th>
      <td>The General Petrolum Company</td>
      <td>Gpc</td>
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
            <a href="../../index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Home</a>
            <a href="new.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Add New Contractor</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>

</div>
<?php
require '../../include/footer.php';
?>