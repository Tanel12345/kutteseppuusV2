<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }
        h4 {
            color: #4CAF50;
        }
        p {
            font-size: 16px;
            margin: 5px 0; /* Reduce spacing between paragraphs */
        }
        strong {
            color: #333;
        }
        pre {
            font-size: 14px; /* Adjust font size for preformatted text */
            line-height: 1.2; /* Adjust line height for preformatted text */
            margin: 0; /* Remove margin */
            white-space: pre-wrap; /* Allow text to wrap */
            word-wrap: break-word; /* Break words at line edges */
        }
    </style>
</head>
<body>
    <h4>Uus sõnum kontaktivormilt</h4>
    <p><strong>Sinu nimi:</strong> {{ $details['sinunimi'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Pealkiri:</strong> {{ $details['pealkiri'] }}</p>
    <p><strong>Sõnum:</strong><br><pre>{{ $details['inputtext'] }}</pre></p>
</body>
</html>