    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>DigiFintech Solution Pvt. Ltd.</h4>
                    <p class="text-secondary">Powering Digital Growth Through Performance, Technology & Partnerships.</p>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#services">Performance Marketing</a></li>
                        <li><a href="#services">Lead Generation</a></li>
                        <li><a href="#services">Campaign Management</a></li>
                        <li><a href="#services">Customer Support</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#technology">Technology Vision</a></li>
                        <li><a href="#publishers">Publisher Network</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li>Website: <a href="https://digifintech.in">digifintech.in</a></li>
                        <li>HQ: Rewa, Madhya Pradesh, India</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> DigiFintech Solution Private Limited. All rights reserved.</p>
                <div class="legal-links">
                    <small>CIN: U78300MP2024PTC072576 | RoC-Gwalior</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Global JavaScript -->
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/animations.js" defer></script>
    
    <?php if (isset($extra_js)): ?>
        <?php foreach($extra_js as $js): ?>
            <script src="<?php echo escape($js); ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
