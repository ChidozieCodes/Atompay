<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtomPay | My Profile</title>
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

        .profile-card {
            background-color: var(--bg-white);
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            padding: 40px;
            width: 100%;
            max-width: 700px; /* Wider card for profile details */
            text-align: center;
            position: relative;
        }

        .profile-card h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            background: -webkit-linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .profile-card p.subtitle {
            font-size: 1rem;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .profile-info-section {
            margin-bottom: 40px;
            text-align: left;
        }

        .profile-info-section h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-dark);
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-info-section h3 svg {
            width: 28px;
            height: 28px;
            stroke-width: 2;
            color: var(--primary);
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 600px) {
            .info-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        .info-item {
            background-color: var(--bg-light-gray);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .info-item .label {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 5px;
        }

        .info-item .value {
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--text-dark);
            word-break: break-all; /* Ensures long values wrap */
        }

        .edit-button-group {
            margin-top: 20px;
            text-align: right;
        }

        .edit-button-group .btn {
            padding: 10px 25px;
            font-size: 0.95rem;
        }

        /* Footer */
        .main-footer {
            padding: 40px 0 20px 0;
            background-color: var(--bg-white);
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
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
            .profile-card {
                padding: 30px 20px;
            }
            .info-grid {
                grid-template-columns: 1fr; /* Stack vertically on small screens */
            }
            .edit-button-group {
                text-align: center; /* Center buttons on small screens */
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="page-header">
        <div class="container page-navbar">
            <a href="index.php" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                Back to Dashboard
            </a>
            <a href="index.php" class="page-logo">Atom<span>Pay</span></a>
        </div>
    </header>

    <main class="main-content">
        <div class="profile-card">
            <h2>My Profile</h2>
            <p class="subtitle">View and manage your personal and security settings.</p>

            <!-- Personal Information Section -->
            <div class="profile-info-section">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Personal Information
                </h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="label">Full Name</span>
                        <span class="value">John Doe</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Email Address</span>
                        <span class="value">john.doe@example.com</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Phone Number</span>
                        <span class="value">+234 801 234 5678</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Date of Birth</span>
                        <span class="value">January 1, 1990</span>
                    </div>
                </div>
                <div class="edit-button-group">
                    <a href="edit_personal_info.php" class="btn btn-outline">Edit Personal Info</a>
                </div>
            </div>

            <!-- Security Settings Section -->
            <div class="profile-info-section">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0110 0v4"></path>
                    </svg>
                    Security Settings
                </h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="label">Password</span>
                        <span class="value">************</span>
                    </div>
                    <div class="info-item">
                        <span class="label">2-Factor Authentication</span>
                        <span class="value">Disabled</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Last Login</span>
                        <span class="value">June 11, 2025 at 3:00 PM WAT</span>
                    </div>
                </div>
                <div class="edit-button-group">
                    <a href="password.php" class="btn btn-outline">Change Password</a>
                    <a href="two-factor.php" class="btn btn-primary">Enable 2FA</a>
                </div>
            </div>

            <!-- Notification Preferences Section (Optional) -->
            <div class="profile-info-section">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 01-3.46 0"></path>
                    </svg>
                    Notification Preferences
                </h3>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="label">Email Notifications</span>
                        <span class="value">Enabled</span>
                    </div>
                    <div class="info-item">
                        <span class="label">SMS Alerts</span>
                        <span class="value">Enabled</span>
                    </div>
                </div>
                <div class="edit-button-group">
                    <button class="btn btn-outline">Manage Notifications</button>
                </div>
            </div>

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
