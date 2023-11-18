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
        <h1> Appointment Reservation </h2>
      <form action="http://localhost/quads/index.php/napwc/add_appointment" method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="organization" class="form-label">Organization/Company/School</label>
    <input type="text" class="form-control" name="organization" id="organization" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <h4> Appointment Details </h4>
  <div class="mb-3">
    <label for="date" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <label for="purpose" class="form-label">Purpose of Appointment</label>
    <input type="text" class="form-control" name="purpose" id="purpose">
  </div>
  <div class="mb-3">
    <label for="questions" class="form-label">Questions/Inquiries (optional) </label>
    <input type="text" class="form-control" name="questions" id="questions">
  </div>
  <div class="mb-3">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="typetwo" class="form-label"> I understand that this appointment is subject to availability, 
        and I agree to comply with the rules and regulations of Ninoy Aquino Parks and Wildlife Center during my visit.
    </label>
  </div>
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button> <br><br><br><br>
</form>
      </div>
</div>
</body>
</html>