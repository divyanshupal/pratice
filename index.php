<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>Crud Operation</title>
    <style>
        body {
            background-color: cadetblue;
        }

        h1 {
            text-align: center;
            margin: 5px;
            color: red;
            font-style: italic;
        }

        label {
            font-size: x-large;
            font-style: italic;
            margin-top: 5%;
        }

        .button {
            background-color: red;
            font-style: oblique;
        }
    </style>
    <script>
        function validate()
        {
            var name=document.getElementById('name').value;
            var fname=document.getElementById('fname').value;
            var gender=document.getElementById('gender').value;
            var contactno=document.getElementById('contactno').value;
            var dob=document.getElementById('dob').value;
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
            var conpassword=document.getElementById('conpassword').value;
            var image=document.getElementById('image').value;
            var expemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(name==null || name=="")
            {
                alert("please enter name");
                return false;
            }
            else if(fname==null || fname=="")
            {
                alert("please enter fother name");
                return false;
            }
            else if(gender==null || gender=="")
            {
                alert("please select gender");
                return false;
            }
            else if(contactno==null || contactno=="")
            {
                alert("please inter mobile number");
                return false;
            }
            else if(contactno.length!=10)
            {
                alert("only 10 digites mobile number");
                return false;
            }
            else if(dob==null || dob=="")
            {
                alert("please enter date of birth");
                return false;
            }
            else if(email==null || email=="")
            {
                alert("please enter email");
                return false;
            }
            else if(!email.match(expemail))
            {
               alert("please enter valid email");
               return false;
            }
            else if(password==null || password=="")
            {
                alert("please enter password");
                return false;
            }
            else if(conpassword==null || conpassword=="")
            {
                alert("please enter confirm password");
                return false;
            }
            else if(password!==conpassword)
            {
                alert("password does't matched conpassword");
                return false;
            }
            else if(image==null || image=="")
            {
                alert("please choose image");
                return false;
            }
        }
    </script>
</head>

<body>
    <h1>User Registration Form</h1>
    <form action="code.php" method="post" class="form-group" enctype="multipart/form-data" onsubmit="return validate()">
        <table style="width: 50%;margin:0 auto;">
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="name" class="form-label">Name :</label>
                    </td>
                    <td>
                        <input type="text" name="name" class="form-control" id="name" />
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="fname" class="form-label">F'Name :</label>
                    </td>
                    <td>
                        <input type="text" name="fname" class="form-control" id="fname">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="gender" class="form-label">Gender :</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" class="form-check-input" id="gender">Male
                        <input type="radio" name="gender" value="Female" class="form-check-input" id="gender">Female
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="contactno" class="form-label">Mobile No</label>
                    </td>
                    <td>
                        <input type="number" name="contactno" class="form-control" id="contactno" />
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="dob" class="form-label">D-O-B :</label>
                    </td>
                    <td>
                        <input type="date" name="dob" class="form-control" id="dob"/>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="email" class="form-label">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" class="form-control" id="email" />
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="address" class="form-label">Address :</label>
                    </td>
                    <td>
                        <textarea name="address" cols="30" rows="3" class="form-control"></textarea>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="password" class="form-label">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" class="form-control" id="password">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="conpassword" class="form-label">Con Password</label>
                    </td>
                    <td>
                        <input type="password" name="conpassword" class="form-control" id="conpassword">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="image" class="form-label">Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" class="form-control" id="image">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Submit" class="form-control button">
                    </td>
                </div>
            </tr>
        </table>
    </form>
</body>

</html>