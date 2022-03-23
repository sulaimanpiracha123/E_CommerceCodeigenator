<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .Login_box {
            width: 35%;
            margin-left: 37%;
            margin-top: 112px;
            border: 1px;
            border: 1px solid;
            text-align: center;
            /* line-height: 2; */
            padding: 27px;
        }

        .Login_container {
            width: 100%;
            height: auto;
        }

        .input_control {
            width: 100%;
            height: 36px;
            margin-bottom: 17px;
            border-radius: 10px;
        }

        .Login_btn {
            width: 100px;
            height: 50px;
            border-radius: 20px;
            color: white;
            background-color: orange;
        }
    </style>
</head>

<body>
    <div class="Login_container">
        <div class="Login_box">
            <h2>Admin Login</h2>
            <div class="Login_control">
                <input type="text" name="email" id="email" class="input_control" placeholder="Enter Email" />
            </div>
            <div class="Login_control">
                <input type="Password" name="password" id="password" class="input_control" placeholder="Enter Password" />
            </div>
            <div class="Login_control">
                <button class="Login_btn">Login</button>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).on('click', '.Login_btn', function() {
                    let email = $('#email').val();
                    let password = $('#password').val();
                    if (email == '') {
                        alert("Please Enter Email")
                    } else if (password == '') {
                        alert("Please Enter Password")
                    } else {
                        $.post("<?php echo base_url().'index.php/Admin_Login/login' ?>", {email: email,password: password},function(fb) {
                            var resp = $.parseJSON(fb);
                            if(resp.status=='true')
                            {
                                window.location.href = "<?php echo base_url().'index.php/Admin/dashboard'?>";

                            }
                            else
                            {
                                alert("USer Name And Password dont Match")
                            }
            
                        })




                    }
                });
    </script>

</body>

</html>