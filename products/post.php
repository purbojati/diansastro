<div id="main" itemscope itemtype="http://schema.org/Product">
	<div id="content">
 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div id="product-container">
        <span>
          <h2 class="content-title" itemprop="name"><?php the_title();?> </h2>
        </span>
        <span>
          <div class="col">
            <?php if(has_post_thumbnail()):?>
              <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'itemprop' => 'image') ); ?><?php else:?>
                <img src="<?php echo get_template_directory_uri() ?>/img/ads300.jpg" alt="<?php the_title(); ?>">
              <?php endif;?>
          </div>
          <div class="col">
            <div class="box">
              <img src="<?php echo get_template_directory_uri() ?>/img/cpu.png" alt="<?php the_title(); ?>">
              <b>CPU</b>
              <br>
              <small><?php echo the_field('processor');?></small>
            </div>
            <div class="box">
              <img src="<?php echo get_template_directory_uri() ?>/img/vga.png" alt="<?php the_title(); ?>">
              <b>VGA</b>
              <br>
              <small><?php echo the_field('kartu_grafis');?></small>
            </div>
            <div class="box">
              <img src="<?php echo get_template_directory_uri() ?>/img/ram.png" alt="<?php the_title(); ?>">
              <b>RAM</b>
              <br>
              <small><?php echo the_field('ram');?></small>
              <n itemprop="datePublished">
              </n>
            </div>
            <div class="box">
              <img src="<?php echo get_template_directory_uri() ?>/img/layar.png" alt="<?php the_title(); ?>">
              <b>LAYAR</b>
              <br>
              <small><?php echo the_field('ukuranLayar');?></small>
            </div>
            <div class="clearfix"></div>
						<h1 style="font-size: 14px; font-weight:normal">Harga <?php the_title(); ?></h1>
            <div id="offering" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <b itemprop="description">Rp. <?php echo the_field('harga');?></b><meta itemprop="priceCurrency" content="IDR"  /><meta itemprop="price" content="<?php echo str_replace('.', "", the_field('harga'));?>" />
              <a class="" href="https://www.arenalaptop.com/jual-laptop-online/" target="_blank">Beli</a>
            </div>
          </div>
        </span>
        <span>
        </span>
      </div>
		
		   <div class="entry" itemprop="description">
 			<?php the_content(); ?>
			<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
    			<meta content="<?php echo the_field('rating');?>" itemprop="ratingValue" />
   				<meta content="13" itemprop="reviewCount" />
    		</div>
			<meta content="<?php echo the_field('brand');?>" itemprop="brand" />
			   <?php if (function_exists ('adinserter')) echo adinserter (5); ?>
 		   </div>
       <div id="spec-container">
         <h2>Spesifikasi <?php the_title(); ?></h2>
         <h3>Info Dasar</h3>
         <span>
           Nama Produk
         </span>
         <span>
           <?php the_title(); ?>
         </span>
         <span>
          Brand
         </span>
         <span>
           <?php echo the_field('brand');?>
         </span>
         <span>
          tipe
         </span>
         <span>
           <?php echo the_field('tipe');?>
         </span>
         <span>
          OS
         </span>
         <span>
           <?php echo the_field('os');?>
         </span>
         <div class="clearfix"></div>
         <h3>Screen</h3>
         <span>
           Ukuran Layar
         </span>
         <span>
           <?php echo the_field('ukuranLayar');?>
         </span>
         <span>
           Resolusi
         </span>
         <span>
           <?php echo the_field('resolusi');?>
         </span>
         <div class="clearfix"></div>
         <h3>Hardware</h3>
         <span>
          Processor
         </span>
         <span>
           <?php echo the_field('processor');?>
         </span>
         <span>
          Model
         </span>
         <span>
           <?php echo the_field('generasi');?>
         </span>
         <span>
          Kecepatan
         </span>
         <span>
           <?php echo the_field('kecepatan');?>
         </span>
         <div class="clearfix"></div>
         <h3>Memory</h3>
         <span>
          RAM
         </span>
         <span>
           <?php echo the_field('ram');?>
         </span>
         <span>
          Tipe Memory
         </span>
         <span>
           <?php echo the_field('tipe_memory');?>
         </span>
         <span>
          HDD
         </span>
         <span>
           <?php echo the_field('hdd');?>
         </span>
         <span>
          SSD
         </span>
         <span>
           <?php echo the_field('ssd');?>
         </span>
         <div class="clearfix"></div>
         <h3>Graphic</h3>
         <span>
          VGA
         </span>
         <span>
           <?php echo the_field('kartu_grafis');?>
         </span>
         <span>
          Ukuran VGA
         </span>
         <span>
           <?php echo the_field('ukuran_vga');?>
         </span>
         <div class="clearfix"></div>
         <h3>Design</h3>
         <span>
          Berat
         </span>
         <span>
           <?php echo the_field('berat');?>
         </span>
         <span>
          Warna
         </span>
         <span>
           <?php echo the_field('warna');?>
         </span>
         <div class="clearfix"></div>
         <h3>Additional</h3>
         <span>
          DVD-RW
         </span>
         <span>
           <?php echo the_field('dvd');?>
         </span>
         <span>
          Kamera
         </span>
         <span>
           <?php echo the_field('kamera');?>
         </span>
         <span>
          Bluetooth
         </span>
         <span>
           <?php echo the_field('bluetooth');?>
         </span>
         <div class="clearfix"></div>
		   <?php if (function_exists ('adinserter')) echo adinserter (9); ?>
       </div>
 		<div class='clearfix'></div>
 	<?php wpb_set_post_views(get_the_ID()); endwhile; ?>
 </div>
 <?php else : ?>
 	<h2>Tidak ditemukan.</h2>
 	<div class="entry">Maaf, sepertinya Anda mencari yang tidak ada disini.</div>
 <?php endif; ?>

 <?php get_sidebar(); ?>
 <div class='clearfix'></div>
 </div>
 <?php
 require get_template_directory() . '/products/related-product.php';
 ?>
<div class="kit">
		<h3 class="htiga">Kasih komentar gan</h3>
		<?php comments_template(); ?>
	</div>