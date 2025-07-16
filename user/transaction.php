<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtomPay | Transaction History</title>
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

        .transactions-card {
            background-color: var(--bg-white);
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            padding: 40px;
            width: 100%;
            max-width: 800px; /* Wider card for transaction list */
            text-align: center;
            position: relative;
        }

        .transactions-card h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            background: -webkit-linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .transactions-card p.subtitle {
            font-size: 1rem;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .filter-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-options select,
        .filter-options input[type="date"] {
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-family: var(--font-main);
            font-size: 0.95rem;
            color: var(--text-dark);
            flex-grow: 1;
            min-width: 150px;
        }
        .filter-options button {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            background-color: var(--primary);
            color: var(--bg-white);
            transition: background-color 0.2s ease;
        }
        .filter-options button:hover {
            background-color: var(--accent);
        }


        .full-transaction-list {
            list-style: none;
            padding: 0;
            max-height: 500px; /* Limit height for scrollability */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 1px solid var(--border-color);
            border-radius: 12px;
            background-color: var(--bg-white);
        }

        .transaction-detail-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .transaction-detail-item:last-child {
            border-bottom: none;
        }

        .transaction-icon-wrapper {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            background: linear-gradient(45deg, rgba(138, 63, 252, 0.08), rgba(236, 72, 153, 0.08));
            color: var(--primary);
        }
        .transaction-icon-wrapper svg {
            width: 20px;
            height: 20px;
            stroke-width: 2;
        }

        .transaction-details {
            flex-grow: 1;
            text-align: left;
        }
        .transaction-details .title {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 5px;
        }
        .transaction-details .meta {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .transaction-amount-display {
            font-weight: 700;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        .transaction-amount-display.credit {
            color: #28a745; /* Green for credit */
        }
        .transaction-amount-display.debit {
            color: var(--accent); /* Red/Accent for debit */
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
            .filter-options {
                flex-direction: column;
                align-items: stretch;
            }
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
            .transactions-card {
                padding: 30px 20px;
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
        <div class="transactions-card">
            <h2>Transaction History</h2>
            <p class="subtitle">View all your past transactions, categorized for easy tracking.</p>

            <div class="filter-options">
                <select id="transactionTypeFilter">
                    <option value="all">All Transactions</option>
                    <option value="airtime">Airtime Recharge</option>
                    <option value="data">Data Bundles</option>
                    <option value="electricity">Electricity Bills</option>
                    <option value="cabletv">Cable TV</option>
                    <option value="wallet_fund">Wallet Funding</option>
                    <option value="bulk_sms">Bulk SMS</option>
                    <option value="waec_pin">WAEC Pin</option>
                    <option value="jamb_pin">JAMB Pin</option>
                    <option value="bet_fund">Bet Account Fund</option>
                </select>
                <input type="date" id="startDate" placeholder="Start Date">
                <input type="date" id="endDate" placeholder="End Date">
                <button type="button">Apply Filters</button>
            </div>

            <ul class="full-transaction-list">
                <!-- Example Transaction Items -->
                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 10H7v4h10V10zM12 21a2 2 0 01-2-2v-4a2 2 0 012-2h0a2 2 0 012 2v4a2 2 0 01-2 2zM12 3a2 2 0 00-2 2v4a2 2 0 002 2h0a2 2 0 002-2V5a2 2 0 00-2-2z"></path>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Airtime Recharge (MTN)</div>
                        <div class="meta">June 10, 2025 | 10:30 AM | Ref: MTN7890123</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦1,000.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                            <line x1="12" y1="6" x2="12" y2="18"></line>
                            <line x1="6" y1="12" x2="18" y2="12"></line>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Wallet Funding</div>
                        <div class="meta">June 09, 2025 | 02:15 PM | Ref: WALLET98765</div>
                    </div>
                    <div class="transaction-amount-display credit">+ ₦5,000.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Electricity Bill (Prepaid)</div>
                        <div class="meta">June 08, 2025 | 05:00 PM | Ref: ELEC1234567</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦7,500.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <path d="M8 14h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M16 14h.01"></path>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Data Bundle (Glo)</div>
                        <div class="meta">June 07, 2025 | 09:45 AM | Ref: DATA998877</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦500.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a2.5 2.5 0 00-5 0v3.5c0 .5-.5 1-1 1H4a2 2 0 01-2-2V4a2 2 0 012-2h12.5a2.5 2.5 0 010 5H8"></path>
                            <path d="M12 21h.01"></path>
                            <path d="M16 21h.01"></path>
                            <path d="M20 21h.01"></path>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Bulk SMS Purchase</div>
                        <div class="meta">June 06, 2025 | 01:20 PM | Ref: SMS554433</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦2,000.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">Cable TV Subscription (DStv)</div>
                        <div class="meta">June 05, 2025 | 03:00 PM | Ref: DSTV001122</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦18,000.00</div>
                </li>

                <li class="transaction-detail-item">
                    <div class="transaction-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <path d="M9.5 9.5a.5.5 0 110-1 .5.5 0 010 1z"></path>
                        </svg>
                    </div>
                    <div class="transaction-details">
                        <div class="title">WAEC Pin Purchase</div>
                        <div class="meta">June 04, 2025 | 11:10 AM | Ref: WAECPIN67890</div>
                    </div>
                    <div class="transaction-amount-display debit">- ₦4,500.00</div>
                </li>
            </ul>
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
