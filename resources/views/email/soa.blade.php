<!DOCTYPE html>
<html>
<head>
    <title>Statement of Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h4 {
            font-size: 20px;
            text-align: center;
            margin: 20px 0;
        }

        h1 {
            font-size: 32px;
            text-align: center;
            margin: 20px 0;
        }

        p {
            font-size: 16px;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h4>Resona Bank, Inc.<br>Japan</h4>

    <h1>Statement of Account</h1>

    <p>Dear {{ $client->first_name }},</p>

    <p>Here is your Statement of Account.</p>
</body>
</html>
