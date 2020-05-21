<?php get_header(); ?>
<section class="" style="padding-top: 10px; background-color: #f7ce0538; min-height: 850px;">
    <div class="row ">
        <div class="col m6 s12 " id="photo-editor">
            <div id="picasa" style="width:46.5%;height:100%;position:absolute;left:0px;">
            </div>
            <div class="owl-carousel" id="slider-single-mobile">
                <?php
                $count = 0;
                for ($x = 1; $x <= 30; $x++) {
                    $url =  get_field('imagem_' . $x)['url'];
                    if (isset($url)) {
                        echo (" <div><img class='animated fadeIn img-mobile-slider' style='display:none;' src=" . $url . "></div>");
                    } else {
                    }
                }
                ?>
            </div>
        </div>
        <div class="col m6 s12 fadeInRight animated references-description">
            <h3 class="title-detail center"><?php echo get_field('nome'); ?></h3>
            <label for=""></label>

            <div class="col m6 s12">
                <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/">
                    <b>Referência: </b>
                    <label for="" class="label-detail">
                        <?php echo get_field('numero_referencia'); ?>
                    </label>
                </p>
            </div>
            <div class="col m6 s12">
                <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/"><b>Categoria: </b>
                    <label class="label-detail">
                        <?php
                        $cat =  get_the_category();
                        echo $cat[0]->name;
                        ?>
                    </label>
                </p>
            </div>
            <div class="col m6 s12">
                <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/"><b>Área Total: </b>
                    <label for="" class="label-detail">
                        <?php echo get_field('área_total'); ?>
                    </label>
                </p>
            </div>
            <div class="col m6 s12">
                <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/"><b>Localização:</b>
                    <label for="" class="label-detail">
                        <?php echo get_field('localização'); ?>
                    </label>
                </p>
            </div>
            <div class="col m12 s12">
                <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/"><b>Preço </b> <br>
                    <label for="" class="label-detail">
                        <?php echo get_field('descricao_preço'); ?>
                    </label>
                </p>
            </div>
            <?php
            $file_1 = get_field('link_customizado_1');
			$file_2 = get_field('link_customizado_2');
			$file_3 = get_field('link_customizado_3');
			
            $link_download = get_field('link_download');
			
            if (!empty($file_1)) {
            ?>
                <div class="col m12 s12">
                    <p class="label-detail" style="/*background-color: white;box-shadow: 5px 3px red;*/"><b>Anexo</b> <br>
						
						<?php if (!empty($file_1)) { ?>
							<label for="" class="label-detail">
								<a href="<?php echo $file_1['url'];?>" target="_blank">
									<?php echo $file_1['title'];?>
								</a>
							</label>
							<br>
						<?php
							}
						if (!empty($file_2)) { ?>
							<label for="" class="label-detail">
								<a href="<?php echo $file_2['url'];?>" target="_blank">
									<?php echo $file_2['title'];?>
								</a>
							</label>
							<br>
						<?php
							}
						if (!empty($file_3)) { ?>
							<label for="" class="label-detail">
								<a href="<?php echo $file_3['url'];?>" target="_blank">
									<?php echo $file_3['title'];?>
								</a>
							</label>
							<br>
						<?php
							}
						?>
                    </p>
                </div>

            <?php
            }
            ?>
            <div class="col m12 s12" style="font-size: 20px !important;">
                <p class="label-detail">
                    <b>Detalhes</b><br>
                    <span>
                        <?php echo get_field('caracteristicas'); ?>
                    </span>
                    <?php
                    for ($x = 1; $x <= 30; $x++) {
                        $url =  get_field('imagem_' . $x)['url'];

                        if (isset($url)) {
                            echo ("<p style='display:none;' class='img-ref' id='img-ref-$x'>" . $url . "</p>");
                        } else {
                            $ref =  get_field('numero_referencia');
                            $url2 = 'http://imobiliariafuji.com.br/referencias/' . $ref . '/' . $x . '.jpg';
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col m12 s12">

                <a href="/novo-site-imobiliaria-fuji/fale-conosco/?ref=<?php echo get_field('numero_referencia'); ?>" class="waves-effect waves-block waves-light center-align" style="background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;"> <i class="material-icons" style="margin-left: -30px;position: absolute;"> add_circle_outline</i>
                    Entrar em Contato</a>
                <br>
                <br>
            </div>
        </div>
    </div>

</section>

<?php
$link_video = get_field('link_video');
if (!empty($link_video)) {
?>
    <div class="row" style="background-color: #212121; margin-top: -20px !important;">
        <div class="col m12 s12">
            <center>
                <iframe width="600" height="355" src="<?php echo get_field('link_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </div>
        <br><br>
    </div>
<?php
}
?>
<?php get_footer(); ?>