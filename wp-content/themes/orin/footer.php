<footer class="footer">
    <div class="container__footer">
        <div class="row">
            <div class="footer-col">
                <h4 id="logo__footer"> bee store</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                    <li><a><?php 
                            $copyright='Design by Dieu';
                            echo apply_filters('dieu_copyright',$copyright);
                        ?></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">
                    <?php
                        $args_cat=array(
                            'type' => 'post',
                            'number' => 4,
                        );
                        $categories = get_categories($args_cat);
                            foreach($categories as $category) {
                            echo '<div class="cate__footer" ><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                            echo '</div>';
                        }
                        ?>
                    </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>