<?php  wp_footer();?>


  <section class="" style="background-color:#dadadad4;margin-top: -23px;">
        <div class="container" style="    padding-bottom: 20px;">
            <div class="row">
                <h3 class="center-align" style="color:#02233c; padding-top: 25px;">
                    Faça uma
                    <b>SIMULAÇÃO</b>
                    <b>AGORA</b>
                </h3>
            </div>
            <div class="row">
                <div class="col md2 s12 bankline">
                    <div class="bankline-border">
                        <a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/CAIXA_3D.jpeg" alt="">
                        </a>
                        <p>
                            <a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso" target="_blank"
                                                         class="waves-effect waves-light btn btn-simular" style="width: 100%; background-color:#185e9c;">
                                <i class="material-icons right">chevron_right</i>Simular</a>
                        </p>
                    </div>
                </div>

                <div class="col md2 s12 bankline">
                    <div class="bankline-border">
                        <a href="https://www.webcasas.com.br/webcasas/?headerandfooter/#/dados-pessoais" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bancoSantander.jpg" alt="">
                        </a>
                        <p>
                            <a href="https://www.webcasas.com.br/webcasas/?headerandfooter/#/dados-pessoais" target="_blank"
                            class="waves-effect waves-light btn btn-simular" style="width: 100%; background-color:#fe0000;">
                                <i class="material-icons right">chevron_right</i>Simular</a>
                        </p>

                    </div>
                </div>
                <div class="col md2 s12 bankline">
                    <div class="bankline-border">
                            <a href="https://ww3.itau.com.br/imobline/pre/simuladores_new/fichaProposta/index.aspx?IMOB_TipoBKL=&ident_bkl=pre" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/itau2.jpg" alt="">
                            </a>
                        <p>
                            <a href="https://ww3.itau.com.br/imobline/pre/simuladores_new/fichaProposta/index.aspx?IMOB_TipoBKL=&ident_bkl=pre" target="_blank"
                            class=" waves-effect waves-light btn btn-simular" style="width: 100%; background-color:#ff8800;">
                                <i class="material-icons right">chevron_right</i>Simular</a>
                        </p>
                    </div>
                </div>
                <div class="col md2 s12 bankline">
                    <div class="bankline-border">
                        <a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/encontre-seu-credito/simuladores-imoveis.shtm#box1-comprar" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bradesco2.png" alt="">
                        </a>
                        <p>
                            <a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/encontre-seu-credito/simuladores-imoveis.shtm#box1-comprar" target="_blank"
                            class=" waves-effect waves-light btn btn-simular" style="width: 100%; background-color:#cc0a2f;">
                                <i class="material-icons right">chevron_right</i>Simular</a>
                        </p>
                    </div>
                </div>
                <div class="col md2 s12 bankline">
                    <div class="bankline-border">
                        <a href="https://www42.bb.com.br/portalbb/cim/creditoimobiliario/simular,802,2250,2250.bbx?_ga=1.211255637.1364395706.1465921567" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bb2.jpg" alt="">
                        </a>
                        <p>
                        <a href="https://www42.bb.com.br/portalbb/cim/creditoimobiliario/simular,802,2250,2250.bbx?_ga=1.211255637.1364395706.1465921567" target="_blank"
                            class=" waves-effect waves-light btn btn-simular" style="width: 100%; background-color:#2a458c;">
                                <i class="material-icons right">chevron_right</i>Simular</a>
                        </p>
                    </div>
                </div>
                <!-- <p class="center-align">
                    <a href="#" style="color: white;background:#00a0fd; padding: 20px; font-size: 30px; border-radius: 30px; ">Anuncie Agora</a>
                </p> -->
                <br><br>
            </div>
        </div>
        </div>

    </section>

    <section style="margin-bottom:0px;background-image: url('<?php echo get_template_directory_uri();?>/img/preceito.jpg')">
        <div class="row container" style="margin-bottom:-20px;">
            <br>
            <h5 class="center" >
            <?php
            $preceito = "";
            $today = getdate();
            
            $args = array(
                'post_type' => 'preceitos'
            );
            $query = new WP_Query(array( 'post_type' => 'preceitos'));
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $preceito = get_field('dia_' . $today['mday']);
                }
            }
            ?>
                <b>Preceito do dia <?php print_r($today['mday']);?>: <?php echo $preceito; ?></b>
            </h5>
            <br>
        </div>
    </section>
<footer class="page-footer" style="background-color:#dc0606;">
        <div class="container">
            <div class="row">
                <div class="col l4 m4 s12">
                    <h5 class="white-text" style="font-size: 20px;">Imobiliária Fuji</h5>
                    <p class="grey-text text-lighten-4">
                        Lembramos a todos os clientes que a disponibilidade dos imóveis, assim como todos os dados referentes à documentação, descrição,
                        preços e características estão sujeitos à confirmação. Agradecemos a compreensão.
                    </p>
                </div>
                <div class="col l2 offset-l2 s12">
                    <h5 class="white-text" style="font-size: 20px;">Referências</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="/casas">Casas</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/chacaras">Chácaras</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/lotes">Lotes</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/sitios">Sítios</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/terrenos">Terrenos</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/loteamentos">Loteamentos</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/locação">Locação</a>
                        </li>
                    </ul>
                </div>
                <div class="col l2 offset-l2 s12">
                    <h6 class="white-text" style="font-size: 20px;">
                    <a href="/fale-conosco" style="color: white">Fale Conosco</a> 
                    </h6>
                    <p style="color: white;"><i class="material-icons" style="color: white;">local_phone</i> (35) 3435-1620</p>
                    <p style="color: white;"><i class="material-icons" style="color: white;">local_phone</i> (35) 9 9216-9425</p>
                    <p class="white-text"><i class="material-icons" style="color: white;">location_on</i>Rua José de Oliveira Pinto, nº 10, Centro, Extrema - MG,<br> CEP: 37640-000</p>
                </div>
                    
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">

                <h6 class="center-align">
                    © 2018 Imobiliária Fuji
                </h6>


            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/materialize.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
    <!-- <script src="js/maps.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jsphotocradle-master/lib/jquery-1.6.1.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jsphotocradle-master/lib/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jsphotocradle-master/jquery.photocradle.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/mask/jquery.mask.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/handlebars-v4.0.11.js"></script>
    
    <!-- <script src="//code.jquery.com/ui/1.12.0/jquery-ui.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.0/underscore-min.js"></script>


<script id="entry-template" type="text/x-handlebars-template">
{{#each this}}
    <div class='col l3 s12 animated bounceIn'>
        <div class='card hoverable'>
        {{#if mark}}
            <span class="mark-wather"><img style="    position: absolute;    z-index: 9999;" class="activator" src={{srcImageMark}}></span>
        {{/if}}
        <div class='card-image waves-effect waves-block waves-light'>
        <a href='/referencias/{{referencia}}' >
            <img class='activator' src="{{srcImage}}">
            <span style='display: none;' class='srcImage'> {{srcImage}}</span>
        </a>
        </div>
        <div class='card-content'>
            <div class='card-title activator grey-text text-darken-4 center name' style="font-size: 100%;">
            {{name}}
            </div>
            <div class='center' style='font-size:20px; color: #e53935;'>REF - {{referencia}}</div>
            <div class='center' style='font-size:25px; color: black;'>{{precoOriginal}}</div>
            <span style='display: none;' class='preco'> {{precoOriginal}}</span>
            <span style='display: none;' class='referencia'> {{referencia}}</span>
            <span>
                <a href='/referencias/{{referencia}}' class='waves-effect waves-block waves-light center-align' style='background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;'>
                <i class='material-icons' style='margin-left: -30px;position: absolute;'> add_circle_outline</i> Detalhes</a>
            </span>
        </div>
            </div>
        </div>
{{/each}}
</script>

    <script>
        $(document).ready(function () {
            // debugger;
            var widthpage = window.screen.width;
            if(widthpage <= 900){
                $('#parallax-container').hide();
                $('#phone-header').show();
                $('#phone-header-2').show();
                $('#phone-header-2').css("display", "inline-block");
            }
            else if(window.location.pathname !== '/'){
                $('#parallax-container').hide();
                $('#phone-header').show();
                $('#phone-header-2').show();
                $('#phone-header-2').css("display", "inline-block");
            }
            // else if(window.location.pathname !== '/'){
            //     $('#parallax-container').hide();
            // }
            else{
                $('#parallax-container').show();
                $('#phone-header').hide();
                $('#phone-header-2').hide();
                $('#phone-header-2').css("display", "none");
            }
                
            
            $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay: false,
                    navText: ['<i class="material-icons small">keyboard_arrow_left</i>','<i class="material-icons small">keyboard_arrow_right</i>'],
                    autoplayHoverPause: true,
                    lazyLoad: true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                        items:1,
                            nav:true
                        },
                        600:{
                            items:1,
                            nav:true,
                            autoplay: false,
                        }
                        
                    }
                })

            $('.img-mobile-slider').fadeIn(500);

            $('.carousel').carousel();
            
            $('.carousel.carousel-slider').carousel({ fullWidth: true });
            $('.slider').slider();
            // Pause slider
            $('.slider').mouseover(function(){
                $('.slider').slider('pause');
            }).mouseout(function(){
                $('.slider').slider('start');    
            })
            
            $('.slider').slider('pause');
            // Start slider
            $('.slider').slider('start');
            // Next slide
            $('.slider').slider('next');
            // Previous slide
            $('.slider').slider('prev');

            $('select').material_select();

            $('.parallax').parallax();

            $('#msg-body').val('');

            $(".button-collapse").sideNav(
                {
                    menuWidth: 300, // Default is 300
                    //edge: 'right', // Choose the horizontal origin
                    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    draggable: true, // Choose whether you can drag to open on touch screens,
                    onOpen: function(el) {      },
                    onClose: function(el) {
                        // debugger;
                        // $('.button-collapse').sideNav('hide');
                        // $('.button-collapse').sideNav('destroy');
                    }
                });
            $('.drag-target').on('click', function(e) {
                // debugger;
                e.preventDefault();
                $('.button-collapse').sideNav('hide');
                $('.button-collapse').sideNav('destroy');
                $('.button-collapse').sideNav('hide');
                $('.button-collapse').sideNav();
            });
        
            var iamges_sources = []; 
            var lenghtImages = $('.img-ref').lenght;
            for (let index = 1; index <= 30; index++) {
                if($("#img-ref-"+ index).html() != '' &&
                 $("#img-ref-"+ index).html() !== undefined){
                     $.get(
                         $("#img-ref-"+ index).html(),
                          function(){
                            // var obj = {
                            //     thumbnail : $("#img-ref-"+ index).html(),
                            //     preview :  $("#img-ref-"+ index).html(),
                            //     original:  $("#img-ref-"+ index).html(),
                            //     title:   $("#img-ref-"+ index).html()
                            // }
                            iamges_sources.push($("#img-ref-"+ index).html());

                            // if(index == $('.img-ref').length){
                            if(iamges_sources.length == $('.img-ref').length){
                               
                               var imagesTemp = [];
                                _.sortBy(iamges_sources).forEach(element => {
                                    
                                    var obj = {
                                        thumbnail : element,
                                        preview :  element,
                                        original:  element,
                                        title:  element
                                    }
                                    imagesTemp.push(obj);
                                });
                                

                                var options = {
                                    firstImageIndex: 0,
                                    borderWeight: 4
                                },
                                params = {
                                    sources: imagesTemp
                                };
                                $('#picasa').photocradle( params, options);
                            }
                         }
                     );
                 }
            }
         
            
            $('#telefone').mask("(00) 0000-00009");
            
            $('#form-contact').submit(function(){
                var queries = {};
                $.each(document.location.search.substr(1).split('&'),function(c,q){
                    var i = q.split('=');
                    queries[i[0].toString()] = i[1].toString();
                });

                $('#referencia_link').val(queries.ref);
                var dados = $(this).serialize();
                debugger;
                $.ajax({
                    url: 'http://imobiliariafuji.com.br/server-email',
                    type:'GET',
                    data: dados,
                    success: function(){
                        $('#form-contact')[0].reset();
                        $('#msg-success').show();
                        $('#msg-error').hide();
                        return;
                        //alert(data);
                    }, error: function(){
                        $('#msg-success').hide();
                        $('#msg-error').show();
                        
                    }
                });

                return false;
            })

            $('#order').change(function(event){
                event.preventDefault();

                var str = "";
                $( "#order option:selected" ).each(function() {
                    str += $( this ).text();
                });

                var lstCards = [];
                $( ".card" ).each(function( index ) {
                    var obj = {};
                    var mark = $(this).find('.mark-wather').html();
                    if( mark == undefined || mark == "")
                        mark = false;
                    else 
                        mark = true;

                    obj.mark = mark; 
                    obj.srcImageMark = $(this).find('.mark-wather img').attr('src');
                    obj.name = $(this).find('.name').html();
                    obj.preco = parseInt($(this).find('.preco').html().replace(/[^\d]+/g,''));
                    obj.precoOriginal = $(this).find('.preco').html();
                    obj.referencia = $(this).find('.referencia').html();
                    obj.srcImage = $(this).find('.srcImage').html();
                    lstCards.push(obj);
                });

                console.log(lstCards);

                var _sorted;
                switch (str) {
                    case 'Menor Preço':
                    _sorted = _.sortBy(lstCards, 'preco');        
                        break;
                    case 'Maior Preço':
                    _sorted = _.sortBy(lstCards, 'preco').reverse();        
                        break;
                    case 'Referência':
                    _sorted = _.sortBy(lstCards, 'referencia').reverse();        
                        break;
                    default:
                        break;
                }
                // var sorted = _.sortBy(lstCards, 'referencia');
                
                $('.lst-card').empty();
                
                var source   = document.getElementById("entry-template").innerHTML;
                var template = Handlebars.compile(source);

                // var context = {title: "My New Post", body: "This is my first post!"};
                var html    = template(_sorted)
                $('.lst-card').append(html);
                   
            })
        })
    </script>
</body>
</html>