<?php

   add_theme_support("post-thumbnails");

   function adicionando_recursos(){
      add_theme_support('custom-logo');
   }

   function cadastrando_post_type_projetos(){
      $nomeSingular = "Curso";
      $nomePlural = "Cursos";
      $description = "Teste para Olivas Digital";

      $labels = array(
          "name" => $nomePlural,
          "name_singular" => $nomeSingular,
          "add_new_item" => "Adicionar novo " . $nomeSingular,
          "edit_item" => "Editar " . $nomeSingular
      );

      $supports = array(
          "title",
          "editor",
          "thumbnail"
      );

      $args = array(
          "labels" => $labels,
          "public" => true,
          "menu_position" => 0,
          "description" => $description,
          "menu_icon" => 'dashicons-admin-home',
          "supports" => $supports
      );

      register_post_type("projetos", $args);
   }

   function cursos_registrando_taxonomia(){
      register_taxonomy(
          "cursos",
          "projetos",
          array(
              "labels" => array("name" => "Cursos"),
             "hierarchical" => true,
          )
      );
   }

   // Include
   require get_template_directory().'/include/setup.php';
   require get_template_directory().'/include/ajax.php';

   // Hooks
   add_action("wp_enqueue_scripts", "theme_styles");
   add_action("widgets_init", "widgets");
   add_action("after_setup_theme", "adicionando_recursos");
   add_action("init", "cadastrando_post_type_projetos");
   add_action("init", "cursos_registrando_taxonomia");



