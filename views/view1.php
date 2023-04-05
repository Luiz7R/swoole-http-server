<!-- <html>
<head>
    <title>Test Page</title>
    <link rel="icon" href="data:,">
</head>
<body>

<h1>Hello php echo $name</h1>

<div><a href="/login">Login</a></div>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swoole Http Server</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    h1 {
      font-size: 3rem;
      text-align: center;
      animation: swoole 2s ease-in-out infinite;
    }
    
    @keyframes swoole {
      0% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0);
      }
    }
    
    button, .login {
      margin: 10px;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      background-color: #4CAF50;
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    
    a {
        text-decoration: none;
    }
    button:hover {
      background-color: #3e8e41;
    }

    @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

body  {
        background-image: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
        background-size:cover;
        -webkit-animation: slidein 100s;
        animation: slidein 100s;

        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;

        -webkit-animation-direction: alternate;
        animation-direction: alternate;              
}

@-webkit-keyframes slidein {
from {background-position: top; background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}
}

@keyframes slidein {
from {background-position: top;background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}

}


  </style>
</head>
<body>

  <div class="center">
     <h1>Swoole Http Server</h1>
  </div>
  <a href="/login" class="login">Login</a>
  <a href="/register" class="login">Register</a>
</body>
</html>
