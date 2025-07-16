    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="#" class="nav-logo">Atom<span>Pay</span></a>
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

    <script>
        // Simple dropdown toggle for user profile
        document.addEventListener('DOMContentLoaded', () => {
            const userProfile = document.getElementById('userProfile');
            if (userProfile) {
                userProfile.addEventListener('click', () => {
                    userProfile.classList.toggle('active');
                });

                // Close dropdown if clicked outside
                document.addEventListener('click', (event) => {
                    if (!userProfile.contains(event.target)) {
                        userProfile.classList.remove('active');
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            // This is a placeholder for dynamic content based on the previous page's selection.
            // In a real application, you would pass the selected amount and method
            // via URL parameters or local storage from the fund_wallet.html page.

            const urlParams = new URLSearchParams(window.location.search);
            const amount = urlParams.get('amount') || '5,000.00'; // Default value
            const method = urlParams.get('method') || 'card'; // Default value

            document.querySelector('.summary-details .value').textContent = `₦ ${amount}`;
            const selectedMethodElement = document.getElementById('selectedMethod');
            const cardInstructions = document.getElementById('cardInstructions');
            const bankTransferInstructions = document.getElementById('bankTransferInstructions');

            if (method === 'card') {
                selectedMethodElement.textContent = 'Card Payment';
                cardInstructions.style.display = 'block';
                bankTransferInstructions.style.display = 'none';
            } else if (method === 'bankTransfer') {
                selectedMethodElement.textContent = 'Bank Transfer';
                cardInstructions.style.display = 'none';
                bankTransferInstructions.style.display = 'block';
                // Update dynamic bank details if needed (e.g., actual unique account number)
                document.querySelector('.bank-details-grid strong:last-of-type').textContent = `₦ ${amount}`;
            }
        });

        function redirectToPaymentGateway() {
            // In a real application, this would redirect to a payment gateway URL.
            // For this demo, it's just a placeholder.
            console.log("Redirecting to secure payment gateway...");
            // window.location.href = "https://secure-payment-gateway.com/pay?amount=5000&ref=ATOMPAY123";
            alert("Simulating redirect to payment gateway. Your payment process would continue here.");
        }

        function copyAccountDetails() {
            const accountNumberElement = document.querySelector('.bank-details-grid strong:nth-child(2)'); // Assumes Account Number is the second strong tag
            const accountNumber = accountNumberElement.textContent;
            
            // Use deprecated document.execCommand for broader iFrame compatibility
            const tempInput = document.createElement('textarea');
            tempInput.value = accountNumber;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            alert("Account number copied: " + accountNumber);
        }
    </script>

</body>
</html>