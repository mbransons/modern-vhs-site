<?php

    $error = "";

    $successMessage = "";

    if ($_POST) {
        
        if(!$_POST["email"]){
            
            $error .= "An email address is required.<br>";
        }
        
        if($error != "") {
            
            $error = '<div class="container"><div class="alert alert-danger col-3 alert-sm" role="alert"><p>' .$error. '</p></div></div>';
            
        } else {
            
            
            $emailTo = "michaelbransonsmith@gmail.com";
            
            $subject = "Modern VHS Subscriber";
            
            $content = "You have a new subscriber to Modern VHS";
            
            $headers = "From: ".$_POST['email'];
            
            if(mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent, I\'ll send you an update when I make this thing!</p></div>';
                
            } else {
                
                
                $error = '<div class="container"><div class="alert alert-danger col-3 alert-sm" role="alert"><p>Your message couldn\'t be sent. Please try again later.</p></div></div>';
                
            }
            
            
            
        }
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Monoton|Righteous|Russo+One" rel="stylesheet">
      
      <style type="text/css">
        
            body {
                
                position: relative;
                
            }
            
            #active {
                
                margin-top: 70px;
                
            }
          
          .container {

              text-align: center;
              margin-top: 70px;
              margin-bottom: 70px;
          }
          
          
          .jumbotron {
                
                
                background: url(images/vhs-tape-collection.jpg);
                box-shadow: inset 0 0 0 400px rgba(255, 255, 255, 0.54);
                text-align: center;
                padding: 72px 0px;
                width:100%;
                
            }
          
          .layer {
                
                background-color: rgba(248, 247, 216, 0.7);
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
              
            }
          
          h1, h4 {
  

              font-family: 'Russo One', sans-serif; 
              color: #c9302c

          }
          
          h2 {
  
              text-align: center;
              font-family: 'Russo One', sans-serif; 
              color: #ffffff;
              font-size: 1.5rem;
              padding-top: 10px;

          }
          
          hr {
              
              height:1px;
              border:none;
              color:#333;
              background-color:#333;
          }
          
          
          
          .lead, p {
              
              font-size: 1.25rem;
              
          }
          
          
          
          #footer {
              
   
              margin-top: 70px;
              margin-bottom: 70px;
              padding: 70px 25px;
              background-color: #d9534f;
              
          }
          
          #footer p {
              

              color: #FFFFFF;
              
          }
          
          .alert {
              
              margin-top: 10px;
              
          }
          
          .alert p {
              
              font-size: .95rem;
              margin: 0px;
              padding: 0px;
              
          }
 
        
        </style>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbarSpy" data-offset="140">
      
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top" id="navbarSpy">
          
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <a class="navbar-brand" href="#"> <img src="images/modern-VHS-white.svg" height="30" class="d-inline-block align-top" alt=""></a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Make a Cover!</a>
              </li>
            </ul>
            
          </div>
        
      </nav>
      
      
      
      
      <div class="jumbotron jumbotron-fluid" id="home">
      
          <img src="images/modern-VHS-red.svg" class="col-sm-8">
          
          <h1>VHS Cover Art Generator</h1>
      
          <p>Create vintage VHS cover art for today's movies.</p>
      
          <hr class="my-4 col-md-6 offset-md-3">
      
          <p>Follow this project by joining our mailing list.</p>
      

        <form class="form-inline justify-content-center" method="post">
              
            <div class="form-group ">
                
                <div class="input-group">
    
                <div class="input-group-addon">@</div>  
                <input type="email" class="form-control"  id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address">
                    
                </div>
                  <button type="submit" id="submit" style="margin-left: 10px" class="btn btn-danger">Submit</button>
  
            </div>
  
              
              
            
            </form>
          
          <div class="col-md-6 offset-md-3">
          
          <div id="error"><?php echo $error.$successMessage; ?></div>
              
              </div>

    
      </div>
      
      <div class="container col-md-6 offset-md-3" id="about">
          
          <h1>Have you ever wanted to create a retro VHS Cover?</h1>
          
          <p>With this free app you can upload a still from your favorite movie and turn it into an 80s styled VHS Cover!</p>
      
      
      
      </div>
      

      <div class="container">
      <div class="row">
                
                <div class="col-lg-4 col-md-6">
                
                    <div class="card">
                  
                        <img class="card-img-top img-fluid" src="http://2.darkroom.shortlist.com/980/71d7aec5b66f4e8b08ac5e336a2c1e72:65eab18f15d74793b62ecc5c0ce6856b/birman-or-the-unexpected-virtue-of-ignorance-2015.jpg" alt="Card image cap">
                  
                        <div class="card-block">
                    
                            <h4 class="card-title">Birdman</h4>
                    
                            <p class="card-text">This is an example of a modern VHS cover hotlinked from <a class="text-danger" href="http://www.shortlist.com/entertainment/films/these-reimagined-movie-vhs-covers-are-a-dose-of-retro-goodness">shortlist.com</a>.</p>
                    
                            <a href="#" class="btn btn-danger">Make Your Own</a>
                  
                        </div>
                
                    </div>
                    
                    
                </div>
                
                <div class="col-lg-4 col-md-6">
                
                    <div class="card">
                  
                        <img class="card-img-top img-fluid" src="http://2.darkroom.shortlist.com/980/0e059c661d0b95ab9fb39a9c8ddae587:e763dd740d2a30d8242fb4c0f1d037b6/spring-breakers-2013.jpg" alt="Card image cap">
                  
                        <div class="card-block">
                    
                            <h4 class="card-title">Spring Breakers</h4>
                    
                            <p class="card-text">This is an example of a modern VHS cover hotlinked from <a class="text-danger" href="http://www.shortlist.com/entertainment/films/these-reimagined-movie-vhs-covers-are-a-dose-of-retro-goodness">shortlist.com</a>. </p>
                    
                            <a href="#" class="btn btn-danger">Make Your Own</a>
                  
                        </div>
                
                    </div>
                    
                    
                </div>
                
                <div class="col-lg-4 col-md-6">
                
                    <div class="card">
                  
                        <img class="card-img-top img-fluid" src="http://5.darkroom.shortlist.com/980/0ff1976fc78105c950b67a2697c05fd0:704d6843ac2fd75523d30cdbf59a1824/star-wars-the-force-awakens-2015.jpg" alt="Card image cap">
                  
                        <div class="card-block">
                    
                            <h4 class="card-title">The Force Awakens</h4>
                    
                            <p class="card-text">This is an example of a modern VHS cover hotlinked from <a class="text-danger" href="http://www.shortlist.com/entertainment/films/these-reimagined-movie-vhs-covers-are-a-dose-of-retro-goodness">shortlist.com</a>.</p>
                    
                            <a href="#" class="btn btn-danger">Make Your Own</a>
                  
                        </div>
                
                    </div>
                    
                    
                </div>
            
            </div>
          </div>
      

      <div id="footer">
          
          <div class="row">
              
              <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">
          
              <img src="images/modern-VHS-white.svg">
        
              <h2>Coming soon the app!</h2>
              
          <p>Well not too soon actually. I'm going to be learning the basics of <a class="text-warning" href="https://www.python.org/">Python</a> and <a class="text-warning" href="http://opencv.org/">OpenCV</a> to try and make my first image processing application. We'll see how it goes!</p>
                  
              </div>
              
              </div>
      
      </div>
          

          

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
      
      
        $("form").submit(function (e) {
            
            var error = "";
            
            if ($("#email").val() == "") {
                
                error += "The email field is required.<br>";
  
            }
            
            if(error != "") {
                
                
            $("#error").html('<div class="alert alert-danger" role="alert"><p>' + error + '</p></div>');
                
                return false;
                
            } else {
       
                return true;
    
            }
            
        });
      
      
      </script>
  </body>
</html>