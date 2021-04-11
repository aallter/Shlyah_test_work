<?php?>

</main>

<!-- footer -->

<footer>
    <!-- map -->
	<?php echo do_shortcode( '[shmMap id="201" map="true"]' ); ?>
    <article class="footer-one">
        <section>
			<?php
				// переменные
					$footer_1_section_1 = get_field('footer_1_section_1');	

					if( $footer_1_section_1 ): ?>    
			
			<img src="<?php echo $footer_1_section_1['footer_logo']; ?>" alt="" width="162px">
            <p style="font-size:12px;"><?php echo $footer_1_section_1['footer_text_1']; ?></p>
            <p style="margin-top:50px;"><?php echo $footer_1_section_1['footer_text_2']; ?></p>
			<a href="<?php echo $footer_1_section_1['link_company_1']; ?>"><img src="<?php echo $footer_1_section_1['company_1']; ?>" alt="rozetka"></a>
            <a href="<?php echo $footer_1_section_1['link_company_2']; ?>"><img src="<?php echo $footer_1_section_1['company_2']; ?>" alt="prom"></a> <br>
            <a href="<?php echo $footer_1_section_1['link_company_3']; ?>"><img src="<?php echo $footer_1_section_1['company_3']; ?>" alt="zakupka"></a>
					<?php endif; ?>
			
            
        </section>
        <section>
            <ul>
                <?php wp_nav_menu( [ 
	'theme_location'  => '',
	'menu'            => 'menu_one', 
	'items_wrap' => '%3$s' ] ); ?>
                <li><a href="<?php echo the_field('link_insta'); ?>"><img src="<?php echo the_field('insta_img'); ?>" alt="instagramm"></a><a href="<?php echo the_field('link_facebook'); ?>"><img src="<?php echo the_field('facebook_img'); ?>" alt="facebook" style="padding-left:20px;"></a></li>
            </ul>
        </section>
        <section>
            <ul>
				<?php
				// переменные
					$footer_2_section_3 = get_field('footer_2_section_3');	

					if( $footer_2_section_3 ): ?>
				<li><u><?php echo $footer_2_section_3['footer_text_3_1']; ?></u>  </li>
                <li><i class="fas fa-map-marker-alt" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_3['footer_text_3_2']; ?></li>
                <li><i class="fas fa-phone-square-alt" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_3['footer_text_3_3']; ?></li>
                <li style="margin-top:50px;"><i class="fas  fa-clock" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_3['footer_text_3_4']; ?></li>
					<?php endif; ?>
                
            </ul>
        </section>
        <section>
            <ul>
                <?php
				// переменные
					$footer_2_section_4 = get_field('footer_2_section_4');	

					if( $footer_2_section_4 ): ?>
				<li><u><?php echo $footer_2_section_4['footer_text_4_1']; ?> </u> </li>
                <li><i class="fas fa-map-marker-alt" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_4['footer_text_4_2']; ?></li>
                <li><i class="fas  fa-phone-square-alt" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_4['footer_text_4_3']; ?></li>
                <li><i class="fas fa-phone-square-alt" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_4['footer_text_4_4']; ?></li>
				<li><i class="fas  fa-envelope" style="padding-right:10px;color:#FFA900;"></i><?php echo $footer_2_section_4['footer_text_4_5']; ?></li>
                <li><i class="fas  fa-clock" style="padding-right:10px;color:#FFA900;"> </i><?php echo $footer_2_section_4['footer_text_4_6']; ?></li>
					<?php endif; ?>
            </ul>
        </section>
    </article>

    <!-- 2 footer mini -->

    <article class="footer-two">
		
		<?php
				// переменные
					$footer_2 = get_field('footer_2');	

					if( $footer_2 ): ?>    
               	<p><?php echo $footer_2['footer2_left_text']; ?></p>
        		<p><?php echo $footer_2['footer2_right_text']; ?> <img style="margin-left:20px;" src="<?php echo $footer_2['footer_right_img']; ?>"></p>
					<?php endif; ?>
        
    </article>
</footer>











<!-- kit font awesome -->
<script src="https://kit.fontawesome.com/fc508a3a10.js" crossorigin="anonymous"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>

