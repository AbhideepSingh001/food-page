<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 | Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: #fff;
        }

        /* Floating circles background */
        .circles span {
            position: absolute;
            display: block;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            animation: float 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }

        .circles span:nth-child(1) { left: 10%; width: 60px; height: 60px; animation-duration: 20s; }
        .circles span:nth-child(2) { left: 25%; animation-duration: 28s; }
        .circles span:nth-child(3) { left: 40%; width: 80px; height: 80px; animation-duration: 22s; }
        .circles span:nth-child(4) { left: 55%; animation-duration: 30s; }
        .circles span:nth-child(5) { left: 70%; width: 50px; height: 50px; animation-duration: 26s; }
        .circles span:nth-child(6) { left: 85%; animation-duration: 24s; }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Main container */
        .container {
            text-align: center;
            z-index: 2;
            max-width: 600px;
            padding: 20px;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-code {
            font-size: 120px;
            font-weight: 900;
            letter-spacing: 5px;
            background: linear-gradient(to right, #00dbde, #fc00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #dcdcdc;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 26px;
            border-radius: 30px;
            border: none;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-home {
            background: #00dbde;
            color: #000;
        }

        .btn-home:hover {
            background: #0ff;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,255,255,0.4);
        }

        .btn-back {
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn-back:hover {
            background: #fff;
            color: #000;
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .error-code {
                font-size: 90px;
            }
            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <!-- Animated background -->
    <div class="circles">
        <span></span><span></span><span></span>
        <span></span><span></span><span></span>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="error-code">404</div>
        <h1>Page Not Found</h1>
        <p>
            The page you are looking for might have been removed,
            had its name changed, or is temporarily unavailable.
        </p>

        <div class="btn-group">
            <a href="{{ url('/') }}" class="btn btn-home">Go to Home</a>
            <a href="javascript:history.back()" class="btn btn-back">Go Back</a>
        </div>
    </div>

</body>
</html>