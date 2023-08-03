<form action="index.php" method="post">
    <style>
        * {
            font-size: 14px;
            font-family: sans-serif;
        }

        .Login-Form-Element {
            width: 350px;
            margin: 100px auto;
            border: 1px solid black;
            border-radius: 8px;
            padding: 15px;
            background-color: seashell;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            box-sizing: 10px solid;

        }

        h3 {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
            color: black;
        }

        input {
            display: block;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 8px;
            width: 80px;
            border-radius: 4px;
            border: 0;
            background-color: purple;
        }

        button:hover {
            background-color: whitesmoke;
            cursor: pointer;
            color: chocolate;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            transform: 0.3s;
        }

        a {
            text-decoration: none;
            background-color: seagreen;
            padding: 8px;
            border-radius: 4px;
            color: seashell;
            font-weight: 200px;
            font-size: 1rem;

        }

        a:hover {
            color: whitesmoke;
            background-color: chocolate;
            font-weight: 400px;
            transform: 0.3s;
            border-color: 2px solid steelblue;
        }

        p {
            background-color: coral;
            color: whitesmoke;
            padding: 10px;
        }
    </style>

    <div class="Login-Form-Element"><br>
        <div class="login-Header">
            <h3> LOGIN TO SOFTLA COMPANY</h3>
            <p>user name/Password invalid</p>

            <label>Email:</label>
            <input type="email" name="Email" placeholder="Enter Your Name...."><br>
            <label>Password:</label>
            <input type="Password" name="Password" placeholder="Enter Your  Password....">
            <br> <button type="Submit">Login</button>
            <a href="../Component/Header.php">GoTo Home</a>
        </div>
    </div>
</form>
</body>

</html>