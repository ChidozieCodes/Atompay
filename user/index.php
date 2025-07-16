<?php include 'header.php';  ?>

    <main class="dashboard-main container">
        <div class="main-content">
            <!-- Welcome Banner -->
            <div class="welcome-banner">
                <div>
                    <h2>Hello, John!</h2>
                    <p>Welcome back to your AtomPay dashboard. Let's make a payment!</p>
                </div>
                <a href="fund-wallet.php" class="btn">Make a Payment</a>
            </div>

            <!-- Wallet Balance Card -->
            <div class="balance-card">
                <span class="label">Current Wallet Balance</span>
                <div class="amount">₦ 50,000.00</div>
                <div class="balance-actions">
                    <a href="fund-wallet.php" class="btn btn-primary">Fund Wallet</a>
                    <a href="transaction.php" class="btn btn-outline">View Transactions</a>
                </div>
            </div>

            <!-- Quick Actions Grid -->
            <div class="quick-actions-grid">
                <a href="pages/airtime.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 10H7v4h10V10zM12 21a2 2 0 01-2-2v-4a2 2 0 012-2h0a2 2 0 012 2v4a2 2 0 01-2 2zM12 3a2 2 0 00-2 2v4a2 2 0 002 2h0a2 2 0 002-2V5a2 2 0 00-2-2z"></path>
                        </svg>
                    </div>
                    <p>Buy Airtime</p>
                </a>
                <a href="pages/data.php" class="action-card">
                    <div class="action-card-icon">
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
                    <p>Buy Data</p>
                </a>
                <a href="pages/electricity.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <p>Pay Electricity</p>
                </a>
                <a href="pages/cable.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                        </svg>
                    </div>
                    <p>Cable TV</p>
                </a>
                <!-- New Feature: Bulk SMS -->
                <a href="pages/sms.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a2.5 2.5 0 00-5 0v3.5c0 .5-.5 1-1 1H4a2 2 0 01-2-2V4a2 2 0 012-2h12.5a2.5 2.5 0 010 5H8"></path>
                            <path d="M12 21h.01"></path>
                            <path d="M16 21h.01"></path>
                            <path d="M20 21h.01"></path>
                        </svg>
                    </div>
                    <p>Bulk SMS</p>
                </a>
                <!-- New Feature: Buy WAEC Pin -->
                <a href="pages/waec.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <path d="M9.5 9.5a.5.5 0 110-1 .5.5 0 010 1z"></path>
                        </svg>
                    </div>
                    <p>Buy WAEC Pin</p>
                </a>
                <!-- New Feature: Buy JAMB Pin -->
                <a href="pages/jamb.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.5 12.5l-3.2 3.2c-.4.4-.9.6-1.4.6s-1 .2-1.4.6l-3.2 3.2c-.8.8-.8 2.1 0 2.8l3.2 3.2c.4.4.9.6 1.4.6s1-.2 1.4-.6l3.2-3.2c.8-.8.8-2.1 0-2.8z"></path>
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    <p>Buy JAMB Pin</p>
                </a>
                <!-- New Feature: Fund Bet Account -->
                <a href="pages/bet.php" class="action-card">
                    <div class="action-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <p>Fund Bet Account</p>
                </a>
            </div>

            <!-- Recent Transactions -->
            <div class="recent-transactions-card">
                <h3>Recent Transactions</h3>
                <ul class="transaction-list">
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <div class="type">Airtime Purchase (MTN)</div>
                            <div class="date">June 10, 2025 at 10:30 AM</div>
                        </div>
                        <div class="transaction-amount debit">- ₦1,000.00</div>
                    </li>
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <div class="type">Wallet Funding</div>
                            <div class="date">June 09, 2025 at 02:15 PM</div>
                        </div>
                        <div class="transaction-amount credit">+ ₦5,000.00</div>
                    </li>
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <div class="type">Electricity Bill (Prepaid)</div>
                            <div class="date">June 08, 2025 at 05:00 PM</div>
                        </div>
                        <div class="transaction-amount debit">- ₦7,500.00</div>
                    </li>
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <div class="type">Data Bundle (Glo)</div>
                            <div class="date">June 07, 2025 at 09:45 AM</div>
                        </div>
                        <div class="transaction-amount debit">- ₦500.00</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="side-content">
            <!-- Useful Links Card -->
            <div class="info-card">
                <h3>Useful Links</h3>
                <p>Quickly access important sections of your AtomPay account.</p>
                <ul>
                    <li><a href="#" class="link">My Profile</a></li>
                    <li><a href="#" class="link">Payment History</a></li>
                    <li><a href="#" class="link">Help Center</a></li>
                    <li><a href="#" class="link">Security Settings</a></li>
                </ul>
            </div>

            <!-- Support/Contact Card -->
            <div class="info-card">
                <h3>Need Assistance?</h3>
                <p>Our support team is here to help you with any queries or issues.</p>
                <a href="#" class="btn btn-primary">Contact Support</a>
            </div>
        </div>
    </main>
<?php include 'footer.php';  ?>  

