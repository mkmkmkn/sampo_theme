<footer id="footer">
    <div class="footer-btn">
        <button class="btn-return"><span></span></button>
    </div>
    <ul class="footer-container">
        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <p>HOME</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/travel')); ?>">
                <p>TRAVEL</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <p class="footer-logo">TWG</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/photography')); ?>">
                <p>PHOTOGRAPHY</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">
                <p>CONTACT</p>
            </a>
        </li>
    </ul>
    <div class="footer-credit">
        <p>©2022 mk</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>