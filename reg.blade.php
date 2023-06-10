<html>
    <head>
        <title>Ritabrata</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Admin Login">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <style type="text/css">
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password], input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

        button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        }

        button:hover {
        opacity: 0.8;
        }

        .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        }

        .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        }

        img.avatar {
        width: 40%;
        border-radius: 50%;
        }

        .container {
        padding: 16px;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
        </style>
    </head>
    <body>
    <h3 class="w3-margin-left">Registration</h3>
        @if(session() -> has('success'))
            <h3 class = 'w3-center w3-text-green w3-margin-top'>{{ session() -> get('success') }}</h3>
        @endif

        <form action="/send-registration-data" method="post">
            @csrf
            <div class="container">
                <label for="uname"><b>Username:</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

                <label for="psw"><b>Password:</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                <input type="checkbox" onclick="displayPass()">Show Password
                    
                <button type="submit">Submit</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href='/admin'><button type="button" class="cancelbtn">Login</button></a>
            </div>
        </form>

        <script>
        function displayPass() 
        {
            var x = document.getElementById("psw");
            if (x.type === "password") 
            {
                x.type = "text";
            } 
            else
            {
                x.type = "password";
            }
        }
        </script>
    </body>
</html>