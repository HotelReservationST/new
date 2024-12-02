<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css" class="ref">
</head>
<body class="Body" style="background-image: url('image/hotel.webp'); ">

    <div class="row">
            <!-- COL IS USED TO CLASIFY THE SIZE OF EACH DIVIDED SECTION -->
    <div class="col-md-3 bg-secondary">
    
      <!-- PROFILE SECTION  -->
      <div class="upper">
      <div class="profile d-none d-md-grid text-white mt-4 justify-content-center ">
      <img src="image/png.png" alt="Logo1" width="100px" height="100px" style="border-radius: 50%;"class="png">
      <h2>Admin</h2>
  </div>
</div> 

<nav class="navbar navbar-expand-lg bg-secondary" >
  <div class="container-fluid">
    <img src="image/png.png" alt="Logo1" width="40px" height="40px" style="border-radius: 50%;"class="png d-md-none">
    <h2 class="d-md-none text-white">Admin</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- NAVIGATION LINKS SECTION  -->
      <div class="nav flex-column">
        <a class="custom-link" href="BookRoom.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/table.svg" alt="table" width="28" height="28">&emsp;Add Booking</a>
        <a class="custom-link" href="Cbooking.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/request.jpg" alt="request" width="28" height="28">&emsp;Booking Request</a>
        <a class="custom-link" href="ConfirmBook.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/Con.png" alt="table" width="28" height="28">&emsp;Booked Room</a>
          <a class="custom-link" href="AddRoom.php"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/pencil-square.svg" alt="edit" width="28" height="28">&emsp;Hotel Room List</a>
                 <!-- OFFCANVAS BUTTON  -->
          <a class="custom-link" href="admin.php"><img class="bg-light border border-secondary rounded-1 ms-1" src="icon/person-plus.svg" alt="edit" width="28" height="28">&emsp;Admin Accounts</a>
          <a class="custom-link" href="#" id="logout"><img class="bg-light border border-dark rounded-1 ms-1" src="icon/door-open.svg" alt="edit" width="28" height="28">&emsp;Logout</a>

          
          
      </div>
  
        </div>
        
  </div>
    </nav>
  </div>


      <div class="col-md-6 mt-5">
        <h1 class="text-center">Admin Accounts</h1>
    <table class="table table-hover mt-5 ">
        <thead class="table-danger">
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col"> Username </th>
            <th scope="col"> Password </th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        <tbody class="table-secondary" id="DisplayAdmin"></tbody>
    </table>
     </div>

     <div class="col-md-3 bg-secondary text-white fs-5">
        <div class="container">
            <div class="addfrm mx-5 pt-5">
              <div class="form-head mb-2"><h2 class="text-center">Register New Admin Account</h2></div>  
     
              <form class="newAdmin" id="frmAddAdmin">
        <div class="mb-3">
        <label for="setfname" class="form-label">First Name:</label>
        <input type="text" class="form-control border-dark" placeholder="Enter Firstname" id="setfname" required>
      </div>
      <div class="mb-3">
        <label for="setlname" class="form-label">Last Name:</label>
        <input type="text" class="form-control border-dark" placeholder="Enter Lastname" id="setlname" required>
      </div>
      <div class="mb-3">
        <label for="setusername" class="form-label">Username:</label>
        <input type="text" class="form-control border-dark"placeholder="Set username" id="setusername" required>
      </div>
      <div class="mb-3">
        <label for="setpassword" class="form-label">Password:</label>
        <input type="password" class="form-control border-dark"placeholder="Set Password" id="setpassword" required>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</div>


<!-- EDIT BOOKING MODAL  -->
<div class="modal fade" id="editAccountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAccountModalLabel" aria-hidden="true">
  <form id="frmEditAccount">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlEditAccountLabel">Edit Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        
        <!-- FORM FOR EDITING DATA TO THE TABLE -->

        <div class="mb-3">
          <label class="form-label" for="setEditfname">First Name:</label>
          <input type="hidden" class="form-control" id="setEditID">
          <input type="text" class="form-control" id="setEditfname" required>
      </div>
      <div class="mb-3">
          <label class="form-label" for="setEditlname">Last Name:</label>
          <input type="text" class="form-control" id="setEditlname" required>
      </div>
      <div class="mb-3">
          <label class="form-label" for="setEditusername">Username:</label>
          <input type="text" class="form-control" id="setEditusername" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="setEditpass">Password:</label>
        <input type="text" class="form-control" id="setEditpass" required>
    </div>
      

       <!-- EDIT MODAL CLOSING & SAVE BUTTON  -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update data</button>
      </div>
    </div>
  </form>
  </div>



</div>
</div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.js"></script>
    <script src="js/index.js"></script>
</body>
<script>
// THE FUNCTION OF ADD DATA BUTTON TO SUBMIT DATA 
    $("#frmAddAdmin").submit(function (e) {
    e.preventDefault(); 
    saveAdmin();
  });
  // THE FUNCTION OF EDIT DATA BUTTON TO SUBMIT DATA 
  $("#frmEditAccount").submit(function (e) {
    e.preventDefault();
    updateAccount();
  });

  $(document).ready(function () {
    // Handle the logout button click
    $("#logout").click(function (e) {
        e.preventDefault();
        
        // Perform any logout-related actions here, such as clearing user session data if used.
        
        // Redirect to the login form in index.html
        window.location.href = "index.php";
    });
});

</script>

</html>