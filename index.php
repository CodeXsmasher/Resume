<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang ='en'>
<head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatilbe" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        </style>
<title> Resume Generator</title>
</head>
<body class="w3-light" >
    <div class="container" id="cv-form">
		<a href="index.php?logout='1'" class="btn btn-primary" style="float:right;">Logout</a>
        <h1 class="text-center my-2"> Welcome <strong><?php echo $_SESSION['username']; ?></strong> to our Resume Generator!</h1>
        <p class="text-center">Enter your details below</p>

        <div class="row">
            <div class="col-md-6">
            <h3>Personal Information</h3>
            <div class= "form-group mt-2">
                <label for="nameField">Your Name</label>
                <input type="text" id="nameField" placeholder="Enter here" class="form-control" />
            </div>
        
            <div class= "form-group mt-2">
                <label for="addressField">Your Address</label>
                <textarea type="text" id="addressField" placeholder="Enter here" class="form-control" rows="3"></textarea>
            </div>

            <div class= "form-group">
              <label for="">Select Your Photo</label>
              <input type="file" id="imgField" class="form-control"></input>
          </div>

            <div class= "form-group mt-2">
                <label for="contactField">Your Contact</label>
                <input type="text" id="contactField" placeholder="Enter here" class="form-control" />
            </div>

            <div class= "form-group mt-2">
                <label for="emailField">Your Email</label>
                <input type="text" id="emailField" placeholder="Enter here" class="form-control" />
            </div>

            <div class= "form-group mt-2">
              <label for="agField">Age & Gender</label>
              <input type="text" id="agField" placeholder="Enter here (comma separate)" class="form-control" />
            </div>

            <div class= "form-group mt-2">
              <label for="hobField">Hobbies</label>
              <input type="text" id="hobField" placeholder="Enter here" class="form-control" />
            </div>

            <p class="text-secondary my-3">Important Links</p>

            <div class= "form-group mt-2">
                <label for="faceField">Facebook</label>
                <input type="text" id="faceField" placeholder="Enter here" class="form-control" />
            </div>

            <div class= "form-group mt-2">
                <label for="gitField">Github</label>
                <input type="text" id="gitField" placeholder="Enter here" class="form-control" />
            </div>

            <div class= "form-group mt-2">
                <label for="linkedField">LinkedIn</label>
                <input type="text" id="linkedField" placeholder="Enter here" class="form-control" />
            </div>
            </div>

            <div class="col-md-6">
            <h3>Professional Details</h3>

            <div class= "form-group mt-2">
                <label for="designationField">Your Designation</label>
                <input type="text" id="designationField" placeholder="Enter here" class="form-control" />
            </div>

            <div class= "form-group mt-2">
              <label for="skillField">Techinical Skills</label>
              <input type="text" id="skillField" placeholder="Enter here" class="form-control" />
          </div>

            <div class= "form-group mt-2">
                <label for="objectiveField">Career Objective</label>
                <textarea type="text" id="objectiveField" placeholder="Enter here" class="form-control" rows="2" ></textarea>
            </div>

            <div class= "form-group mt-2">
                <label for="achieveField">Achievements</label>
                <textarea type="text" id="achieveField" placeholder="Enter here" class="form-control" rows="2"></textarea>
            </div>

            <div class= "form-group mt-2">
              <label for="proField">Projects</label>
              <textarea type="text" id="proField" placeholder="Enter here" class="form-control" rows="2"></textarea>
          </div>

            <div class= "form-group mt-2">
                <label for="workField">Work Experience</label>
                <textarea type="text" id="workField" placeholder="Enter here" class="form-control" rows="4"></textarea>
            </div>

            <div class= "form-group mt-2">
                <label for="acadField">Academic Qualification</label>
                <textarea type="text" id="acadField" placeholder="Enter here" class="form-control" rows="4"></textarea>
            </div>

            <div class= "form-group mt-2">
                <label for="languageField">Languages Known</label>
                <input type="text" id="languageField" placeholder="Enter here" class="form-control" />
            </div>
            </div>
            
        </div>
        <div class="container text-center mt-3">
            <button onclick="generatecv()" class="btn btn-primary btn-lg">Generate Cv</button>
        </div>
    </div>    
    <div class="w3-content w3-margin-top" style="max-width:2790px;"id="resu1">

        <!-- The Grid -->
        <div class="w3-row-padding" id="resu">
        
          <!-- Left Column -->
          <div class="w3-third">
          
            <div class="w3-white w3-text-grey w3-card-4">
              <div class="w3-display-container">
                <img src="https://png.pngitem.com/pimgs/s/508-5087146_circle-hd-png-download.png" 
                style="width:30%;" 
                alt="Avatar" class="img-fluid myimg" 
                id="imgTemplate">
              </div>
              <div class="w3-container">
                <h2 class="w3-text-black text-center" id="nameT">Jane Doe</h2>
                <p id="destT" class="w3-center">Designer</p>
                <p id="agT" class=" w3-center"> 21, Male</p>
                <p id="addressT" class=" w3-center">123 2nd cross bapuji mysore bogadi</p>
                <p id="emailT" class=" w3-center">ex@mail.com</p>
                <p id="contactT" class=" w3-center">1224435534</p>
                
                <br>
                <p class="y"><b><i class="fa fa-star fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                <p id="skillT">Empty</p>
               
                <br>
                <p  class="y"><b><i class="fa fa-comment fa-fw w3-margin-right w3-text-teal"></i>Languages Known</b></p>
                <p id="langT">Empty</p>
               
                <br>
                <p  class="y"><b><i class="fa fa-crosshairs fa-fw w3-margin-right w3-text-teal"></i>Hobbies</b></p>
                <p id="hobT">Empty</p>
               
                <br>
                <p class="y w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Important Links</b></p>
                <p class="b">Facebook :  
                    <a id="fb1" href="">https://www.facebook.com/</a>
                </p>
                
                <p class="b">Github : 
                    <a id="git1" href="">https://www.linkedin.com/in/</a>
                </p>
                
                <p class="b">LinkedIn :
                    <a id="link1" href="">https://www.linkedin.com/in/</a>
                </p>

                <br>
              </div>
            </div><br>
      
          <!-- End Left Column -->
          </div>
      
          <!-- Right Column -->
          <div class="w3-twothird">
          
            <div class="w3-container w3-card w3-white w3-margin-bottom">
              <h4 class="w3-text-black w" id="uwu">&ensp;-> Career Objective</h4>
              <div class="w3-container">
               
                
                <p id="objectiveT" class="q">Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                <br>
              </div>
            </div>

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h4 class="w3-text-black pad" id="uwu">&ensp;-> Achievements</h4>
                <div class="w3-container">
                 
                  <p id="achT" class="a q">Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                  <br>
                </div>
            </div>

            <div class="w3-container w3-card w3-white w3-margin-bottom">
              <h4 class="w3-text-black pad" id="uwu">&ensp;-> Projects</h4>
              <div class="w3-container">
               
                <p id="proT" class="a q">Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                <br>
              </div>
            </div>


            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h4 class="w3-text-black pad"id="uwu">&ensp;-> Work Experience</h4>
                <div class="w3-container">
                 <p id="weT" class="a q">lorem</p>
                </div>
              </div>
      
            <div class="w3-container w3-card w3-white">
              <h4 class="w3-text-black pad" id="uwu">&ensp;-> Education</h4>
              <div class="w3-container">
                <p id="aqT" class="a q">lore m ipsumesunsnunf seufns fusdnsdfsfsddsfsfsfsfsfsfsfsfsfsffsdfsdfsdfsf sdfs sdf f sdf sf df sf sf dsfsgssdf sdfs fdf df fdffff</p>
              </div>
            </div>
      
          <!-- End Right Column -->
          </div>
          
        <!-- End Grid -->
        </div>
        <div class="container mt-3 text-center">
            <button onclick= "window.print()" id="down" class="btn w3-teal">Print/Save</button> 
        </div>
        <!-- End Page Container -->
      </div>
      
      <footer class="w3-container w3-teal w3-center w3-margin-top hide">
        <p>Custom Resume Generator by Sujit. 2021.</p>
      </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js" integrity="sha512-vNrhFyg0jANLJzCuvgtlfTuPR21gf5Uq1uuSs/EcBfVOz6oAHmjqfyPoB5rc9iWGSnVE41iuQU4jmpXMyhBrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>