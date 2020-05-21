<?php get_header(); ?>

<section class="content-fale-conosco">
   
        <div class="animated  fadeInLeft title-fale-conosco">
            <h4 class="black white-text center">Fale Conosco</h4>
        </div>

        <div class="animated  fadeInLeft title-contact ">
            <h5 class="black white-text center">            
            <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">local_phone</i>
                (35) 9 9216-9425 <br>
                <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">local_phone</i>
                 (35) 3435-1620
            </h5>
        </div>

        <div class="animated  fadeInLeft title-contact-email">
            <h5 class="black white-text center">
    <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">email</i>
    contato@imobiliariafuji.com.br</h5>
        </div>



    <div class="row" style=" 
    background-image: url(<?php echo get_template_directory_uri(); ?>/img/faleconosco-casa.jpg);
    background-position: center -300px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    opacity: 0.8;
    margin-bottom: 0px;
    ">
        
        <img src="" style="background-size: cover;">
        <div style="position: relative; background-image: linear-gradient(45deg,rgba(1,153,223,0.9) 10%,rgba(0,175,200,0.9) 100%);" >
            <div class="col m6 s12">
            
            </div>
            <div class="col m6 s12 fadeInRight animated">
                <div class="col l12 m12 s12">
                    <div class="card hoverable-faleconosco">
                        <div class="card-image waves-effect waves-block waves-light">
        
                        </div>
    
                        <div class="card-content">
                            <div class="card-title activator grey-text text-darken-4">
                                <div class="row">
                                    <form action="" id="form-contact" method="get" class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12 m12">
                                                <input placeholder="Digite Aqui seu nome" id="nome" name="nome" type="text" class="validate" required="required">
                                                <label for="first_name">Nome</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input placeholder="Digite Aqui seu e-mail" id="email" name="email" type="text" class="validate" required="required">
                                                <label for="first_name">E-mail</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input placeholder="Digite Aqui seu telefone" id="telefone"  name="telefone"  type="text" class="validate" >
                                                <label for="first_name">Telefone</label>
                                            </div>
                                            <div class="input-field col s6 m6">
                                                <input placeholder="Digite Aqui sua Cidade" id="cidade" name="cidade" type="text" class="validate">
                                                <label for="first_name">Cidade</label>
                                            </div>
                                            <div class="input-field col s6 m6">
                                                <input placeholder="Digite Aqui seu Estado" id="estado" name="estado" type="text" class="validate">
                                                <label for="first_name">Estado</label>
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <input placeholder="Digite Aqui o REF do imóvel" id="referencia" name="referencia" type="text" class="validate">
                                                <label for="first_name">Imóvel de interesse</label>
                                                
                                            </div>
                                            <div class="input-field col s12 m12">
                                                <textarea placeholder="Digite Aqui o que você deseja" id="msg-body" name="msg-body" class="materialize-textarea" required="required">
                                                </textarea>
                                                <label for="text-area-form">Mensagem</label>
                                            </div>

                                            <input id="referencia_link" name="referencia_link" type="text" hidden >
                                        </div>
                                        <div class="col m12 s12">
                                        
                                            <p id="msg-success" class="center" style="display: none; padding: 10px; background-color: rgba(38, 166, 74, 0.41); color: black;">
                                            Enviado com Sucesso!</p>
                                            <p id="msg-error" class="center" style="display: none;padding: 10px; background-color: rgba(166, 38, 38, 0.41); color: black;">
                                            Ocorreu um Erro! Por favor, tente novamente!</p>
                                        </div>
                                        <div class="col m12 s12">
                                            <button type="submit" class="waves-effect waves-block waves-light center-align" style="background-color: #e53935;     border-radius: 50px;font-size: 18px; color: white; padding: 10px;border: 2px solid white;     margin-top: 20px;width:100%;">                                     
                                                <i class="material-icons" style="margin-top: 0px;margin-left: -30px; position: absolute;">send</i> 
                                                Enviar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row" style="background-color:#02233c;     margin-bottom: 35px;">
        <div class="container">
            <div class="col m12 s12">
            <br><br>
                <div class="center">
                    <h5 class="white-text">Imobiliária Fuji Ltda</h5>
                    <h6 class="white-text">CRECI: J 2.788 4ª Região-MG</h6>
                    <h6 class="white-text">CCM: 007444</h6>
                    <h6 class="white-text">Rua José de Oliveira Pinto, nº 10, Centro, Extrema - MG, CEP: 37640-000</h6>
                    <h6 class="white-text">Tel.: (35) 3435-1620</h6>
                    <h6 class="white-text">E-mail: contato@imobiliariafuji.com.br</h6>
                </div>
                <br><br>
            </div>
        </div>
    
    </div>
</section>

<?php get_footer(); ?>