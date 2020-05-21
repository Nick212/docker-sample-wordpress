<?php get_header();?>
<!-- <div class="center">
    <h4>Página em Construção</h4>

    <h6>Em breve teremos mais novidades, Fique atento!</h6>
    <br>
    <br>
    <br>
</div> -->

<!-- <section >
    <div class="parallax-container" style="height: 450px !important;">
        <div class="parallax">
            <img class="animated fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/monte-fuji/6.jpg">
        </div>
    </div>
</section> -->

<section class="content-fale-conosco">

        <div class="animated  fadeInLeft title-fale-conosco">
            <h4 class="black white-text center">Perguntas Frequentes</h4>
        </div>

</section>
<section style="background-color:white; margin-top: 150px;">


    <div class="row container"  style="margin: 0px auto; ">
        <div class="col m12 s12">
        <?php
$query = new WP_Query(array('post_type' => 'perguntas_frequentes'));
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $pergunta = get_field('pergunta');
        $resposta = get_field('resposta');
        ?>

            <h4 style="color: #e53935;" ><?php echo $pergunta; ?></h4>
            <p style="font-size: 25px !important;
    line-height: 2;
    text-align: justify;
    color: #00000085;">
                <?php echo $resposta; ?>
            </p>

    <br>
<?php
}
}
?>

        </div>
    </div>
</section>



<?php get_footer();?>