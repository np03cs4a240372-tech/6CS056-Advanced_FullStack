@props([
    "title" => "Student Course App"
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Student Course App</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f8fa;
            color: #333;
            line-height: 1.6;
        }

        .navbar {
            background: #2563eb;
            padding: 16px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        main {
            width: 85%;
            max-width: 1100px;
            margin: 35px auto;
            min-height: 70vh;
        }

        h1 {
            color: #1e293b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background: #eff6ff;
        }

        a, button {
            cursor: pointer;
        }

        .btn {
            display: inline-block;
            padding: 9px 15px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .btn-danger {
            background: #dc2626;
        }

        .btn-secondary {
            background: #64748b;
        }

        form {
            max-width: 600px;
            background: white;
            padding: 22px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
        }

        label {
            display: block;
            margin: 12px 0 5px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            font-size: 15px;
        }

        textarea {
            min-height: 90px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 30px;
            margin-bottom: 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #fff;
            border-top: 1px solid #e5e7eb;
            color: #64748b;
        }

        .home-box {
            background: white;
            padding: 35px;
            border: 1px solid #e5e7eb;
            border-radius: 7px;
        }

        @media (max-width: 650px) {
            .navbar {
                padding: 15px 5%;
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                gap: 16px;
            }

            main {
                width: 94%;
            }

            table {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <footer>
        &copy; Group 4 {{ date("Y") }} | Student Course App
    </footer>
</body>
</html>
