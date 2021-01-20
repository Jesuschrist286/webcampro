<html>
<head>
<title>Web Chat</title>
<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
   <div id = 'main'>
         <div id = 'info'>
             <h2>login here</h2>
             <form  action = 'login.php' method = 'post'>
                 <label><b>Username</b></label>
                 <input type = "text" name='uname' placeholder="User name"><br><br>
                 <label><b>Password</b></label>
                 <input type = "text" name='pass' placeholder="Password"><br><br>
                 <button style="background-color: #6495ed; color:white" type="submit"><b>Login</b>
                 </button>
             </form>


             <form action='signup.php' method = 'post'>

             <h2>Don't have an account sign up here</h2>
             <label>Username   : </label>
             <input type = "text "name='uname' placeholder="Username" ><br><br>
             <label>Email Id   :</label>
             <input type = "email " name=" Email" placeholder="Email"><br><br>
             <label>Password   :</label>
             <input type = "text " name = " Password" placeholder="Password"><br><br>
             <button style="background-color: #6495ed; color:white" type="submit"><b>Signup</b>
                 </button>


             
             </form>

         </div>
     
   
   </div>

</body>
</html>