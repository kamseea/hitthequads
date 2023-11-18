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
        <h1> Book a Facility </h2>
      <form action="http://localhost/quads/index.php/napwc/add_facilities" method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="name" class="form-label">Name of School/Organization</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="contactperson" class="form-label">Contact Person</label>
    <input type="text" class="form-control" name="contactperson" id="contactperson">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <h4> Booking Details </h4>
  <div class="mb-3">
    <label for="date" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="type" class="form-label">Type of Facility</label> <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Amphitheater"> Ampitheater  <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Tea House"> Tea House <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Fishing Village"> Fishing Village <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Picnic Sheds"> Picnic Sheds <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Bulwagan Ninoy"> Bulwagan Ninoy <br>
    </div>
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="purpose" class="form-label">Purpose of Booking</label> <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Commercial Filming/Photography"> Commercial Filming/Photography <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Photoshoot"> Commercial Filming/Photography <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Seminar/Conference"> Seminar/Conference <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Recreational"> Recreational <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Birthday"> Birthday<br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Wedding"> Wedding <br>
    </div>
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Number of Participants</label>
    <input type="text" class="form-control" name="participants" id="participants">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Any special requests/accomodations needed? (optional) </label>
    <input type="text" class="form-control" name="request" id="request">
  </div>
  <div class="mb-3">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="typetwo" class="form-label">I agree to abide by the rules and regulations of Ninoy Aquino Parks and Wildlife Center's facilites.
    </label>
  </div>
  
  
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button> <br> <br> <br> <br>
</form>
      </div>
</div>
</body>
</html>