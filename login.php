<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>Document</title>
    <style>
        body{
            background-color: cadetblue;
        }
        h1{
            text-align: center;
            font-style: italic;
            color: red;
        }
        label{
            font-size: x-large;
            font-style: italic;
        }
        button{
            color: red;
        }
    </style>
</head>
<script>
    function validate()
    {

    }
</script>
<body>
    <h1>Usre Login</h1>
    <form action="logcode.php" method="post" class="form-group" onsubmit="return validate()">
        <table style="width: 50%;margin:0 auto;">
        <tr>
                <div class="mb-3">
                    <td>
                        <label for="email" class="form-label">Enter Email :</label>
                    </td>
                    <td>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Please Enter registered email" />
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                        <label for="password" class="form-label">Enter Password :</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="Enter registered password" class="form-control">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="mb-3">
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Submit" class="form-control button"/>
                    </td>
                </div>
            </tr>

    </table>
    </form>
</body>
</html>