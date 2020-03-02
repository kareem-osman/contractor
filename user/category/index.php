<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">All Category</h2>
<table class="table table-hover table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Department</th>
      <th scope="col">Description</th>
      <th scope="col">Contractor</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10</th>
      <td>clading</td>
      <td>civil</td>
      <td> desssssscrb</td>
      <td>
        <a href="../contractor/filter.php?catid=1001">click</a>
      </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>cut</td>
      <td>mech</td>
      <td> desssssscrb</td>
      <td>
        <a href="../contractor/filter.php?catid=1001">click</a>
      </td>
    </tr>

    
  </tbody>
</table>
    <div class="submit text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="../contractor/index.php" class="btn btn-outline-primary px-5 btn-lg" role="button" aria-pressed="true">Back</a>
            <a href="../../logout.php" class="btn btn-outline-primary px-5 btn-lg " role="button" aria-pressed="true">Log out</a>
        </div>
    </div>

</div>
<?php
require '../../include/footer.php';
?>