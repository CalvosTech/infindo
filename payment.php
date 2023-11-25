<?php
include 'conexao.php';

// if(!empty($_POST)) {
//     $nm_titular_cartao = $_POST['nm_']
// }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pagamento - INFINDO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
    <!-- easy-responsive-tabs css -->
    <link rel="stylesheet" href="css/easy-responsive-tabs.css" type="text/css" media="all" />

    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->


    <link href="css/style-contato.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">





</head>

<body>
  	 <!-- ***** Header Area Start ***** -->
       <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="infindo.php" class="logo">
                            <img src="assets/images/logo.png" style="width: 86px;
                            height: 89px;filter: brightness(0.0)">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="infindo.php">Inicio</a></li>
                            <li class="scroll-to-section"><a href="products.php">Produtos</a></li>
                            <li class="scroll-to-section"><a href="infindo.php">Sobre Nós</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contato</a></li>
                            <?php 
                         if(!isset($_SESSION['email'])){ 
                            ?>
                            <li class="scroll-to-section"><a class="cd-signin" href="#0">Cadastro</a></li>
                        <?php 
                         }
                        ?>

                        <?php 
                        if(isset($_SESSION['email'])){ 
                            
                        ?>
                            <li class="scroll-to-section"><a href="usuario_dados.php">Perfil</a></li>
                        <?php 
                            } 
                        ?>
                            <li class="scroll-to-section">
                            <div class="cart-mainf">
                                <div class="hubcart hubcart2 cart cart box_1">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                            <i class="fas fa-shopping-bag" style="
                                            font-size: 1.5em;
                                            color: #7d88c1;
                                            /* padding-bottom: -67px; */
                                            /* margin-bottom: 20px; */
                                        "></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
    
    
    
    
    
    
    
    
    
    
                    </nav>
                </div>
            </div>
        </div>
    </header>



<!-- abre aqui estevan-->

<!-- MODAL CADASTRO -->

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Login</a></li>
            <li><a href="#0">Cadastre-se</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Senha</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Senha">
                    <a href="#0" class="hide-password">Esconder</a>
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="Lembre de mim" checked>
                    <label for="lembre de mim">lembre de mim</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Log-in">
                </p>
            </form>
            
            <p class="cd-form-bottom-message"><a href="#0">Esqueceu sua senha?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Nome de usuario</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Nome de usuario">
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Senha</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Senha">
                    <a href="#0" class="hide-password">Esconder</a>
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-confirm-password">Confirmar senha</label>
                    <input class="full-width has-padding has-border" id="signup-confirm-password" type="password" placeholder="Confirmar senha" required>
                    <a href="#0" class="hide-password">Esconder</a>
                    <span class="cd-error-message">Erro</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-cpf" for="signup-cpf">CPF</label>
                    <input class="full-width has-padding has-border" id="signup-cpf" type="text" placeholder="CPF" required>
                    <span class="cd-error-message">Erro</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-telefone" for="signup-telefone">Telefone</label>
                    <input class="full-width has-padding has-border" id="signup-telefone" type="text" placeholder="Telefone">
                    <span class="cd-error-message">Erro</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-data-nascimento" for="signup-data-nascimento">Data de Nascimento</label>
                    <input class="full-width has-padding has-border" id="signup-data-nascimento" type="date" placeholder="Data de Nascimento">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">Eu concordo com os <a href="#0" style="
                        color: #2f889a;
                    ">Termos</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Criar conta">
                </p>
            </form>

            <a href="#0" class="cd-close-form">Fechar</a>
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Perdeu sua senha? Por favor ensira seu endereço de email. Você recebera um link para criar uma nova senha.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Erro</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Voltar ao Log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Fechar</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<!-- MODAL CADASTRO FIM -->

<!-- abre aqui estevan-->










<!-- java-script do modal (jquery)-->


<script>
    jQuery(document).ready(function($) {
    var $form_modal = $('.cd-user-modal'),
        $form_login = $form_modal.find('#cd-login'),
        $form_signup = $form_modal.find('#cd-signup'),
        $form_forgot_password = $form_modal.find('#cd-reset-password'),
        $form_modal_tab = $('.cd-switcher'),
        $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
        $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
        $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
        $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
        $main_nav = $('.main-nav');

    // Abre Modal
    $main_nav.on('click', function(event) {
    if ($(event.target).is('.cd-signin')) {
        // Abre apenas se o item clicado não for o de cadastro
        event.preventDefault();
        $form_modal.addClass('is-visible');
        login_selected();
    } else if ($(event.target).is($main_nav)) {
        // No mobile abre o submenu
        $(this).children('ul').toggleClass('is-visible');
    } else {
        // No mobile fecha o submenu
        $main_nav.children('ul').removeClass('is-visible');
    }
});

    // fecha modal
    $('.cd-user-modal').on('click', function(event) {
        if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
            $form_modal.removeClass('is-visible');
        }
    });
    // fecha o modal quando clicka esc
    $(document).keyup(function(event) {
        if (event.which == '27') {
            $form_modal.removeClass('is-visible');
        }
    });

    // Muda de uma aba pra outra
    $form_modal_tab.on('click', function(event) {
        event.preventDefault();
        ($(event.target).is($tab_login)) ? login_selected(): signup_selected();
    });

    // Esconde ou mostra sua senha
    $('.hide-password').on('click', function() {
        var $this = $(this),
            $password_field = $this.prev('input');

        ($password_field.attr('type') == 'password') ? $password_field.attr('type', 'text'): $password_field.attr('type', 'password');
        ($this.text() == 'Esconder') ? $this.text('Mostrar'): $this.text('Esconder');
        // focus and move cursor to the end of input field
        $password_field.putCursorAtEnd();
    });

    // mostra o form esqueci minha senha
    $forgot_password_link.on('click', function(event) {
        event.preventDefault();
        forgot_password_selected();
    });

    // volta pro login do form esqueci minha senha
    $back_to_login_link.on('click', function(event) {
        event.preventDefault();
        login_selected();
    });

    function login_selected() {
        $form_login.addClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.addClass('selected');
        $tab_signup.removeClass('selected');
    }

    function signup_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.addClass('is-selected');
        $form_forgot_password.removeClass('is-selected');
        $tab_login.removeClass('selected');
        $tab_signup.addClass('selected');
    }

    function forgot_password_selected() {
        $form_login.removeClass('is-selected');
        $form_signup.removeClass('is-selected');
        $form_forgot_password.addClass('is-selected');
    }

    // Verifica se o email é válido
    $('#signup-email').on('input', function() {
        var email = $(this).val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailRegex.test(email)) {
            $(this).next('.cd-error-message').removeClass('is-visible').text('');
        } else {
            $(this).next('.cd-error-message').addClass('is-visible').text('Por favor, insira um email válido');
        }
    });

    // Verifica se as senhas coincidem
    $form_signup.find('input[type="submit"]').on('click', function(event){
        event.preventDefault();
        var $password_input = $form_signup.find('#signup-password');
        var $confirm_password_input = $form_signup.find('#signup-confirm-password');
        var password = $password_input.val();
        var confirm_password = $confirm_password_input.val();

        if (password !== confirm_password) {
            $confirm_password_input.addClass('has-error').next('span').addClass('is-visible').text('As senhas não coincidem');
        } else {
            $confirm_password_input.removeClass('has-error').next('span').removeClass('is-visible').text('');
            // Aqui você pode adicionar o código para enviar o formulário
        }
    });
});
</script>


<!-- java-script do modal (jquery)-->

<!-- ***** Header Area End ***** -->










    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--Payment--><section class="payment_w3ls py-5" style="
    padding-top: 8rem !important;">

        <div class="container">
            <div class="privacy about">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
                    Detalhes do pagamento</h5>
                <!--/tabs-->
                <div class="responsive_tabs innfpage-tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">

                        <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Credito/Debito</li>   
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Conta Paypal </li>

                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <h5 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Credito/Debito</h5><div class="tab2 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="pay_info">
                                    <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                        <section class="creditly-wrapper payf_wrapper">
                                            <div class="credit-card-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Titular do cartão</label>
                                                        <input class="billing-address-name form-control" type="text" name="nm_titular_cartao" placeholder="John Smith">
                                                    </div>
                                                    <div class="paymntf_card_number_grids">
                                                        <div class="fpay_card_number_grid_left">
                                                            <div class="controls">
                                                                <label class="control-label">Número do cartão</label>
                                                                <input class="number credit-card-number form-control" type="text" name="cd_cartao" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
                                                            </div>
                                                        </div>
                                                        <div class="fpay_card_number_grid_right">
                                                            <div class="controls">
                                                                <label class="control-label">CVV</label>
                                                                <input class="security-code form-control" Â·="" inputmode="numeric" type="text" name="cd_cvv_cartao" placeholder="•••">
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="controls">
                                                        <label class="control-label">Válido até</label>
                                                        <input class="expiration-month-and-year form-control" type="text" name="dt_expiracao_cartao" placeholder="MM / YY">
                                                    </div>
                                                </div>
                                                <input class="btn btn-primary submit" type="submit" value="Fazer Pagamento" style="background:#3a5795;">

                                            </div>
                                        </section>
                                    </form>

                                </div>
                            </div><h5 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Cash on delivery (COD)Net Banking</h5>
                            <!--//tab_one-->
                            
                            <h5 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Net BankingPaypal Account</h5><h5 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h5>
                            <h5 class="resp-accordion" role="tab" aria-controls="tab_item-4"><span class="resp-arrow"></span>Conta paypal</h5><h5 class="resp-accordion" role="tab" aria-controls="tab_item-5"><span class="resp-arrow"></span></h5><div class="tab4 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="pay_info">
                                    <div class="row">
                                        <div class="col-md-6 tab-grid">
                                            <img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                                            <p>Importante: você será redirecionado ao site do PayPal para concluir seu pagamento com segurança.
                                            </p>
                                            <a href="#" class="btn btn-primary">Finalizar compra via Paypal</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                                <section class="creditly-wrapper payf_wrapper">
                                                    <div class="credit-card-wrapper">
                                                        <div class="first-row form-group">
                                                            <div class="controls">
                                                                <label class="control-label">Titular do cartão </label>
                                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                            </div>
                                                            <div class="paymntf_card_number_grids">
                                                                <div class="fpay_card_number_grid_left">
                                                                    <div class="controls">
                                                                        <label class="control-label">Número do cartão</label>
                                                                        <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
                                                                    </div>
                                                                </div>
                                                                <div class="fpay_card_number_grid_right">
                                                                    <div class="controls">
                                                                        <label class="control-label">CVV</label>
                                                                        <input class="security-code form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
                                                                    </div>
                                                                </div>
                                                                <div class="clear"> </div>
                                                            </div>
                                                            <div class="controls">
                                                                <label class="control-label">Válido até</label>
                                                                <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                            </div>
                                                        </div>
                                                        <input class="btn btn-primary submit" type="submit" value="Processar Pagamento" style="
    background-color: #3a5795;
">
                                                    </div>
                                                </section>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
            </div>

        </div>
    </section>
    <!-- //payment -->
 



<!-- Footer Start -->
<section class="Contato" id="Contato">
    <div class="meio-contato">
        <h3>Estamparia <br> Infindo</h3>
        <h5>R. Cecy, 320 - Guilhermina, Praia Grande - SP, CEP 11701-560</h5>
        <div class="icons">
            <a href="#"><i class='bx bxl-facebook-square' ></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
        </div>
    </div>

    <div class="meio-contato">
        <h3>Explore</h3>
        <li><a href="#Home">Inicio</a></li>
        <li><a href="#featured">Produtos</a></li>
        <li><a href="#new">Sobre Nós</a></li>
        <li><a href="#contact">Contato</a></li>
    </div>

    <div class="meio-contato">
        <h3>Tecidos</h3>
        <li><a href="#">Poliester</a></li>
        <li><a href="#">Dry-fit</a></li>
        <li><a href="#">Algodão</a></li>
        <!-- <li><a href="#">Nova coleção</a></li>
        <li><a href="#">Canecas</a></li> -->
    </div>

    <div class="meio-contato">
        <h3>Shopping</h3>
        <li><a href="#">Camisetas</a></li>
        <li><a href="#">Canecas</a></li>
        <!-- <li><a href="#">Sale</a></li> -->
    </div>

    













    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
   
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- easy-responsive-tabs -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //easy-responsive-tabs -->

    <!-- credit-card -->
    <script src="js/creditly.js"></script>
    <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

    <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
    <!-- //credit-card -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <style>
        li.resp-tab-item.resp-tab-active {
            background-color: #0364b8;
}
    </style>
</body>

</html>