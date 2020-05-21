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
                        <select name="orderType" id="order">
                            <option value="" disabled selected>Ordenar por:</option>
                            <option value="1" style="color: red !important;">Menor Preço</option>
                            <option value="2" style="color: red !important;">Maior Preço</option>
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
    <div class="row lst-card">

        <?php
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        $orderType = isset($_GET['orderType']) ? $_GET['orderType'] : "";
        // echo($keyword);
        echo ($orderType);
        if (!empty($keyword)) {
            echo ('OIII');
            $args = array(
                'post_type' => 'referencias',
                'meta_key' => 'numero_referencia',
                'orderby' => 'meta_value',
                'order'   => 'DESC',
            );
        } else {
            // echo ('OIII2');
            $args = array(
                'meta_query' => array(
                    array(
                        'type' => 'NUMERIC'
                    )
                ),
                'post_type' => 'referencias',
                'category_name' => 'loteamentos',
                'meta_key' => 'ordenacao',
                'orderby' => 'meta_value',
                // 'posts_per_page' => 10,
                'order'   => 'ASC',
            );
        }

        $query = new WP_Query($args);
        if ($query->have_posts()) {

            $item = 0;
            while ($query->have_posts()) {
                $query->the_post();
                $imagem_principal = get_field('imagem_principal');
                $nome = get_field('nome');
                $numero_referencia = get_field('numero_referencia');
                $preco = get_field('preço');
                $ordenacao = get_field('ordenacao');
                

                $id = get_the_ID();

                $img_url = '';
                if (empty($imagem_principal['url'])) {
                    $img_url = 'http://imobiliariafuji.com.br/referencias/' . $numero_referencia . '/1.jpg';
                } else {
                    $img_url = $imagem_principal['url'];
                }

                if (isset($keyword)) {
                    $pattern = '/' . strtolower($keyword) . '/';
                    if (preg_match($pattern, strtolower($nome)) || preg_match($pattern, strtolower($numero_referencia))) {
                        // echo 'Tag encontrada';
                        $item = 1;
        ?>
                        <div class="col l3 s12 ">
                            <div class="card hoverable">
                                <?php if (get_field('imovel_financiavel')) { ?>
                                    <span class="mark-wather"><img style="    position: absolute;    z-index: 9999;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/_financiamento.png"></span>
                                <?php } else if (get_field('imovel_parcelamento')) { ?>
                                    <span class="mark-wather"><img style="    position: absolute;    z-index: 9999;" class="activator" src="<?php echo get_template_directory_uri(); ?>/img/carimbo_financiamento.png"></span>

                                <?php } ?>
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="<?php echo  get_permalink(); ?>">
                                        <img class="activator" src="<?php echo $img_url; ?>">
                                        <span style="display: none;" class="srcImage"><?php echo $img_url; ?></span>
                                    </a>
                                </div>


                                <div class="card-content">
                                    <div class="card-title activator grey-text text-darken-4 center name" style="font-size: 100%;">
                                        <?php echo get_field('nome'); ?>
                                    </div>
                                    <!-- <div class="center " class="" style="font-size:20px; color: #e53935;">REF -  <?php echo get_field('numero_referencia'); ?></div> -->
                                    <div class="center" style="font-size:22px; color: black;"><?php echo get_field('preço'); ?></div>
                                    <span style="display: none;" class="preco"><?php echo get_field('preço'); ?></span>
                                    <span style="display: none;" class="referencia"><?php echo get_field('numero_referencia'); ?></span>
                                    <span>
                                        <a href="<?php echo  get_permalink(); ?>" class="waves-effect waves-block waves-light center-align" style="background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;"> <i class="material-icons" style="margin-left: -30px;position: absolute;"> add_circle_outline</i>
                                        Detalhes
                                        </a>
                                    </span>

                                </div>
                            </div>
                        </div>
        <?php
                    }
                }
            }
            if ($item == 0) {
                echo ('<h5 style="margin-top: 0px;" class="center">Desculpe! o Termo "' . $keyword . '" não foi encontrado...</h5>');
            }
            wp_reset_postdata();
        }
        ?>
    </div>
    <br>
</div>

<?php get_footer(); ?>