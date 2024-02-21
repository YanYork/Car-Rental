<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lethbridge Car Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #666;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .navbar {
            background-color: #6bb1e3; /* Light Blue */
            overflow: hidden;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown button {
            background-color: #6bb1e3; /* Light Blue */
            color: #333; /* Dark Grey */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f2f2f2; /* Light Grey */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            color: #333; /* Dark Grey */
            padding: 8px 16px;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
         form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form label {
            margin-bottom: 8px;
        }

        form input {
            width: 300px;
            padding: 8px;
            margin-bottom: 16px;
        }

        form input[type="submit"] {
            background-color: #6bb1e3;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Lethbridge Car Rental</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

<body>

    <h2>Development Team</h2>

    <ul>
        <li>
            <strong>Jimmy Tran</strong>
            <br>
            Email: jimmy.tran@uleth.ca
            <br>
            Phone: 123456789
        </li>
<br>
        <li>
            <strong>Kibwe Gooding</strong>
            <br>
            Email: k.gooding@uleth.ca
            <br>
            Phone: 123456789
        </li>
<br>
        <li>
            <strong>Yannick Acha</strong>
            <br>
            Email: y.acha@uleth.ca
            <br>
            Phone: 123456789
        </li>
    </ul>

</body>
</body>
</html>

