<?php
get_header();
?>
<!-- form callback -->
        <article class="window-callback d-none">
            <h3>Обратная связь <span style="margin-left: 25%;font-size: 16px;cursor: pointer;" id="close_callback">close</span></h3>
            <p>Оставьте заявку и мы с Вами свяжемся!</p>
            <form action="">
                <input type="text" name="name" required pattern="^[A-za-zА-Яа-я]{1,}\s[A-za-zА-Яа-я]{1,}$"placeholder="Ваше имя">
                <input type="text"  name="phone" required pattern="^\+\d{12}$" placeholder="Ваш телефон">
                <input type="text"  required pattern="^\S+@\S+\.\S+$" name="mail" placeholder="Ваша почта">
                <textarea name="" id="" cols="30" rows="5" placeholder="Ваше сообщение"></textarea>
                <input type="submit" value="Отправить" id="button-send">
            </form>
        </article>
<!-- form callback -->
        <!-- slider  -->
        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="<?php the_field('slider_img1'); ?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="<?php the_field('slider_img2'); ?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="<?php the_field('slider_img3'); ?>" class="d-block w-100" alt="...">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>

          <!-- text button -->
          <div class="slider-text">
            <h2><?php the_field('slider_title'); ?></h2>
                <a href="#" id="slider_button"><button><?php the_field('button_title'); ?></button></a>
          </div>

		</div>
        <!-- block 2 3 img -->

        <article class="block-two-img">
			<h3 class="h3-style w-100"><?php the_field('block_2_title'); ?>
                <hr>
            </h3>
            <section>
                <img src="<?php the_field('img_block_2_1'); ?> " alt="">
                <a href="#"><p><?php the_field('text_block_2_1'); ?></p></a>
            </section>
            <section>
                <img src="<?php the_field('img_block_2_2'); ?>" alt="">
                <a href="#"><p><?php the_field('text_block_2_2'); ?></p></a>
            </section>
            <section>
                <img src="<?php the_field('img_block_2_3'); ?>" alt="">
                <a href="#"><p><?php the_field('text_block_2_3'); ?></p></a>
            </section>
        </article>

        <!-- block 3 work way -->

        <article class="block-three-workWay">
            <h3><p><?php the_field('title_block3'); ?>
                <hr>
            </h3>
            
            <ul>
				
				<?php
		
					// переменные
					$item1 = get_field('item1');	

					if( $item1 ): ?>
				 <li>
                    <img src="<?php echo $item1['image_1']; ?>"><span></span>
                    <p> <span>01</span>     <?php echo $item1['text_under1']; ?></p>
                </li>
					<?php endif; ?>
				
				<?php
		
					// переменные
					$item2 = get_field('item2');	

					if( $item2 ): ?>
				 <li>
                    <img src="<?php echo $item2['image_2']; ?>"><span></span>
                    <p> <span>02</span>     <?php echo $item2['text_under2']; ?></p>
                </li>
					<?php endif; ?>
				
				
				<?php
		
					// переменные
					$item3 = get_field('item3');	

					if( $item3 ): ?>
				 <li>
                    <img src="<?php echo $item3['image_3']; ?>"><span></span>
                    <p> <span>03</span>     <?php echo $item3['text_under3']; ?></p>
                </li>
					<?php endif; ?>
				
				
             <?php
		
					// переменные
					$item4 = get_field('item4');	

					if( $item4 ): ?>
				 <li>
                    <img src="<?php echo $item4['image_4']; ?>"><span></span>
                    <p> <span>04</span>     <?php echo $item4['text_under4']; ?></p>
                </li>
					<?php endif; ?>
				
				<?php
		
					// переменные
					$item5 = get_field('item5');	

					if( $item5 ): ?>
				 <li>
                    <img src="<?php echo $item5['image_5']; ?>"><span></span>
                    <p> <span>05</span>     <?php echo $item5['text_under5']; ?></p>
                </li>
					<?php endif; ?>
				
				<?php
		
					// переменные
					$item6 = get_field('item6');	

					if( $item6 ): ?>
				 <li>
                    <img src="<?php echo $item6['image_6']; ?>"><span></span>
                    <p> <span>06</span>     <?php echo $item6['text_under6']; ?></p>
                </li>
					<?php endif; ?>
                
            </ul>
        </article>

        <!-- block 4  -->

        <article class="flex-disp block-four">
            <h3 class="h3-style"><?php the_field('title_block_4'); ?> <hr></h3>
            <section>
				<?php
				// переменные
					$block4_item1 = get_field('block4_item1');	

					if( $block4_item1 ): ?>                    
				<p>  <?php echo $block4_item1['text_item1']; ?></p>
                <img src="<?php echo $block4_item1['image_item1']; ?>">
					<?php endif; ?>
                
            </section>
            <section>
				
				<?php
				// переменные
					$block4_item2 = get_field('block4_item2');	

					if( $block4_item2 ): ?>    
				 <img src="<?php echo $block4_item2['image_item2']; ?>">
				<p>  <?php echo $block4_item2['text_item2']; ?></p>
               
					<?php endif; ?>
               
            </section>
        </article>

        <!-- block video -->
        <article>
            <h3 class="h3-style" style="padding: 0% 10%;"><?php the_field('video_title'); ?>
                <hr>
            </h3>
            <iframe width="100%" height="688px" class="video-youtube" src="<?php the_field('link_video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </article>

        <!-- block 5 НАШИ ПРЕИМУЩЕСТВА -->
        <article class="block-five-skills">
                <h3><?php the_field('advantages_title'); ?>
                    <hr>
                </h3>
                <span>
                    <?php the_field('advantages_text'); ?>
                </span>
            
            <section class="skills">
                
                <ul>
					
					<?php
				// переменные
					$advantages_item_1 = get_field('advantages_item_1');	

					if( $advantages_item_1 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_1['number_1']; ?></p>
                        <p><?php echo $advantages_item_1['description_1']; ?></p>
                    </li>
					<?php endif; ?>
					
                    <br>
                    	<?php
				// переменные
					$advantages_item_2 = get_field('advantages_item_2');	

					if( $advantages_item_2 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_2['number_2']; ?></p>
                        <p><?php echo $advantages_item_2['description_2']; ?></p>
                    </li>
					<?php endif; ?>
                    	<?php
				// переменные
					$advantages_item_3 = get_field('advantages_item_3');	

					if( $advantages_item_3 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_3['number_3']; ?></p>
                        <p><?php echo $advantages_item_3['description_3']; ?></p>
                    </li>
					<?php endif; ?>
                    </ul>
                    <img src="<?php the_field('img_block_middle'); ?>" alt="" class="img-five-block">
                    <ul>
                    	<?php
				// переменные
					$advantages_item_4 = get_field('advantages_item_4');	

					if( $advantages_item_4 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_4['number_4']; ?></p>
                        <p><?php echo $advantages_item_4['description_4']; ?></p>
                    </li>
					<?php endif; ?>
                    	<?php
				// переменные
					$advantages_item_5 = get_field('advantages_item_5');	

					if( $advantages_item_5 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_5['number_5']; ?></p>
                        <p><?php echo $advantages_item_5['description_5']; ?></p>
                    </li>
					<?php endif; ?>
                    	<?php
				// переменные
					$advantages_item_6 = get_field('advantages_item_6');	

					if( $advantages_item_6 ): ?>    
               	
					<li>
                        <i class="fas fa-circle"></i>
                        <p><?php echo $advantages_item_6['number_6']; ?></p>
                        <p><?php echo $advantages_item_6['description_6']; ?></p>
                    </li>
					<?php endif; ?>
                </ul>
            </section>
        </article>

        <!-- CERTIFICATES block -->
        <article class="block-certificates ">
            <h3 class="h3-style"><?php the_field('sertificate_title'); ?>
                <hr>
            </h3>
            <section>
                <img src="<?php the_field('sertificate_1'); ?>" alt="">
                <img src="<?php the_field('sertificate_2'); ?>" alt="">
                <img src="<?php the_field('sertificate_3'); ?>" alt="">
                <section class="see-all">
                    <section class="circle-style"></section>
                    <a href="">Смотреть все</a>
                </section>
            </section>
        </article>

        <!-- form mail -->

        <article class="block-form">
            <h3 class="h3-style">СВЯЖИТЕСЬ С НАМИ</h3>
            <p>Обращайтесь за указанными телефонами и мы обязательно Вас <br> проконсультируем. Всегда рады помочь!  </p>
            <form action="" class="block-form-style">
                <input type="text" name="name" placeholder="Ваше имя" required pattern="^[A-za-zА-Яа-я]{1,}\s[A-za-zА-Яа-я]{1,}$">
                <input type="text" placeholder="Ваш телефон" name="phone" required pattern="^\+\d{12}$">
                <input required pattern="^\S+@\S+\.\S+$" type="email" name="mail" placeholder="Ваша почта">
                <textarea name="" id="" cols="30" rows="1"  placeholder="Ваше сообщение" ></textarea>
                <input type="submit" value="Отправить" id="button-send"><br>
                
                <p><input type="checkbox" id="checkbox">Я согласен с обработкой персональных данных</p>
            </form>
        </article>

<?php
get_footer();
?>