<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* e.g., it puts together the home page when no home.php file exists.
*
* Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/

get_header(); ?>

    <div class="" >
        <div id="test1" class="col s12 animated fadeIn">
            <div style="background-color:#f7ce0538; padding-bottom: 20px;">
                <br>
                <h5 class="center-align title-banner-home" >Lançamentos em 
                    <b style="color: red;">LOTEAMENTOS</b>
                </h5>
                <br>
		<div id="myCarousel" class="carousel slide" data-ride="myCarousel">
			<ol class="carousel-indicators">
					<!-- Indicators -->
					<?php
						$active = "";
						$i = 0;
						$count = 1;
						$args = array(
						   'post_type' => 'banner_loteamento'
					   );
					   $query = new WP_Query(array( 'post_type' => 'banner_loteamento', 'meta_key' => 'posicao',
					   'orderby' => 'meta_value',
					   'order'   => 'ASC',));
					   if ($query->have_posts()) {
						   while ($query->have_posts()) {
							   $query->the_post();
							   $imagem_banner = get_field('imagem_banner');
							   $posicao = get_field('posicao');
							   $link = get_field('link_redirecionamento');

							   $id = get_the_ID();
							   // echo $id;
							   // echo $imagem_banner;
							   // echo $posicao;

							   if($i == 0){
									$active = "active";
								   ?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
							<?php
									$i = $i + 1;
							   }else if(isset($posicao)){
								   $active = "";
								   ?>
						<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class=""></li>
							<?php		
								   $i = $i + 1;
							   }
							   ?>
					 <?php 
					}
				}
					?>
			</ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
				 $active = "";
					   $i = 0;
                $args = array(
                   'post_type' => 'banner_loteamento'
               );
               $query = new WP_Query(array( 'post_type' => 'banner_loteamento', 'meta_key' => 'posicao',
               'orderby' => 'meta_value',
               'order'   => 'ASC',));
               if ($query->have_posts()) {
                   while ($query->have_posts()) {
                       $query->the_post();
                       $imagem_banner = get_field('imagem_banner');
                       $posicao = get_field('posicao');
                       $link = get_field('link_redirecionamento');
                       
                       $id = get_the_ID();
                       // echo $id;
                       // echo $imagem_banner;
                       // echo $posicao;
                      
                       if($i == 0){
						   	$active = "active";
						    $i = 1;
					   }else{
						   $active = "";
					   }
                       	
                       ?>
                <div class="item  <?php echo $active; ?>">
                    <a href="<?php echo $link; ?>">
						<img src="<?php echo $imagem_banner['url'];?>" alt="">
                    </a>
                </div>
                <?php 
            }
        }
            ?>
            </div>
          
            <!-- Left and right controls 
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Próximo</span>
            </a>-->
          </div>
				
                <!--<section class="row">
                    <div class="slider">
                        <ul class="slides">

                        <?php
                         $args = array(
                            'post_type' => 'banner_loteamento'
                        );
                        $query = new WP_Query(array( 'post_type' => 'banner_loteamento', 'meta_key' => 'posicao',
                        'orderby' => 'meta_value',
                        'order'   => 'ASC',));
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $imagem_banner = get_field('imagem_banner');
                                $posicao = get_field('posicao');
                                $link = get_field('link_redirecionamento');
                                
                                $id = get_the_ID();
                                // echo $id;
                                // echo $imagem_banner;
                                // echo $posicao;
                                ?>
                            <li>
                                <a href="<?php echo $link; ?>">
                                    <img src="<?php echo $imagem_banner['url'];?>">
                                </a>
                            </li>
                            <?php 
                            }
                        }
                            ?>
                        </ul>
                    </div>
                </section>-->
            </div>
            <div style="background-color: #f7ce0538; padding-bottom: 20px;" >
                <h5 class="center-align title-banner-home">Lançamentos em 
                    <b style="color: red;">RESIDÊNCIAS</b>
                </h5>
                <br>
				
				<!-- <div id="myCarousel2" class="carousel slide" data-ride="carousel"> -->
                <div class="row">
                    <!-- Renderizer Boolets -->
			        <!-- <ol class="carousel-indicators">
                            <?php
                                $active = "";
                                $i = 0;
                                $count = 1;
                                $args = array(
                                    'post_type' => 'banner_residencia'
                                );
                                $query = new WP_Query(array( 'post_type' => 'banner_residencia', 'meta_key' => 'posicao',
                                'orderby' => 'meta_value',
                                'order'   => 'ASC',));
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $imagem_banner = get_field('imagem_banner');
                                    $posicao = get_field('posicao');
                                    $link = get_field('link_redirecionamento');
                                    $id = get_the_ID();
                                    if($i == 0){
                                            $active = "active";
                                        ?>
                                <li data-target="#myCarousel2" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
                                    <?php
                                            $i = $i + 1;
                                    }else if(isset($posicao)){
                                        $active = "";
                                        ?>
                                <li data-target="#myCarousel2" data-slide-to="<?php echo $i; ?>" class=""></li>
                                    <?php		
                                        $i = $i + 1;
                                    }
                                    ?>
                            <?php 
                            }
                        }
                            ?>
			        </ol> -->
          
                    <!-- Wrapper for slides Renderizer Images -->
                    <!-- <div class="carousel-inner"> -->
                        <div class="owl-carousel">
                        <?php
                            $args = array(
                                'post_type' => 'referencias',  
                                'meta_key' => 'vitrine',
                                'orderby' => 'meta_value',
                                'order'   => 'DESC',
                                'posts_per_page' => 7,
                                'meta_query' => array(
                                    array(
                                    'key' => 'vitrine',
                                    'value' => true,
                                    'type' => 'BOOLEAN',
                                    ),
                                ) 
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                $item = 0;
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    $imagem_principal = get_field('imagem_principal');
                                    $nome = get_field('nome');
                                    $numero_referencia = get_field('numero_referencia');
                                    $preco = get_field('preço');
                                    $id = get_the_ID();
                        ?>
                                    <!-- <div class="item <?php echo $active; ?>"> -->
                                        <div class="col l12 s12 ">
                                            <div class="card hoverable">
                                            <?php if(get_field('imovel_financiavel')){ ?>
                                                <span class="mark-wather"><img style="    position: absolute;    z-index: 9999; width: 30% !important;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/_financiamento.png"></span>
                                            <?php }else if(get_field('imovel_parcelamento')){ ?>
                                                <span class="mark-wather"><img style="    position: absolute;    z-index: 9999; width: 30% !important;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/carimbo_financiamento.png"></span>
                                            <?php } ?>
                                            
                                                <div class="card-image waves-effect waves-block waves-light">
                                                <a href="/referencias/<?php echo get_field('numero_referencia'); ?>" >
                                                
                                                <?php if(isset($imagem_principal['url'])){?>
                                                    <img class="activator" src="<?php echo $imagem_principal['url']; ?>">
                                                    <span style="display: none;" class="srcImage"><?php echo $imagem_principal['url']; ?></span>
                                                <?php }else{
                                                    $srcImage = "http://imobiliariafuji.com.br/referencias/" . $numero_referencia . "/1.jpg";
                                                    ?>
                                                    <img class="activator" src="<?php echo $srcImage ; ?>">
                                                    <span style="display: none;" class="srcImage"><?php echo $srcImage; ?></span>
                                                <?php }?>
                                                </a>
                                                </div>

                                                <div class="card-content">
                                                    <div class="card-title activator grey-text text-darken-4 center name" style="font-size: 100%;">
                                                    <?php echo get_field('nome'); ?>
                                                    </div>
                                                    <div class="center " class="" style="font-size:20px; color: #e53935;">REF -  <?php echo get_field('numero_referencia'); ?></div>
                                                    <div class="center" style="font-size:20px; color: black;">
                                                    <?php
                                                    if (preg_match("/partir/", strtolower(get_field('preço')))){
                                                        echo get_field('preço');
                                                    }else{
                                                    ?>
                                                    R$
                                                    <?php 
                                                        echo get_field('preço'); 
                                                    }
                                                    ?>
                                                    </div>
                                                    <span style="display: none;" class="preco"><?php  echo get_field('preço'); ?></span>
                                                    <span style="display: none;" class="referencia"><?php  echo get_field('numero_referencia'); ?></span>
                                                    <span>
                                                        <a href="/referencias/<?php echo get_field('numero_referencia'); ?>" class="waves-effect waves-block waves-light center-align" style="background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;">                                     <i class="material-icons" style="margin-left: -30px;position: absolute;"> add_circle_outline</i> Detalhes</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                    <?php 
                                }
                            }
                                ?>
                    </div>
					
					<!--
                <section class="row">
                    <div class="slider">
                    <ul class="slides">

                        <?php
                        $args = array(
                            'post_type' => 'banner_residencia'
                        );
                        $query = new WP_Query(array( 'post_type' => 'banner_residencia', 'meta_key' => 'posicao',
                        'orderby' => 'meta_value',
                        'order'   => 'ASC',));
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $imagem_banner = get_field('imagem_banner');
                                $posicao = get_field('posicao');
                                $link = get_field('link_redirecionamento');
                                
                                $id = get_the_ID();
                                ?>
                            <li>
                                <a href="<?php echo $link; ?>">
                                    <img src="<?php echo $imagem_banner['url'];?>">
                                </a>
                            </li>
                            <?php 
                            }
                        }
                            ?>
                        </ul>
                    </div>
                </section>-->
            </div>

            <div style="background-color: #f7ce0538; padding-bottom: 20px;">
                <h5 class="center-align title-banner-home">Parceria em  
                    <b style="color: red;">LOTEAMENTOS</b>
                </h5>
                <br>
                <section>
                    <div class="row" style="margin-bottom: 35px;">
                        <div class="col m12 s12">
                            <a href="/fale-conosco">
                                <img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/parcerias-loteamentos.jpg">
                            </a>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

<?php get_footer(); ?>