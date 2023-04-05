<!-- <html>
<head>
    <title>Login Page</title>
    <link rel="icon" href="data:,">

    <style>
        .erro-message {
            color: red;
            margin-bottom: 10px;
        }

        .form-row {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>Login Page</h1>

<div> -->

    <!-- <div class="erro-message">$message</div> -->

    <!-- <form method="POST" action="/login" enctype="multipart/form-data">
        <div class="form-row">
            <div><label for="email">Email</label></div>
            <div><input name="email" type="text"/></div>
        </div>

        <div class="form-row">
            <div><label for="email">Password</label></div>
            <div><input name="password" type="password"/></div>
        </div>

        <div><input name="submit" type="submit" value="Submit"/></div>
    </form>

</div>

</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-size: cover;
			background-blur: 10px;
			color: #fff;
			font-family: Arial, sans-serif;
            background-color: #4cb18a;
		}

        .login {
            background: rgba(60, 255, 177, 0.31);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(0px);
            -webkit-backdrop-filter: blur(0px);
            border: 1px solid rgba(60, 255, 177, 0.66);
            padding-bottom: 2rem;
        }
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 100px;
		}

		h1 {
			font-size: 40px;
			margin-bottom: 20px;
		}

		.card-account {
			display: flex;
			flex-direction: column;
			align-items: center;
			background: rgba(255, 255, 255, 0.3);
			border-radius: 10px;
			padding: 40px;
			box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
			max-width: 20rem;
		}

		label {
			font-size: 20px;
			margin-bottom: 10px;
		}

		input[type="email"],
		input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			background: rgba(255, 255, 255, 0.7);
			width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            transition: background-color 0.3s ease-in-out;
		}

        input[type="email"]:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transition: background-color 0.3s ease-in-out;
        }

        input[type="password"]:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transition: background-color 0.3s ease-in-out;
        }

		input[type="submit"] {
			padding: 10px;
			border: none;
			border-radius: 5px;
			background: #4CAF50;
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.btn-sub {
			padding: 10px;
			border: none;
			border-radius: 5px;
			background: #4CAF50;
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s;	
			text-decoration: none;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		.invalid {
			color: red;
			font-size: 14px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
    <div class="login">
        <div class="container">
            <h1>Login</h1>
			<div class="card-account">
				<form action="" method="post">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" required>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" required>
					<input type="submit" value="Login">
				</form>
			</div>
        </div>
    </div>
</body>
</html>
