<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    * {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100dvw;
	height: 100dvh;
	font-family: 'Roboto', sans-serif;
	background-color: rgb(229, 231, 235);
}

h2 {
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 1.5rem;
	font-weight: 900;
	color: rgb(55, 65, 81);
}

form {
	flex-direction: column;
	justify-content: flex-start;
	align-items: flex-start;
	padding: 2.5rem;
	margin-top: 2rem;
	width: 25rem;
	height: 26rem;
	background-color: #fff;
	border-radius: 0.5rem;
	box-shadow: 0.4rem 0.4rem 0.7rem lightgray;
}

label {
    display: flex;
	text-transform: capitalize;
	margin-top: 1.2rem;
    margin-bottom: 0.3rem;
	font-size: 0.7rem;
    letter-spacing: 0.5px;
    font-weight:400;
	color: rgb(55, 65, 81);
}

input {
	width: 100%;
	line-height: 3rem;
	background-color: rgb(229, 231, 235);
	border: none;
	border-radius: 4px;
}

button {
	margin-top: 2.2rem;
	width: 100%;
	height: 3rem;
	text-transform: capitalize;
	font-size: 0.9rem;
	font-weight: 700;
	color: rgb(220, 229, 247);
	background-color: rgb(37, 99, 235);
	border-radius: 4px;
	border: none;
    cursor: pointer;
}

div {
	display: flex;
	justify-content: center;
	width: 100%;
	margin-top: 1.4rem;
}

a {
	margin: 0 10px;
	font-size: 0.8rem;
    font-weight: 300;
    letter-spacing: 0.5px;
	text-decoration: none;
	color: rgb(37, 99, 235);
	text-transform: capitalize;
}

span {
	font-size: 0.7rem;
	color: rgb(37, 99, 235);
}
</style>
</head>
<body>
    <section>
        <h2 class="title">Log-in</h2>
        <form action="login-box">
            <label for="username">Card Number</label>
            <p>You are succesfully paid the payment</p>

        </form>
    </section>


</body>
</html>

