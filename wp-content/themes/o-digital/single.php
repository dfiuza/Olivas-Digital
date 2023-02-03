<?php
   //Template Name: Single
?>
<?php get_header(); ?>

<div class="container-fluid text-center">
   <h1 class="">Sobre o Curso</h1>
   <?php

      if(have_posts()) {
         while (have_posts()){
            the_post();
            ?>
             <div class="card"">
                 <div class="card-img-top img-fluid rounded"><?= the_post_thumbnail();?></div>
                 <div class="card-body">
                     <h4 class="card-title"><?= the_title();?></h4>
                     <p class="card-text"><?=the_content(); ?></p>
                     <p class="card-text"><?=the_date(); ?></p>
                 </div>
             </div>
            <?php
         }
      }
   ?>

</div>

<br>

<hr>

<br>

<div class="container text-center">
    <h1>Outros cursos relacionados</h1>
</div>

<?php
   if (!empty($_GET['cursos'])){
      $cursoSelecionado = array(array(
          'taxonomy' => 'cursos',
          'field' => 'name',
          'terms' => $_GET['cursos']
      ));
   }

   $args = array(
       'post_type' => 'projetos',
       'tax_query' =>!empty($_GET['cursos']) ? $cursoSelecionado : ''
   );
   $query = new WP_Query($args);
   if($query -> have_posts()) {
      while ($query->have_posts()){
         $query->the_post();
         ?>
          <div class="card text-center">
              <div class="card-img-top img-fluid rounded"><?= the_post_thumbnail();?></div>
              <div class="card-body">
                  <h4 class="card-title"><?= the_title();?></h4>
                  <p class="card-text"><?=the_content(); ?></p>
                  <p class="card-text"><?=the_date(); ?></p>
                  <a href="<?php the_permalink() ?>" class="btn btn-success">+ Informações</a>
              </div>
          </div>
         <?php
      }
   }
?>

<?php get_footer(); ?>
