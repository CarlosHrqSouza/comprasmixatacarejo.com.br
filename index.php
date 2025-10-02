<?php include 'header.php'; ?>
<div class="container-banner" id="banner">
    <section class="container py-8">
        <div class="row gy-4 gy-lg-0 align-items-center">
            <div class="col-lg-5">
                <img src="assets/images/selo.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 text-center text-white">
                <h1 class="text-uppercase fw-bolder">E o presente é para <span class="text-tertiary display-3 d-block fw-bolder">você</span></h1>
                <h2 class="text-uppercase fw-bold">Concorra a:</h2>
                <div class="row justify-content-center justify-content-center mt-5">
                    <div class="col-md-6">
                        <img src="assets/images/carros.png" alt="" class="img-fluid mt-1">
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/14-salarios.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="bg-primary" id="como-participar">
    <div class="bg-black bg-opacity-25">
        <section class="container py-8">
            <div class="text-center mb-5">
                <h2 class="display-5 text-white fw-bolder text-uppercase lh-1">Como <span class="d-block">Participar</span></h2>
            </div>

            <div class="row gy-4 gy-lg-0 gx-lg-6 justify-content-center align-items-stretch">
                <div class="col-lg-4">
                    <div class="box-participate text-white">
                        <h2 class="display-4 text-white text-uppercase fw-bolder fst-italic">01</h2>
                        <h3 class="text-uppercase fw-bolder">Faça suas compras</h3>
                        <p>A cada 100$ em compras, você ganha uma chance.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-participate text-white">
                        <h2 class="display-4 text-white text-uppercase fw-bolder fst-italic">02</h2>
                        <h3 class="text-uppercase fw-bolder">Cadastre-se</h3>
                        <p>Faça o seu cadastro pelo nosso site</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-participate text-white">
                        <h2 class="display-4 text-white text-uppercase fw-bolder fst-italic">03</h2>
                        <h3 class="text-uppercase fw-bolder">Concorra</h3>
                        <p>Aguarde o sorteio e torça para ser um dos grandes ganhadores!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container-premios" id="premios">
    <section class="container py-8">
        <div class="text-center mb-5">
            <h2 class="display-5 text-white fw-bolder text-uppercase lh-1">Prêmios</h2>
        </div>
        <div class="row justify-content-center justify-content-center mt-5">
            <div class="col-md-6">
                <img src="assets/images/carros.png" alt="" class="img-fluid mt-1">
            </div>
            <div class="col-md-6">
                <img src="assets/images/14-salarios.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>
</div>

<div class="bg-primary" id="marcas">
    <div class="bg-black bg-opacity-25">
        <section class="container py-8">
            <div class="text-center mb-5">
                <h2 class="display-5 text-white fw-bolder text-uppercase lh-1">Marcas <span class="d-block">Participantes</span></h2>
            </div>

            <?php
            $pasta = 'assets/images/marcas/';
            $formatos = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg');
            $imagens = [];

            // Buscar as imagens na pasta
            foreach ($formatos as $formato) {
                foreach (glob($pasta . '*.' . $formato) as $imagem) {
                    $imagens[] = $imagem;
                }
            }
            ?>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($imagens as $img) : ?>
                        <div class="swiper-slide">
                            <div class="box-marcas">
                                <img src="<?= $img ?>" width="250" height="150" alt="" class="img-fluid">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Controles opcionais -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    </div>
</div>

<div class="container-premios">
    <section class="container py-8">
        <div class="col-lg-6 mx-auto bg-white rounded-5 py-5 px-3 px-md-5">
            <div class="text-center mb-4">
                <h2 class="h1 fw-bold text-uppercase text-secondary">Participe Agora!</h2>
                <p class="text-muted">
                    Preencha os dados abaixo e concorra a todos esses prêmios incríveis
                </p>
            </div>
            <form action="#" method="post" class="row gy-5">

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Nome Completo</label>
                    <input type="text" class="form-control p-3" placeholder="Digite seu nome completo" name="nome_completo" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Número da Nota Fiscal</label>
                    <input type="text" class="form-control p-3" placeholder="Ex: 123456789" name="nota_fiscal" required oninput="somenteNumeros(this)">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">CPF</label>
                    <input type="text" class="form-control p-3" placeholder="111.222.333-47" name="cpf" required oninput="mascaraCPF(this)">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Telefone</label>
                    <input type="text" class="form-control p-3" placeholder="(11) 99999-9999" name="telefone" required oninput="mascaraTelefone(this)">
                </div>

                <div class="col-12 text-center mt-5">
                    <button type="submit" class="btn w-100 py-3 fw-bold text-white"
                        style="background-color: #f7a30a; border-radius: 10px;">
                        🎉 PARTICIPAR DO MEGA SORTEIO 🎉
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>