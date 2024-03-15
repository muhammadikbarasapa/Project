<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            width: 30%;
            background-color: cyan;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: black;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        label {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-align: center;
            color: #4CAF50;
        }

        input[type="number"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1.2rem;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            font-size: 1.3rem;
            color: white;
            margin-bottom: 1rem;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            text-align: center;
            color: #fff;
        }

        .notification {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2rem;
            height: 2rem;
            margin-left: 0.75rem;
            border-radius: 50%;
            transition: 0.5s ease-in;
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="tabs">
        <input type="radio" id="radio-1" name="tabs" checked />
        <label class="tab" for="radio-1">1<span class="notification"></span></label>
        <input type="radio" id="radio-2" name="tabs" />
        <label class="tab" for="radio-2">2<span class="notification"></span></label>
        <input type="radio" id="radio-3" name="tabs" />
        <label class="tab" for="radio-3">3<span class="notification"></span></label>
        <span class="glider"></span>
    </div>
    <div class="container">
        <h1>KELIPATAN 5 </h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="number" id="limit" name="limit" value="<?php echo $_POST['limit'] ?? '5'; ?>" required min="1"
                max="100" placeholder="5">
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validasi input
            $limit = max(0, $_POST['limit'] ?? 5);

            // Cetak kelipatan
            for ($i = 1; $i <= $limit; $i++) {
                $multiple = $i * 5;
                if ($multiple > $limit) {
                    break;
                }
                echo "<p>Kelipatan ke-$i : $multiple</p>";
            }
        }
        ?>
    </div>
</body>

</html> 