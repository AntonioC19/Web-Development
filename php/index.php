<?php 
    $error = "";
    $success = "";
    if($_POST){
        if($_POST["email"]){
            $error.= "an email address is required.<br>";
        }
        if($_POST["subject"]){
            $error.= "a subject is required.<br>";
        }
        if($_POST["content"]){
            $error.= "a content is required.<br>";
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= "is not a valid email";
        }
        if($error != ""){
            $error .= '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    }
    }else{
        $emailTo = "lorenxoskittles@gmail.com"
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $headers = "From: ".$_POST['email'];

        if($emailTo, $subject, $content, $headers){
            $success = '<div class="alert alert-sucess" role="alert">Your message was succesfully sent</div>'
        }else{
            $error .= '<div class="alert alert-danger" role="alert">Your message was not sent, try again.</div>';
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container">
            <h1>Hello, world!</h1>
            <div id="error"><? echo $error.$success ?></div>
            <form method="post">
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject here">
                    </div>
                    <div class="form-group">
                      <label for="content">What would you like to ask us?</label>
                      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                  </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("form").submit(function (e){
            e.preventDefault();

            var error = "";
            if($("#subject").val() == ""){
                error+="<p>The subject field is require.<p>";
            }

            if($("#email").val() == ""){
                error+="<p>The email field is require.<p>";
            }

            if($("#content").val() == ""){
                error+="<p>The content field is require.<p>";
            }
            
            if(error != ""){
                $("#error").html('<div class="alert alert-danger" role="alert">'+ error +'</div>');
            }else{
                $("form").unbind("submit").submit();
            }

        });
    
    </script>
  </body>
</html>