<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h1{
            color:#204c37;
            text-align:center;
            font-weight:700;
            padding-top:20px;
        }
        </style>
</head>
<body>
    
    </div>

      <!--form-->
      <div class="container"> 
        <h1> Field Trip Reservation </h2>
      <form action="http://localhost/quads/index.php/napwc/add_fieldtrip" method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="pokename" class="form-label">Name of School/Organization</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="typeone" class="form-label">Contact Person</label>
    <input type="text" class="form-control" name="contactperson" id="contactperson">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <h4> Field Trip Details </h4>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Number of Participants</label>
    <input type="number" class="form-control" name="participants" id="participants">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Grade Level</label>
    <input type="text" class="form-control" name="gradelevel" id="gradelevel">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Any special requests/comments? (optional) </label>
    <input type="text" class="form-control" name="request" id="request">
  </div>
  <div class="mb-3">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="typetwo" class="form-label">I agree to abide by the rules and regulations of Ninoy Aquino Parks and Wildlife Center for the field trip.
    </label>
    
  </div>
  
  <button type="submit" class="btn btn-primary" value="add_fieldtrip" name="submit">Submit</button> <br><br><br>
</form>
      </div>
</div>
</body>
</html>