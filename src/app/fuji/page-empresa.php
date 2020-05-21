<?php get_header(); ?>

<section style="background-color:#f7ce0538;">
    <div class="row container">
  
        <div class="col m12 s12">
            <br>
            <h4 class="text">Empresa</h4>
            <p style="font-size:20px; line-height: 2;text-align: justify;"> 
            É com muito orgulho e satisfação que transmitimos quem é a Imobiliária Fuji Ltda.
            <br>
Imobiliária Fuji Ltda foi fundada em 1º de agosto de 1995 por Marcelo Yoshio Nonoyama que atua no ramo imobiliário até os dias de hoje, e poucos anos após seu surgimento já conquistara grande prestígio no mercado imobiliário do Sul de Minas Gerais, especialmente na cidade de Extrema-MG, dada sua excelência e prestígio em vendas de imóveis rurais, focado principalmente no lazer do público paulista e sul mineiro.
<br><br>
Imobiliária Fuji Ltda, nome este em homenagem a montanha mais alta da terra do sol nascente, denominada de Monte Fuji, venerado pelos japoneses e turistas por ser uma montanha sagrada, devido aos seus imponentes 3.776 metros de altura. O Fujisan (como é carinhosamente conhecido pelos japoneses) está localizado na província de Shizuoka no Japão.
<br>
            </p>
        </div>
  
    </div>
</section>
<div class="row" style="    margin-top: -18px;">
	
	
		
			<?php
             $args = array(
                'post_type' => 'configsite'
            );
            $query = new WP_Query(array( 'post_type' => 'configsite'));
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $foto_1 = get_field('foto_1');
                    $foto_2 = get_field('foto_2');
                    $foto_3 = get_field('foto_3');
                    $foto_4 = get_field('foto_4');
                    $foto_5 = get_field('foto_5');
?>	
	
	
    <div class="col m6 s12  " style="padding: 2px;  margin: -1px;">
        <img style="width: 100%;" class="animated fadeIn" src="<?php echo $foto_1['url'];?>">
    </div>
    <div class="col m3 s12  " style="padding: 2px;  margin: -1px;">
        <img style="width: 100%;" class="animated fadeIn" src="<?php echo $foto_2['url'];?>">
    </div>
    <div class="col m3 s12  " style="padding: 2px;  margin: -1px;">
        <img style="width: 100%;" class="animated fadeIn" src="<?php echo $foto_3['url'];?>">
    </div>
    <div class="col m3 s12  " style="padding: 2px;    margin: -1px;    margin-top: -6px;">
        <img style="width: 100%;" class="animated fadeIn" src="<?php echo $foto_4['url'];?>">
    </div>
    <div class="col m3 s12  " style="    padding: 2px;    margin: -1px;    margin-top: -6px;">
        <img style="width: 100%;" class="animated fadeIn" src="<?php echo $foto_5['url'];?>">
    </div>
	
	             <?php
                }
            }
            ?>
	
	
</div>

      

<section style="background-color:#e0dfc5;    margin-top: -26px;">
    <div class="row container"  style="margin: 0px auto; ">
        <div class="col m12 s12">
            <br>
            <h4 class="text">Missão e Visão</h4>
            <p style="font-size:20px; line-height: 2;text-align: justify;">
            
A filosofia e o objetivo da empresa são fomentar as necessidades do mercado imobiliário cada dia mais exigente, e proporcionar aos clientes um atendimento personalizado com ética, profissionalismo e transparência. Motivados sempre pela busca da sustentabilidade e da plena satisfação de seus clientes na concretização de seus ideais e propósitos, viabilizando sempre excelentes negócios imobiliários.
<br><br>
Com 20 anos no mercado imobiliário adquirindo experiências em vendas de imóveis de terceiros e de imóveis próprios, a empresa nos últimos 8 anos está direcionada também no segmento de consultoria em incorporação imobiliária, parcerias em loteamentos e chacreamentos e empreendimentos próprios, sendo responsável por vários empreendimentos de sucesso na cidade de Extrema.
<br><br>
Mesmo com sucesso no segmento imobiliário, a empresa faz questão absoluta de que o serviço oferecido a cada cliente atendido pela Imobiliária Fuji seja único. Procurando, assim, sempre oferecer o melhor atendimento em busca de seus ideais imobiliários.
<br><br>
A empresa está localizada em Extrema, no sul de Minas Gerais, na divisa com o estado de São Paulo, tendo como principais acessos a Rodovia Fernão Dias (BR 381) e a Rodovia Dom Pedro I. O município de Extrema tem a área de 241,90 km² e faz fronteira com os municípios mineiros de Itapeva, Toledo e Camanducaia e divisas com as cidades paulistas de Vargem e Joanópolis. Extrema está distante 465 km da capital do estado Belo Horizonte e a 100 km da cidade de São Paulo e a 1195 km de Brasília.
<br><br>
A sede da Imobiliária Fuji fica às margens da Avenida Nicolau Cezarino, junto à primeira entrada da Estância de Extrema-MG e ao lado do terminal rodoviário municipal, Tey Kameya. Na Rua José de Oliveira Pinto, 10, Centro, Extrema-MG - Creci J 2.788 4ª Região-MG - Creci 12.268 4ª Região-MG - CCM 007444.
<br><br>
             </p>
        </div>        
    </div>
</section>
<!-- <section >
    <div class="parallax-container" style="height: 350px !important;">
        <div class="parallax">
            <img class="animated fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/empresa/2.jpg">
        </div>
    </div>
</section> -->



<!--<section >
    <div class="parallax-container" style="height: 350px !important;">
        <div class="parallax">
            <img class="animated fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/20.jpg">
        </div>
    </div>
</section>-->


<?php get_footer(); ?>