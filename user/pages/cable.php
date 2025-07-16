<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtomPay | Pay Cable TV</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font import to use Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset & Global Styles */
        :root {
            --bg-white: #FFFFFF;
            --bg-light-gray: #F9F9FB;
            --primary: #8A3FFC; /* Vibrant Orchid Purple */
            --accent: #EC4899;  /* Bright Rose Pink */
            --text-dark: #111827; /* Dark Gray for text */
            --text-muted: #6B7280; /* Lighter text for subtitles */
            --border-color: #E5E7EB;
            --font-main: 'Inter', sans-serif; /* Inter font */
            --transition-speed: 0.3s ease;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.04);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.04);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-light-gray); /* Light background for the page */
            color: var(--text-dark);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Full viewport height */
        }
        
        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Typography */
        h1, h2, h3 {
            font-weight: 800;
            line-height: 1.2;
            color: var(--text-dark);
        }
        h1 {
            font-size: clamp(2.8rem, 5vw, 4rem);
            letter-spacing: -2px;
            background: -webkit-linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        h2 {
            font-size: clamp(2rem, 4vw, 2.75rem);
            margin-bottom: 24px;
            text-align: center;
        }
        h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
        }
        p {
            font-size: 1rem;
            color: var(--text-muted);
            margin-bottom: 24px;
        }
        .section-header p {
             max-width: 600px;
             margin-left: auto;
             margin-right: auto;
        }
        a {
            color: var(--primary);
            text-decoration: none;
            transition: color var(--transition-speed);
        }
        a:hover {
            color: var(--accent);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            text-align: center;
            border: none;
            cursor: pointer;
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        }
        .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            color: var(--bg-white);
            box-shadow: 0 4px 15px rgba(138, 63, 252, 0.25);
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(236, 72, 153, 0.3);
        }
        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 1px solid var(--border-color);
        }
        .btn-outline:hover {
            background-color: var(--bg-light-gray);
            color: var(--accent);
        }

        /* Header (for dashboard-like pages) */
        .page-header {
            background: var(--bg-white);
            border-bottom: 1px solid var(--border-color);
            padding: 15px 0;
            box-shadow: var(--shadow);
        }

        .page-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-logo {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--text-dark);
            text-decoration: none;
        }
        .page-logo span {
            color: var(--primary);
        }

        .back-link {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-muted);
            font-weight: 500;
            text-decoration: none;
            transition: color var(--transition-speed);
        }
        .back-link:hover {
            color: var(--primary);
        }
        .back-link svg {
            width: 20px;
            height: 20px;
            stroke-width: 2;
        }

        /* Main Content Area */
        .main-content {
            flex-grow: 1; /* Allows main content to expand and push footer down */
            padding: 60px 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to start for scrollable content */
        }

        .cable-tv-card {
            background-color: var(--bg-white);
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            padding: 40px;
            width: 100%;
            max-width: 550px; /* Consistent width for forms */
            text-align: center;
            position: relative;
        }

        .cable-tv-card h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            background: -webkit-linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cable-tv-card p.subtitle {
            font-size: 1rem;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1.05rem;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group select {
            width: 100%;
            padding: 14px 18px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            font-family: var(--font-main);
            font-size: 1.1rem;
            color: var(--text-dark);
            transition: border-color var(--transition-speed), box-shadow var(--transition-speed);
            -webkit-appearance: none; /* Remove default select arrow for selects */
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="%236B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 20px;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(138, 63, 252, 0.15);
        }

        .cable-tv-card .btn-primary {
            width: 100%;
            padding: 16px;
            font-size: 1.2rem;
            border-radius: 12px;
            margin-top: 20px;
        }

        /* Footer */
        .main-footer {
            padding: 40px 0 20px 0;
            background-color: var(--bg-white);
            border-top: 1px solid var(--border-color);
            margin-top: auto; /* Pushes footer to the bottom */
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-col h4 {
            color: var(--text-dark);
            margin-bottom: 16px;
        }
        .footer-col ul {
            list-style: none;
        }
        .footer-col ul li a {
            color: var(--text-muted);
            display: block;
            margin-bottom: 8px;
        }
        .social-links {
            display: flex;
            gap: 16px;
            margin-top: 16px;
        }
        .social-links a {
            color: var(--text-muted);
        }
        .footer-bottom {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
        }
        .footer-bottom p {
            color: var(--text-muted);
        }
        
        /* Responsive Adjustments */
        @media(max-width: 992px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media(max-width: 767px) {
            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .social-links {
                justify-content: center;
            }
            .main-content {
                padding: 40px 0;
            }
            .cable-tv-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="page-header">
        <div class="container page-navbar">
            <a href="../index.php" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                Back to Dashboard
            </a>
            <a href="../index.php" class="page-logo">Atom<span>Pay</span></a>
        </div>
    </header>

    <main class="main-content">
        <div class="cable-tv-card">
            <h2>Pay Cable TV Subscription</h2>
            <p class="subtitle">Renew your DStv, GOtv, Startimes, and other cable TV subscriptions instantly.</p>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="provider">Cable TV Provider</label>
                    <select id="provider" name="provider" required>
                        <option value="">-- Select Provider --</option>
                        <option value="dstv">DStv</option>
                        <option value="gotv">GOtv</option>
                        <option value="startimes">Startimes</option>
                        <option value="kwese">Kwese TV</option>
                        <!-- Add more providers as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="smartCardNumber">Smart Card / IUC Number</label>
                    <input type="text" id="smartCardNumber" name="smartCardNumber" placeholder="Enter smart card or IUC number" required>
                </div>

                <div class="form-group">
                    <label for="bouquetPlan">Bouquet / Plan</label>
                    <select id="bouquetPlan" name="bouquetPlan" required>
                        <option value="">-- Select Bouquet / Plan --</option>
                        <!-- DStv Options -->
                        <optgroup label="DStv">
                            <option value="dstv-premium">DStv Premium</option>
                            <option value="dstv-compact-plus">DStv Compact Plus</option>
                            <option value="dstv-compact">DStv Compact</option>
                            <option value="dstv-confam">DStv Confam</option>
                            <option value="dstv-yanga">DStv Yanga</option>
                        </optgroup>
                        <!-- GOtv Options -->
                        <optgroup label="GOtv">
                            <option value="gotv-max">GOtv Max</option>
                            <option value="gotv-jolly">GOtv Jolly</option>
                            <option value="gotv-jinja">GOtv Jinja</option>
                            <option value="gotv-smallie">GOtv Smallie</option>
                        </optgroup>
                        <!-- Startimes Options -->
                        <optgroup label="Startimes">
                            <option value="startimes-unique">StarTimes Unique</option>
                            <option value="startimes-super">StarTimes Super</option>
                            <option value="startimes-classic">StarTimes Classic</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="amount">Amount (₦)</label>
                    <input type="number" id="amount" name="amount" placeholder="e.g., 18000" min="500" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Pay Subscription</button>
            </form>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="#" class="page-logo">Atom<span>Pay</span></a>
                    <p>Your money, moving at the speed of life.</p>
                    <div class="social-links">
                        <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                         <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                         </a>
                         <a href="#">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                         </a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Disputes</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 AtomPay. All Rights Reserved. Built with care in Port Harcourt, Nigeria.</p>
            </div>
        </div>
    </footer>

</body>
</html>
