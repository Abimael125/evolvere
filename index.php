<!DOCTYPE html>

<head>
    <meta charset="utf-8"> <!-- tag meta é usada dentro do head para fornecer metadados (informações do site que não pe visivel) -->
    <meta name="viewport" content="width=device-width, initial-scale = 1.0"> <!-- meta: viewport janela de exibição, content ajuste da telas no aparelhos, e a escala
        é para nivel de zoom 1.0 = 100% -->
    <title>Evolvere Soluções Estratégicas</title>
    <link rel="stylesheet" href="style.css"> <!-- stylesheet: relaciona a folha de estilo de css e o hrf é o caminho para estilizar a pag-->
    <script src="https://kit.fontawesome.com/3efbfb5430.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- tudo que será exibido no navegador -->
    <header class="header">
        <!-- essa tag define o cabeçalho, logotipo, menu de navegação, botões titulos os chamadas-->
        <div class="container">
            <!-- Esse div serve como um contêiner centralizador, muito comum para alinhar o conteúdo ao centro da página e controlar
                         o espaçamento lateral. A classe container normalmente aplica largura máxima e margens automáticas via CSS -->
            <h1 class="logo">
                <img src="logo_elvovere.png" alt="Logo Evolvere">
                Evolvere
            </h1>
            <nav>
                <!-- A tag <nav> define uma área de navegação. É onde ficam os menus que ajudam o usuário a se mover pela página -->
                <ul class="menu">
                    <!-- lista não ordenada -->
                    <li><a href="#inicio">Inicio</a></li> <!-- o li é o item de lista e o href é o link que leva a seção com id própia da página -->
                    <li><a href="#quem-somos">Quem Somos</a></li> <!-- Esses links criam a navegação por âncora, ou seja, quando você clica em um deles, a página rola automaticamente até aquela parte. -->
                    <li><a href="#parceiro">Parceiros</a></li>
                    <li><a href="#cliente">Clientes</a></li>
                    <li><a href="#solucoes">Soluções</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                    <li><a href="#contato">Contato</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero / Início -->
    <!-- A tag <section> representa uma seção da página -->
    <section id="inicio" class="hero">
        <div class="container hero__wrap">
            <div class="hero-texto">
                <h2>Clareza para seu negócio crescer com controle e estratégia.</h2>
                <p>Análises financeiras inteligentes, desenvolvimento de aplicações Web para pequenas empresas, automação em Excel e dashboards no Power BI.</p>
                <a href="#solucoes" class="btn">Conheça as Soluções</a>
            </div>
            <div class="hero-img">
                <img src="dashboard_exemplo.png" alt="dashboard de exemplo">

            </div>
        </div>
    </section>

    <!-- quem somos -->
    <section id="quem-somos" class="sobre">
        <div class="container">
            <!-- ALTERADO: usa divs (sem spans) e grid -->
            <div class="sobre-img">
                <img src="img_casal.jpg" alt="Foto fundadores">
            </div>
            <div class="sobre-texto">
                <h3>Quem Somos</h3>
                <p>Somos a Evolvere, uma empresa fundada por um casal com formação em Administração, Contabilidade e TI. Unimos visão estratégica e tecnologia para apoiar o crescimento de MEIs e pequenas empresas.</p>
            </div>
        </div>
    </section>

    <!-- Parceiros -->
    <section id="parceiro" class="nosso-parceiro">
        <div class="container-parceiros">
            <h3 class="titulo_solucao">Nossos Parceiros</h3>

            <div class="slider-wrapper">

                <button id="prevBtn" class="nav-btn prev-btn">&#10094;</button>

                <div class="cards-slider" id="slider">

                    <div class="card-parceiro">
                        <div class="logo-area">
                            <img src="caminho/da/sua/logo1.png" alt="Inova">
                        </div>
                        <h4>Cards Inova</h4>
                    </div>

                    <div class="card-parceiro">
                        <div class="logo-area">
                            <img src="caminho/da/sua/logo2.png" alt="Advogada">
                        </div>
                        <h4>Advogada Fulana</h4>
                    </div>

                    <div class="card-parceiro">
                        <div class="logo-area">
                            <img src="caminho/da/sua/logo3.png" alt="Parceiro">
                        </div>
                        <h4>Outro Parceiro</h4>
                    </div>

                    <div class="card-parceiro">
                        <div class="logo-area">
                            <img src="caminho/da/sua/logo3.png" alt="Parceiro">
                        </div>
                        <h4>Outro Parceiro</h4>
                    </div>

                    <div class="card-parceiro">
                        <div class="logo-area">
                            <img src="caminho/da/sua/logo3.png" alt="Parceiro">
                        </div>
                        <h4>Outro Parceiro</h4>
                    </div>

                </div> <button id="nextBtn" class="nav-btn next-btn">&#10095;</button>
            </div>
        </div>

    </section>

    <!-- clientes -->
    <section id="cliente" class="nosso-cliente">
        <div class="container-parceiros">
            <h3 class="titulo_solucao">Conheça nossos Clientes</h3>

            <div class="slider-wrapper">

                <button id="prevBtnClientes" class="nav-btn prev-btn">&#10094;</button>

                <div class="cards-slider" id="slider-clientes">

                    <div class="card-cliente">
                        <div class="logo-area">
                            <img src="logo-burguer.png" alt="00 Burguer">
                        </div>
                        <h4>00 Burguer</h4>
                    </div>

                    <div class="card-cliente">
                        <div class="logo-area">
                            <img src="logo-fm.png" alt="FM Solutions">
                        </div>
                        <h4>FM Solutions</h4>
                    </div>

                    <div class="card-cliente">
                        <div class="logo-area">
                            <img src="logo-tg.png" alt="TG Rh">
                        </div>
                        <h4>TG Rh</h4>
                    </div>

                    <div class="card-cliente">
                        <div class="logo-area">
                            <img src="logo-teste.png" alt="Teste 2">
                        </div>
                        <h4>Teste 2</h4>
                    </div>
                </div>
                <button id="nextBtnClientes" class="nav-btn next-btn">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- Soluções -->
    <section id="solucoes" class="servicos">
        <div class="container">
            <div>
                <h3 class="titulo_solucao">Soluções Evolvere</h3>
                <div class="cards">
                    <div class="card" onclick="toggleCard(this)">
                        <div class="card-header">
                            <i class="fa-solid fa-robot"></i>
                            <h4>Automação Excel</h4>
                        </div>
                        <div class="descricao">
                            <p>Transforme planilhas manuais em ferramentas automáticas. Ganhe tempo e elimine erros operacionais com macros e scripts personalizados.</p>
                        </div>
                        <i class="fa-solid fa-chevron-down setinha"></i>
                    </div>

                    <div class="card" onclick="toggleCard(this)">
                        <div class="card-header">
                            <i class="fa-solid fa-chart-line"></i>
                            <h4>Dashboard Power BI</h4>
                        </div>
                        <div class="descricao">
                            <p>Visualize seus indicadores em tempo real. Gráficos interativos que facilitam a tomada de decisão baseada em dados concretos.</p>
                        </div>
                        <i class="fa-solid fa-chevron-down setinha"></i>
                    </div>

                    <div class="card" onclick="toggleCard(this)">
                        <div class="card-header">
                            <i class="fa-solid fa-magnifying-glass-dollar"></i>
                            <h4>Análises Financeiras</h4>
                        </div>
                        <div class="descricao">
                            <p>Diagnóstico completo da saúde financeira do seu negócio. Identifique gargalos e oportunidades de lucro com nossa consultoria.</p>
                        </div>
                        <i class="fa-solid fa-chevron-down setinha"></i>
                    </div>

                    <div class="card" onclick="toggleCard(this)">
                        <div class="card-header">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <h4>Treinamentos e Apoio Fiscal</h4>
                        </div>
                        <div class="descricao">
                            <p>Capacite sua equipe e mantenha sua empresa em dia com as obrigações fiscais. Suporte especializado para MEIs e pequenas empresas.</p>
                        </div>
                        <i class="fa-solid fa-chevron-down setinha"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feedback (scrollar para lateral as opiniões -->
    <section id="feedback" class="secao-feedback">
        <div class="container">

            <h3 class="titulo_solucao">O que dizem nossos clientes</h3>

            <div class="feedback-wrapper">
                <button id="btnFeedPrev" class="feed-nav prev">&#10094;</button>

                <div class="feedback-track" id="trackFeedback">

                    <div class="testimonial-card">
                        <div class="quote-icon">“</div>
                        <p class="depoimento-texto">
                            A equipe foi excepcional. Conseguiram resolver um problema tributário que tínhamos há anos em questão de semanas. Recomendo muito!
                        </p>
                        <div class="autor-info">
                            <img src="https://via.placeholder.com/50" alt="Foto Cliente" class="autor-img">
                            <div>
                                <span class="autor-nome">Carlos Almeida</span>
                                <span class="autor-empresa">Diretor, Empresa X</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="quote-icon">“</div>
                        <p class="depoimento-texto">
                            Profissionalismo nota 10. O sistema que implementaram otimizou nosso tempo em 40%. O suporte pós-venda também é excelente.
                        </p>
                        <div class="autor-info">
                            <img src="https://via.placeholder.com/50" alt="Foto Cliente" class="autor-img">
                            <div>
                                <span class="autor-nome">Mariana Souza</span>
                                <span class="autor-empresa">Gerente, Logística Y</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="quote-icon">“</div>
                        <p class="depoimento-texto">
                            Melhor investimento que fizemos este ano. A consultoria jurídica nos salvou de um processo trabalhista complicado.
                        </p>
                        <div class="autor-info">
                            <img src="https://via.placeholder.com/50" alt="Foto Cliente" class="autor-img">
                            <div>
                                <span class="autor-nome">Roberto Firmino</span>
                                <span class="autor-empresa">CEO, Tech Solutions</span>
                            </div>
                        </div>
                    </div>

                </div>

                <button id="btnFeedNext" class="feed-nav next">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- contato -->
    <section id="contato" class="secao-contato-pro">
        <div class="container-contato">

            <div class="cabecalho-form">
                <h3 class="titulo-contato">Solicite uma Proposta</h3>
                <p class="descricao-contato">
                    A Evolvere Soluções Estratégicas oferece soluções que transformam dados em decisões
                    estratégicas e impulsionam o crescimento sustentável de MEIs e pequenas empresas.
                </p>
            </div>

            <div class="card-formulario">
                <form id="formContato" class="form-grid" action="https://formspree.io/f/xqepjorz" method="POST">

                    <div class="grupo-input">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                    </div>

                    <div class="grupo-input">
                        <label for="email">E-mail Corporativo</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>

                    <div class="grupo-input">
                        <label for="celular">Telefone / WhatsApp</label>
                        <input type="tel" id="celular" name="celular" placeholder="(XX) 99999-9999">
                    </div>

                    <div class="grupo-input">
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto" name="assunto" placeholder="Ex: Consultoria Financeira" required>
                    </div>

                    <div class="grupo-input full-width">
                        <label for="mensagem">Como podemos ajudar?</label>
                        <textarea id="mensagem" name="mensagem" rows="5" placeholder="Descreva sua necessidade..." required></textarea>
                    </div>

                    <div class="acao-form full-width">
                        <button type="submit" class="btn-enviar-email">ENVIAR SOLICITAÇÃO</button>
                    </div>
                </form>
            </div>

            <div class="area-whatsapp">
                <h3>Prefere um atendimento instantâneo?</h3>
                <a href="https://wa.me/5519981152090" target="_blank" class="btn-whatsapp-pro">
                    <span class="icone-zap">📱</span> Fale conosco pelo WhatsApp
                </a>
            </div>

        </div>
    </section>
                        
    <!-- Rodapé -->
    <footer class="footer">
        <di class="container">
            <p>&copy; Evolvere Soluções Estratégicas | CNPJ 51.063.580/0001-05 | Todos os direitos reservados</p>
            </div>
    </footer>
    <!-- js parceiros e clientes -->
    <script>
        // --- FUNÇÃO PARA CRIAR CARROSSEL ---
        function ativarCarrossel(idSlider, idBtnEsq, idBtnDir) {
            const slider = document.getElementById(idSlider);
            const prevBtn = document.getElementById(idBtnEsq);
            const nextBtn = document.getElementById(idBtnDir);
            const scrollAmount = 300; // Quanto rola por clique

            if (slider && prevBtn && nextBtn) {
                nextBtn.addEventListener('click', () => {
                    slider.scrollLeft += scrollAmount;
                });

                prevBtn.addEventListener('click', () => {
                    slider.scrollLeft -= scrollAmount;
                });
            } else {
                console.warn(`Alerta: Elementos do carrossel ${idSlider} não encontrados.`);
            }
        }

        // --- ATIVAR OS CARROSSÉIS ---

        // 1. Ativa o de Parceiros
        ativarCarrossel('slider', 'prevBtn', 'nextBtn');

        // 2. Ativa o de Clientes (com os novos IDs)
        ativarCarrossel('slider-clientes', 'prevBtnClientes', 'nextBtnClientes');
    </script>

    <!-- seção feedbacks -->
    <script>
        // --- LÓGICA EXCLUSIVA PARA FEEDBACKS ---
        const trackFeedback = document.getElementById('trackFeedback');
        const btnFeedPrev = document.getElementById('btnFeedPrev');
        const btnFeedNext = document.getElementById('btnFeedNext');

        if (trackFeedback && btnFeedPrev && btnFeedNext) {

            // Calcula a largura do card + o gap (espaço)
            // 320px do card + 30px do gap = 350px
            const moveAmount = 350;

            btnFeedNext.addEventListener('click', () => {
                trackFeedback.scrollLeft += moveAmount;
            });

            btnFeedPrev.addEventListener('click', () => {
                trackFeedback.scrollLeft -= moveAmount;
            });
        }
    </script>

    <!-- seção soluções -->    
    <script>
        function toggleCard(element) {
            // 1. Verifica se o card clicado já está aberto
            const isAlreadyActive = element.classList.contains('ativo');

            // 2. Fecha TODOS os cards primeiro (efeito sanfona)
            const allCards = document.querySelectorAll('.card');
            allCards.forEach(card => {
                card.classList.remove('ativo');
            });

            // 3. Se o card clicado NÃO estava aberto, abrimos ele agora
            if (!isAlreadyActive) {
                element.classList.add('ativo');
            }
        }
    </script>

    <!-- botão zap -->

    <a href="https://wa.me/5519981152090?text=Olá! Gostaria de saber mais sobre a Evolvere."
        class="zap-flutuante"
        target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</body>

</html>
