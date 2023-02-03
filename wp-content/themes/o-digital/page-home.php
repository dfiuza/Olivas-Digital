<?php
   //Template Name: Home
?>
<?php get_header(); ?>

<section class="page-header text-center text-light mb-5">
    <div class="overlay">
    </div>
    <div class="container primary">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="title">
                    <h1><?php the_field('chamada_banner')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
   <?php
      get_sidebar();

   ?>
       <div class="col-9">
           <form>
               <div class="form-group">
                   <label for="exampleFormControlSelect1">Todos os cursos</label>
                   <select class="form-control col-6" id="cursos" name="cursos">
                       <option value="">---SELECIONE---</option>
                      <?php
                         $cursos =  get_terms(array('taxonomy' => 'cursos', 'hide_empty' => false));
                         foreach ($cursos as $curso){
                            ?>
                             <option value="<?=$curso->name?>"><?=$curso->name?></option>
                         <?php } ?>
                   </select>
                   <input class="btn btn-success col-6" type="submit" value="Pesquisar">
               </div>
           </form>

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
           <div class="card text-center m-3">
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

       </div>
</div>

<?php get_footer(); ?>

<script>
    $('select').on('change', function() {
        listarClientes("");
    });

    function listarClientes(cursos) {
        $.post('http://olivas-digital.test/', { "type": "terms", "cursos": cursos }).done(function (retorno) {
            let json = $.parseJSON(retorno);
            let conteudo = "";
            for (let i = 0; i < json.length; i++) {
                conteudo += `
            <tr>
                <th scope="col"><img src="${url_imagens + json[i].foto}" width="50px"></th>
                <th scope="col">${json[i].nome}</th>
                <th scope="col">
                    <a class="btn btn-group-xs" title="Editar" href="javascript:consultarCliente(${json[i].idcliente})">
                    <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <a class="btn btn-group-xs" title="Excluir" href="javascript:excluirCliente(${json[i].idcliente})">
                    <i class="far fa-trash-alt"></i>
                    </a>
                </th>
            </tr>
            `;
            }
            $("#listagem_clientes").html(conteudo);
        });
    }
</script>
