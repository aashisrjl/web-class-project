<?php include '../components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - WebClass</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
        }
        /* About Section Styles */
        .about-container {
            min-height: calc(100vh - 120px); /* Adjust for header/footer */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin-top: 60px; /* Space for fixed header */
        }
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
            padding: 0 20px;
        }
        .about-text {
            flex: 1;
            min-width: 300px;
            color: black;
            padding-right: 20px;
        }
        .about-text h3 {
            font-size: 24px;
            color: #22D3EE;
            margin-bottom: 10px;
        }
        .about-text h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .about-text h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .social-icons a {
            color: #FFFFFF;
            font-size: 24px;
            text-decoration: none;
        }
        .about-text button {
            background-color: transparent;
            border: 2px solid #22D3EE;
            color: #22D3EE;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .about-text button:hover {
            background-color: #22D3EE;
            color: #1E3A8A;
        }
        .about-image {
            display: flex;
            flex-direction: column;
            gap:2;
            justify-content: center;
            align-items: center;
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        .about-image img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border: 5px solid #22D3EE;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
                text-align: center;
            }
            .about-text {
                padding-right: 0;
                margin-bottom: 20px;
            }
            .about-image img {
                width: 200px;
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- About Us Content -->
    <div class="about-container">
        <div class="about-content">
            <!-- Text Content -->
            <div class="about-text">
                <h3>Hi, My name is</h3>
                <h1>Aashish Rijal</h1>
                <h2>csit student</h2>
                <p>
                    I am a web developer with 1 year of experience in NodeJs. I have a strong foundation in back-end & little in front-end development, skilled in creating user-friendly and responsive, authentic web applications using Node and its ecosystem.
                </p>
                <div class="social-icons">
                    <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="https://aashishrijal.com.np/#projects" target="_blank">
                <button>
                    Check out my projects</button>
                    </a>
            </div>
            <!-- Profile Image -->
            <div class="about-image">
                <img src="../images/me4.png" alt="Aashish Rijal">
                <a style="text:center; margin-top:5px;" href="https://aashishrijal.com.np">aashishrijal.com.np</a>
            </div>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>