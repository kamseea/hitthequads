<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class ="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Organization/Company/School</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Purpose</th>
      <th scope="col">Questions/Inquiries</th>
    </tr>
  </thead>
  <tbody>
    <!--loop-->
    <?php
    for ($i = 0; $i < sizeof($item); $i++){
    ?>
    <tr>
        <td><?php echo urldecode($item[$i] -> id);?></td>
        <td><?php echo urldecode($item[$i] -> name);?></td>
        <td><?php echo urldecode($item[$i] -> organization);?></td>
        <td><?php echo urldecode($item[$i] -> email);?></td>
        <td><?php echo urldecode($item[$i] -> phone);?></td>
        <td><?php echo urldecode($item[$i] -> date);?></td>
        <td><?php echo urldecode($item[$i] -> time);?></td>
        <td><?php echo urldecode($item[$i] -> purpose);?></td>
        <td><?php echo urldecode($item[$i] -> questions);?></td>
        <td><button type="button" class="delete-btn"><a href= "<?php echo 'http://localhost/quads/index.php/napwc/delete_appointment/' . $item[$i] -> id; ?>" class="delete-txt"> Delete </img> </a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
    </body>

