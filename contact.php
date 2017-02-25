<?php
$showMessage = false;
$error = false;
if(isset($_POST["email"]))
{
    if(empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["message"]))
    {
        $error = true;
    }
    else
    {
            $email = $_POST["email"];
            $name = $_POST["name"];
            $message = $_POST["message"];

            $recipient = "vonettastevenson@gmail.com";

            $mailBody = "This mail is from: $email \n $message";

            mail($recipient,$name,$mailBody);

            $showMessage = true;
    }

}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bryan Adams Portfolio</title>
        <link href="https://fonts.googleapis.com/css?family=Maitree:300,400,500,600,700" rel="stylesheet">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom css stylesheet -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>


        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                        <a class="navbar-brand" href="#">Bryan Adams</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav text-center">
                            <li><a href="index.html">Portfolio</a></li>
                            <li class="active"><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>

                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>

        <div class="container">
            <main>
                <h1>Contact Me</h1>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">

                          <p class="required small">* = Required fields</p>
                          <!--begin HTML Form-->

     <form action"contact.php" method="post" class="contact">
         <?php
         if($showMessage){
             echo '<h2>Your email has been sent, Thank you!</h2>';
         }
         if($error){
             echo '<h2>Please fill out all required info.</h2>';
         }

         ?>

         <div class="form-group row">
             <label for="name" class="col-xs-2 col-form-label"><span class="glyphicon glyphicon-asterisk"></span> Name</label>
             <div class="col-xs-10">
                 <input class="form-control" type="text" placeholder="Enter Name" id="example-text-input" name="name" required>
             </div>
         </div>

         <div class="form-group row">
             <label for="email" class="col-xs-2 col-form-label"><span class="glyphicon glyphicon-asterisk"></span> Email </label>
             <div class="col-xs-10">
                 <input class="form-control" type="email" placeholder="email@email.com" placeholder="email@email.com" id="example-email-input" name="email" required>
             </div>
         </div>

         <div class="form-group row">
             <label for="message" class="col-xs-2 col-form-label">Message</label>
             <div class="col-xs-10">
                 <textarea class="form-control" id="exampleTextarea" rows="5" cols="40" type="textarea" placeholder="Enter your message here" name="message"></textarea>
             </div>
         </div>
         <div class="form-group row">
             <button type="submit" class="btn btn-primary pull-right" value="Send Us an Email">Submit</button>
         </div>
     </form>
                          <!--end col block--></div>
                    </div>
                </div>

            </main>

            <footer>
                <div class="container-fluid text-center">
                    <p class="text-muted">Brian Adams Photography 2017. All Rights Reserved.</p>
                    <p class="text-muted">Designed &amp; Developed by <a href="http://vonettastevenson.com/">VS</a></p>
                </div>
            </footer>
        </div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>
