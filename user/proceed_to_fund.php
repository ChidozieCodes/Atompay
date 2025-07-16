<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtomPay | Proceed to Fund</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font import to use Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/proceed.css">
</head>
<body>

    <!-- Header -->
    <header class="page-header">
        <div class="container page-navbar">
            <a href="fund-wallet.php" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                Back to Funding
            </a>
            <a href="index.php" class="page-logo">Atom<span>Pay</span></a>
        </div>
    </header>

    <main class="main-content">
        <div class="proceed-card">
            <h2>Confirm & Proceed</h2>
            <p class="subtitle">Review your funding details and follow the instructions below.</p>

            <div class="summary-details">
                <div class="detail-item">
                    <span class="label">Amount:</span>
                    <span class="value">₦ 5,000.00</span>
                </div>
                <div class="detail-item">
                    <span class="label">Payment Method:</span>
                    <span class="value" id="selectedMethod">Card Payment</span>
                </div>
            </div>

            <!-- Card Payment Instructions (Default) -->
            <div class="instruction-box card-instructions" id="cardInstructions">
                <h3>Card Payment Instructions</h3>
                <p>You will be redirected to our secure payment gateway to complete your transaction. Please do not close this page.</p>
                <button type="button" class="btn btn-primary" onclick="redirectToPaymentGateway()">Proceed to Secure Gateway</button>
            </div>

            <!-- Bank Transfer Instructions (Hidden by default) -->
            <div class="instruction-box bank-transfer-instructions" id="bankTransferInstructions" style="display: none;">
                <h3>Bank Transfer Instructions</h3>
                <p>Please make a transfer to the following unique account details. Your wallet will be credited once the transfer is confirmed.</p>
                <div class="bank-details-grid">
                    <div>
                        <span>Bank Name:</span>
                        <strong>AtomPay Bank</strong>
                    </div>
                    <div>
                        <span>Account Name:</span>
                        <strong>AtomPay Wallet - JOHN DOE</strong>
                    </div>
                    <div>
                        <span>Account Number:</span>
                        <strong>9012345678</strong> <!-- Replace with dynamically generated unique account number -->
                    </div>
                    <div>
                        <span>Amount:</span>
                        <strong>₦ 5,000.00</strong>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="copyAccountDetails()">Copy Account Number</button>
            </div>

            <p class="return-dashboard-link">
                <a href="index.php">Return to Dashboard</a>
            </p>
        </div>
    </main>
    
<?php include 'footer.php';  ?>  
