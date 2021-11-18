
   <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contato</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entre em contato</div>
                    <p>Estamos á espera do seu contato para colocarmos em prática as suas ideias. Tire suas dúvidas e faça seu orçamento!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nome</div>
                                <div class="sub-title">Rafael Silva</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-whatsapp"></i>
                            <div class="info">
                                <div class="head">Whatsapp</div>
                                <div class="sub-title">(96) 1 2345-6789</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">rafaelsilva@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Localização</div>
                                <div class="sub-title">Rua Antonio Bleme Filho, 175 - Jardim Brasilia, Betim - MG</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    
                <?php
                    if(isset($_GET['action']))
                        $action = $_GET['action'];
                    else
                        $action = "form";

                    if($action == "form"):
                ?>
                <div class="text">Envie uma mensagem</div>
                <p>Preencha o formulário abaixo que um de nossos especialistas entrará em contato o mais rápido possível!</p>
                    <form action="?page=contato&action=enviar" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nome" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Telefone" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Digite sua mensagem..." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                <?php endif ?>

                <?php 
                    if ($action == "enviar"):
                ?>
                    <div class="message">
                        <strong>Sua mensagem foi enviada com sucesso!</strong>
                        <p>Breve entraremos em contato.</p>
                    </div>
                <?php
                    endif
                ?>
                </div>
            </div>
        </div>
    </section>
