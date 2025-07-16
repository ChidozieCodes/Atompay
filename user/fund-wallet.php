<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtomPay | Fund Wallet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font import to use Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fund.css">
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
        <div class="fund-wallet-card">
            <h2>Fund Your Wallet</h2>
            <p class="subtitle">Choose a convenient method to add funds to your AtomPay account.</p>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="amount">Amount to Fund (₦)</label>
                    <input type="number" id="amount" name="amount" placeholder="e.g., 5000" min="100" required>
                </div>

                <div class="form-group">
                    <label>Choose Payment Method</label>
                    <div class="payment-methods">
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="card" checked>
                            <div class="method-info">
                                <h4>Pay with Card</h4>
                                <p>Securely fund your wallet using your debit or credit card.</p>
                            </div>
                        </label>
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="bankTransfer">
                            <div class="method-info">
                                <h4>Bank Transfer</h4>
                                <p>Transfer funds directly from your bank account to your unique AtomPay account number.</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <a href="proceed_to_fund.php" class="btn btn-primary">Proceed to Fund</a>
            </form>
        </div>
    </main>
    
<?php include 'footer.php';  ?>  
