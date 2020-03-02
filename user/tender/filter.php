<?php
$cr_url='../../';
include_once '../../include/header.php';
?>
<div id="main" class="my-5">
<h2 class="text-center">Tenders</h2>
<h3 class="text-center">Contractor Id: <span class="database">1001</span></h3>
<table class="table table-hover table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Contract No.</th>
      <th scope="col">Annual Budget</th>
      <th scope="col">Title</th>
      <th scope="col">Total</th>
      <th scope="col">Technical Aspect</th>
      <th scope="col">Delay</th>
      <th scope="col">Delay Reason</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1001</th>
      <td>997</td>
      <td>2020-2021</td>
      <td>station bakr</td>
      <td>150000 El</td>
      <td>86%</td>
      <td>no</td>
      <td>null</td>
    </tr>
    <tr>
      <th scope="row">1001</th>
      <td>997</td>
      <td>2020-2021</td>
      <td>station bakr</td>
      <td>150000 El</td>
      <td>86%</td>
      <td>no</td>
      <td>null</td>
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