    </main>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-top">
                <div>
                    <span class="brand" aria-label="DigiFintech">
                        <span class="brand-mark" aria-hidden="true"></span>
                        DigiFintech
                    </span>
                    <p class="footer-desc">
                        Powering Digital Growth Through Performance, Technology & Partnerships.
                    </p>
                </div>
                <div>
                    <h3>Explore</h3>
                    <nav class="footer-links" aria-label="Footer explore navigation">
                        <a href="#services">Capabilities</a>
                        <a href="#industries">Industries</a>
                        <a href="#technology">Technology</a>
                        <a href="#publishers">Publishers</a>
                    </nav>
                </div>
                <div>
                    <h3>Capabilities</h3>
                    <nav class="footer-links" aria-label="Footer capabilities navigation">
                        <a href="#services">Performance Marketing</a>
                        <a href="#services">Lead Generation</a>
                        <a href="#services">Campaign Management</a>
                        <a href="#services">Customer Support</a>
                    </nav>
                </div>
                <div>
                    <h3>Connect</h3>
                    <nav class="footer-links" aria-label="Footer connect navigation">
                        <a href="https://digifintech.in">digifintech.in</a>
                        <span>HQ: Rewa, Madhya Pradesh, India</span>
                        <a href="#home" style="margin-top: 1rem;">Back to top <svg viewBox="0 0 16 16" aria-hidden="true"><path d="M4 12 12 4M5 4h7v7" /></svg></a>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; <?php echo date('Y'); ?> DigiFintech Solution Private Limited. All rights reserved.</span>
                <span>CIN: U78300MP2024PTC072576 | RoC-Gwalior</span>
            </div>
        </div>
    </footer>

    <!-- Global JavaScript -->
    <script src="/assets/js/main.js" defer></script>
    <script src="/assets/js/animations.js" defer></script>
    <script src="/assets/js/navigation.js" defer></script>
    <script src="/assets/js/interactions.js" defer></script>
    
    <?php if (isset($extra_js)): ?>
        <?php foreach($extra_js as $js): ?>
            <script src="<?php echo escape($js); ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
