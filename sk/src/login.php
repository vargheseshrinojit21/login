<html>
<head>
    <title>Sign Up Form</title>
    <style media="screen">
    body{
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.2)),url("https://images.unsplash.com/photo-1482160310982-3adf8b38daef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
        height: 70 vh;
        background-size: cover;
        background-position: center;
    }

    .login-page{
        width:600px;
        padding: 8% 0 0;
        margin:auto;
    }

    .form{
        z-index: 1;
        background: rgba(101,127,140,0.8);
        border-radius: 5%;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: left;
    }

    .form input[type=text], .form input[type=password], #state{
        font-family: "Roboto",sans-serif;
        outline:1;
        width: 360px;
        background: #f2f2f2;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        text-align: left;
    }

    .form button{
        font-family: "Roboto",sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;
        }

    .form button:hover,.form button:active{
        background: #43A047;
    }

    .form .message{
        margin: 15px 0,0;
        color:black;
        font-size: 12px;
    }

    .form .message a{
        color:chartreuse;
        text-decoration: none;

    }
    .form .register-form{
        display: none;
    }

    hr
    {
      height: 2px;
      background-color: white;
    }

    </style>
    </head>
    <body>
    <div class="login-page">
    <div class="form">
        <form class="register-form">
        <span style="text-align: center;"><h1>Client Login Form</h1></span>
        <hr><br>

        <!--In this code i have given imput types as text,password,radio(gender),email id and state of the client -->


        <input type="text" placeholder="User Name" required/>
        <input type="password" placeholder="Password" required/>
        <input type="text" placeholder="example@website.com" required/>
        <input type="text" placeholder="xx-xx-xxxxxx" required/>
        <span style="text-align: left; color: #737373; font-size:20px; font-family: HP Simplified; outline:1; background-color: #f2f2f2; padding-left:10px; padding-right:10px;">Gender</span>
        &emsp;<span style="color: white; outline:1; font-family: HP Simplified;" >
        <input type="radio" name="gender" value="Male">
        <label for="Male">Male</label>&ensp;
        <input type="radio" name="gender" value="Female">
        <label for="Female">Female</label>&ensp;
        <input type="radio" name="gender" value="Other">
        <label for="Other">Other</label>
        </span><br> <br>
          <select id="state" name="state" value="Select your state"  style="color:#737373;" required>
              <option value="Selectstate">Select your state</option>
              <option value="chandigarh">Chandigarh</option>
              <option value="punjab">Punjab</option>
              <option value="delhi">Delhi</option>
          </select><br>
          <input type="text" placeholder="Please Provide Your Valuable Feedback!"/>


            <!--Here i have given a Button to create an account for the client -->

        <button>Create</button><br>
        <p style="font-size: 15px;"class="message">Already Registered? <a href="#">Login</a>
        </p>
        </form>


        <!--Here i have given an input type such as text,password and a button to login /get acess to this form-->



        <form>
        <input type="text" placeholder="User Name"/>
        <input type="password" placeholder="Password"/>
        <button>Login</button>
        <p style="font-size: 15px;" class="message">Not Registered? <a href="#">Register</a></p>
        </form>
        </div>
        </div>


        <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
        </script>


        <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle",opacity: "toggle"}, "slow")
        });
        </script>
</body>
</html>