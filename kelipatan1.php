<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        
    </style>
</head>

<body>
    <h2>Kelipatan Lima</h2>

    <form method="post" action="">
        Masukkan angka terbatas: <input type="number" name="limit" />
        <input type="submit" value="Submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limit = $_POST["limit"];
        echo "<table>";
        echo "<tr><th>Kelipatan Ke</th><th>Value</th></tr>";
        for ($i = 1; $i <= 4; $i++) {
            $multiple = $i * 5;
            if ($multiple > $limit) {
                break;
            }
            echo "<tr>";
            echo "<td>Ke-" . $i . "</td>";
            echo "<td>" . $multiple . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>