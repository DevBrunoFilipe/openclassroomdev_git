{% extends 'base.html.twig' %}

{% block body %}

    {% include 'default/menu.html.twig' %}
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" style="color: black; text-shadow: 2px 2px white; font-size: 65px;">KeepCalm GT</h1>
                <hr>
                <p style="color: black; font-weight: bold; text-shadow: 2px 2px white; font-size: 30px;">Mainly a Destiny 2 clan</p>
                <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Who are we really?</h2>
                    <hr class="light">
                    <p class="text-faded">KeepCalm Gaming Team (KCGT) is a multi-cultural Destiny based clan, we were founded in the early launch of the original Destiny, and are now expanding to Destiny 2.</p>
                    <p class="text-faded">Our main focus is raiding, however, we are not a hardcore clan, if you fancy just having some friends to do some activities, that works too.</p>
                    <!--<p class="text-faded">Destiny is our main game, but there's plenty of games to go around between it's members.</p>-->
                    <!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Care to join us?</a>-->
                </div>
            </div>
        </div>
    </section>

    <section id="recruitment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What/who are we looking for...</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center sr-icons">
                    <div class="service-box">
                        {#<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>#}
                        <h3>Any class</h3>
                        <p class="text-muted">With the game just beggining, there are no class recruitment restrictions, come one, come all.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center sr-icons">
                    <div class="service-box">
                        {#<i class="fa fa-4x fa fa-id-card text-primary sr-icons"></i>#}
                        <h3>Age restriction</h3>
                        <p class="text-muted">We are a mature clan, as such, humour and overall speech is most likely not suitable for children, for now, we're restricted to 16+ of age members.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center sr-icons">
                    <div class="service-box">
                        {#<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>#}
                        <h3>Overall ambient</h3>
                        <p class="text-muted">Every member in the clan is pretty much outgoing, if you enjoy some comedy and a bit of silliness aswell, we might just be the right place for you. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center sr-icons">
                    <div class="service-box">
                        {#<i class="fa fa-4x fa-heart text-primary sr-icons"></i>#}
                        <h3>Portuguese & English</h3>
                        <p class="text-muted">The clan was originally portuguese, however, with the progression of time, we opened the doors to english speaking gamers as well.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <br>
                    <hr class="primary sr-icons">
                    <br>
                    <p><a href="https://www.bungie.net/en/ClanV2?groupid=927314" class="page-scroll btn btn-primary btn-xl sr-button" target="_blank">Register and apply</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="resources">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="https://www.youtube.com/channel/UCznI4sJgpm2A0kuXeeaXrPw" class="portfolio-box" target="_blank">
                        <img src="img/resources/youtube_logo.jpg" class="img-responsive" alt="" style="max-height: 350px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    KCGT's YouTube Channel
                                </div>
                                <div class="project-name">
                                    click to open...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--set full size picture location if used as an actual gallery-->
                    <!--<a href="https://www.youtube.com/channel/UCznI4sJgpm2A0kuXeeaXrPw" class="portfolio-box">-->
                    <a href="https://www.twitch.tv/keepcalmgamingpt" class="portfolio-box" target="_blank">
                        <img src="img/resources/twitch_logo.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    KCGT's Twitch Channel
                                </div>
                                <div class="project-name">
                                    click to open...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://www.facebook.com/KeepcalmGamingTeamPT" class="portfolio-box" target="_blank">
                        <img src="img/resources/facebook_logo.jpg" class="img-responsive" alt="" style="max-height: 350px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    KCGT's Facebook page
                                </div>
                                <div class="project-name">
                                    click to open...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Feel free to join/like/subscribe to any of our channels/pages.</h2>
            </div>
        </div>
    </aside>

    <section id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Need to speak to one of us?</h2>
                    <hr class="primary">
                    <p>As registrations are not currently yet working on the website, you can contact us through one of the following means:</p>
                </div>
                <!--<div class="col-lg-4 col-lg-offset-2 text-center">-->
                <!--<i class="fa fa-phone fa-3x sr-contact"></i>-->
                <!--<p>123-456-6789</p>-->
                <!--</div>-->
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">nick@kcgt.com</a></p>
                </div>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <hr class="primary">
                <p>If per chance none of these methods work for you, try coming back at a later date, and trying again.</p>
            </div>
        </div>
    </section>

{% endblock %}

{% block stylesheets %}{% endblock %}
