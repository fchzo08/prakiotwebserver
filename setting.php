<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        form {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="save_settings.php" method="post">
        <h2>Settings</h2>

        <label for="lamp">Lampu:</label>
        <select id="lamp" name="lamp">
            <option value="on">Nyala</option>
            <option value="off">Mati</option>
        </select>

        <br><br>

        <label for="sensor">Sensor:</label>
        <select id="sensor" name="sensor">
            <option value="on">Nyala</option>
            <option value="off">Mati</option>
        </select>

        <br><br>

        <label for="start_time">Jam Mulai Nyala:</label>
        <input type="time" id="start_time" name="start_time">

        <br><br>

        <label for="end_time">Jam Mulai Mati:</label>
        <input type="time" id="end_time" name="end_time">

        <br><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>