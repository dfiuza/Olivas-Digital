<?php
   //Template Name: Contato
   get_header();
   ?>

<section class="container contato text-center">
   <div class="center">
      <div class=" contato-info">
         <h2>Entre em contato</h2>
<!--         <br />-->
<!--         --><?php
//            while(have_rows('nome_tipo_contato')){
//               the_row();
//               ?>
<!--               <p><b>--><?php //echo get_sub_field('categoria'); ?><!--:</b> --><?php //echo get_sub_field('valor'); ?><!--</p>-->
<!--            --><?php //} ?>
<!---->
<!--      </div>-->

      <div class="contato-form">

         <?php the_content(); ?>

<!--         <form>-->
<!--             <input placeholder="Nome" type="text" />-->
<!--             <input placeholder="E-mail" type="text" />-->
<!--             <input placeholder="Telefone" type="text" />-->
<!--             <select>-->
<!--                 <option>Geral</option>-->
<!--                 <option>Suporte</option>-->
<!--             </select>-->
<!--             <textarea placeholder="Mensagem"></textarea>-->
<!--             <input type="submit" value="Enviar!">-->
<!--         </form>-->

      </div>
      <div class="clear"></div>
   </div>
</section>



<?php  get_footer(); ?>


