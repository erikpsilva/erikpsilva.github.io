<!DOCTYPE html>
<html>
    <head>
        <title>Erik Primão - Desenvolvedor Front-End</title>
        
        <?php include 'includes/assets.php';?>
        
    </head>

    <body>
    
    <?php include 'includes/header.php';?>

    <main class="technical-knowledge">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Conhecimeto Técnico</h2>
                    <ul>
                        <li><img src="images/icon-html5.png" alt="HTML 5"><span>HTML 5</span></li>
                        <li><img src="images/icon-css3.png" alt="CSS 3"><span>CSS 3</span></li>
                        <li><img src="images/icon-bootstrap.png" alt="Bootstrap"><span>Bootstrap</span></li>
                        <li><img src="images/icon-less.png" alt="Less"><span>Less</span></li>
                        <li><img src="images/icon-sass.png" alt="Sass"><span>Sass</span></li>
                        <li><img src="images/icon-jquery.png" alt="jQuery"><span>jQuery</span></li>
                        <li><img src="images/icon-js.png" alt="JavaScript"><span>JavaScript</span></li>
                        <li><img src="images/icon-git.png" alt="Git"><span>Git</span></li>
                        <li><img src="images/icon-gulp.png" alt="Gulp"><span>Gulp</span></li>
                        <li><img src="images/icon-ps.png" alt="Photoshop"><span>Photoshop</span></li>
                        <li><img src="images/icon-ai.png" alt="illustrator"><span>illustrator</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <main class="technical-experience">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Experiências Técnicas</h2>
                </div>
                <div class="col-md-4">
                    <h3>Responsividade</h3>
                    <p>O responsivo é uma de minhas melhores habilidades, gosto de trabalhar as adaptações para todas as telas pensando sempre na melhor experiência de usabilidade para o úsuario.</p>
                </div>
                <div class="col-md-4">
                    <h3>SEO</h3>
                    <p>Tenho grande experiência em trabalhar um código semantico e acima de tudo priorizando estratégias para SEO, garantindo uma renderização com maior facilidade para leitura de mecanismo de buscas.</p>
                </div>
                <div class="col-md-4">
                    <h3>UX <span>(User Experience)</span></h3>
                    <p>Minhas experiências em criar e desenvolver layouts, me permite buscar priorizar cada vez mais a usabilidade do usúario, facilitando a navegação com o objetivo de trazer melhores resultados.</p>
                </div>
            </div>
        </section>
    </main>

    <main class="portfolio">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Portfólio</h2>
                </div>
                <div class="col-md-12">
                    <div class="portfolio-item">
                        <div>
                            <a href="http://www.enterplay.com.br/" target="_blank">
                                <img src="images/portfolio/enterplay-plataforma.jpg" alt="EnterPlay - Plataforma de Entretenimento Digital">
                                <p>EnterPlay - Plataforma de Entretenimento Digital</p>
                            </a>
                        </div>

                        <div>
                            <a href="http://www.enterplay.net.br/" target="_blank">
                                <img src="images/portfolio/enterplay-institucional.jpg" alt="EnterPlay - Site Institucional">
                                <p>EnterPlay - Site Institucional</p>
                            </a>
                        </div>

                        <div>
                            <a href="http://www.enterplay.com.br/promotions/fox" target="_blank">
                                <img src="images/portfolio/fox.jpg" alt="EnterPlay - Plataforma de Entretenimento Digital">
                                <p>Fox - Pagina Promocional com a EnterPlay</p>
                            </a>
                        </div>

                        <div>
                            <a href="http://www.folha.uol.com.br/" target="_blank">
                                <img src="images/portfolio/folha-de-sp.jpg" alt="Nova plataforma da Folha de São Paulo">
                                <p>Nova plataforma da Folha de São Paulo</p>
                            </a>
                        </div>

                        <div>
                            <a href="http://www.folha.uol.com.br/" target="_blank">
                                <img src="images/portfolio/portal-do-correspondente.jpg" alt="Portal do C">
                                <p>Portal do Correspondente</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <main class="contact">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        <!--<img src="images/logo-erik-primao-invert.png" alt="Erik Primao - Desenvolvedor Front-End">-->
                        <span>Entre em contato</span>
                    </h2>
                </div>
                <div class="col-md-12">
                    <form id="form" action="" method="post" name="form" onsubmit="return false;">
                        <input type="text" name="nome" placeholder="Nome" id="nome">
                        <input type="text" name="email" placeholder="E-mail" id="email">
                        <textarea id="mensagem" placeholder="Mensagem" name="mensagem"></textarea>
                        <input type="button" value="ENVIAR" id="enviar">
                    </form>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/erik-prim%C3%A3o-silva-a1950849" target="_blank"><i class="icon-linkedin"></i></a></li>
                        <li><a href="mailto:erikpsilva@gmail.com"><i class="icon-mail" target="_blank"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php';?>
    <?php include 'includes/shadow.php';?>

    </body>
</html>
