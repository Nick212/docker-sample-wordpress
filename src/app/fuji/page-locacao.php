<?php get_header(); ?>

<section>
    <div class="row" style="margin-bottom: 0px; background-color: #f7ce0538;">
        <div class="container">
            <br>
            <form name="form-search" action="/casas" method="get">
                <div class="col s12 m9 pull left">
                
                
                        <div class="row ">
                            <div class="col s8 m8">
                                    <input type="text" name="keyword" class="disable input-search" autofocus placeholder=" Pesquisar por casas, chácaras, lotes...">
                            </div>
                            <div class="col s2 m4">
                                    <button type="submit" class="btn btn-primary btn-large btn-search" style="">
                                    <span class="label-search">Pesquisar </span> 
                                        <i class="material-icons right">search</i>
                                    </button>
                            </div>
                        </div>
                
                </div>
                <div class=" col s12 m3 pull right">
                    <div class="input-field col s12" style="    margin-top: 2px;">
                        <!-- <select name="orderType" onchange="document.forms['form-search'].submit();"> -->
                        <select name="orderType" id="order" >
                        <option value="" disabled selected>Ordenar por:</option>
                        <option value="1"  style="color: red !important;">Menor Preço</option>
                        <option value="2"  style="color: red !important;">Maior Preço</option>
                        <!-- <option value="3" style="color: red !important;">Alfabética</option> -->
                        <option value="4" style="color: red !important;">Referência</option>
                        </select>
                        <!-- <label>Ordenar por:</label> -->
                    </div>
                </div>
                </form>
        </div>
    </div>
</section>
<div id="test2" class="col s12 animated fadeIn" style="background-color: #f7ce0538;">
        <div class="row">
   
    <?php 
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $orderType = isset($_GET['orderType']) ? $_GET['orderType'] : "";

    // echo($keyword);
    // echo($orderType);
    if($orderType == 1){
        $args = array(
            'post_type' => 'referencias',  
            'category_name' => 'locacao',
            'meta_key' => 'preço',
            'orderby' => 'meta_value',
            'order'   => 'ASC',
        );
        // echo($orderType);
    }
    else if($orderType == 2){
        $args = array(
            'post_type' => 'referencias',  
            'category_name' => 'locacao',
            'order'   => 'DESC',
            'meta_key' => 'preço',
            'orderby' => 'meta_value'
        );
        // echo($orderType);
    }
    else if($orderType == 3){
        $args = array(
            'post_type' => 'referencias',  
            'category_name' => 'locacao',
            'meta_key' => 'nome',
            'orderby' => 'meta_value',
            'order'   => 'ASC',
        );
        // echo($orderType);
    }
    else if($orderType == 4){
        $args = array(
            'post_type' => 'referencias',  
            'category_name' => 'locacao',
            'meta_key' => 'numero_referencia',
            'orderby' => 'meta_value',
            'order'   => 'ASC',
        );
        // echo($orderType);
    }
    else{
        $args = array(
            'post_type' => 'referencias',  
            'category_name' => 'locacao',
            'meta_key' => 'numero_referencia',
            'orderby' => 'meta_value',
            'order'   => 'DESC',
        );
    }

   //  $query = new WP_Query($args);
   $query = new WP_Query($args);

    // $query = new WP_Query(array( 'post_type' => 'referencias',  'category_name' => 'locacao' ));
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $imagem_principal = get_field('imagem_principal');
            $nome = get_field('nome');
            $numero_referencia = get_field('numero_referencia');
            $preco = get_field('preço');
            
            $id = get_the_ID();
            ?>
            <div class="col l3 s12">
                <div class="card hoverable">
                <?php if(get_field('imovel_financiavel')){ ?>
                    <span class="mark-wather"><img style="    position: absolute;    z-index: 9999;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/_financiamento.png"></span>
                <?php }else if(get_field('imovel_parcelamento')){ ?>
                    <span class="mark-wather"><img style="    position: absolute;    z-index: 9999;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/carimbo_financiamento.png"></span>
                    
                <?php } ?>
                    <div class="card-image waves-effect waves-block waves-light">
                    <a href="/referencias/<?php echo get_field('numero_referencia'); ?>" >
                        <img class="activator" src="<?php echo $imagem_principal['url']; ?>">
                    </a>
                    </div>

                    <div class="card-content">
                        <div class="card-title activator grey-text text-darken-4 center">
                        <?php echo get_field('nome'); ?>
                        </div>
                        <div class="center" style="font-size:20px; color: #e53935;">REF -  <?php echo get_field('numero_referencia'); ?></div>
                        <div class="center" style="font-size:25px; color: black;">R$ <?php echo get_field('preço'); ?></div>
                        <span>
                            <a href="/referencias/<?php echo get_field('numero_referencia'); ?>" class="waves-effect waves-block waves-light center-align" style="background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;">                                     <i class="material-icons" style="margin-left: -30px;position: absolute;"> add_circle_outline</i> Detalhes</a>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }
    }else {
            echo('<h5 style="margin-top: 0px;" class="center">Em breve teremos novidades, Fique Atento!</h5>');
    }
    ?>
            
        </div>
    <br>
</div>

<?php get_footer(); ?>