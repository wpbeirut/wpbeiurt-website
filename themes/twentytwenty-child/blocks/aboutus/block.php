<!-- partial:index.partial.html -->
<!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->

<section id="wrapper">
   <div class="content">
      <!-- Tab links -->
      <div class="tabs">
         <button class="tablinks active" data-country="<?php block_field( 'title1' ); ?>"><p data-title="<?php block_field( 'title1' ); ?>"><?php block_field( 'title1' ); ?></p></button>
         <button class="tablinks" data-country="<?php block_field( 'title2' ); ?>"><p data-title="<?php block_field( 'title2' ); ?>"><?php block_field( 'title2' ); ?></p></button>
         <button class="tablinks" data-country="<?php block_field( 'title3' ); ?>"><p data-title="<?php block_field( 'title3' ); ?>"><?php block_field( 'title3' ); ?></p></button>
         
      </div>

      <!-- Tab content -->
      <div class="wrapper_tabcontent">
         <div id="<?php block_field( 'title1' ); ?>" class="tabcontent active">
            <h3><?php block_field( 'title1' ); ?></h3>
            <p><?php block_field( 'text1' ); ?></p>
         </div>

         <div id="<?php block_field( 'title2' ); ?>" class="tabcontent">
            <h3><?php block_field( 'title2' ); ?></h3>
            <p><?php block_field( 'text2' ); ?></p>
         </div>

         <div id="<?php block_field( 'title3' ); ?>" class="tabcontent">
            <h3><?php block_field( 'title3' ); ?></h3>
            <p><?php block_field( 'text3' ); ?></p>
         </div>

         
      </div>
   </div>
</section>
<!-- partial -->
<script  src="<?php echo site_url() ?>/wp-content/themes/twentytwenty-child/blocks/aboutus/script.js"></script>