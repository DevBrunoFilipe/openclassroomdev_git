<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/">KeepCalm Gaming Team</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            {% if is_granted('ROLE_USER') %}
                <li>
                    <a class="page-scroll" href="/">home</a>
                </li>
                <li>
                    <a class="page-scroll" href="/auth/dashboard">dashboard</a>
                </li>
                <li>
                    <a class="page-scroll" href="/auth/user">profile</a>
                </li>
                <li>
                    <a class="page-scroll" href="/logout">logout</a>
                </li>
            {% else %}
                <li>
                    <a class="page-scroll" href="#about">about us</a>
                </li>
                <li>
                    <a class="page-scroll" href="#recruitment">recruitment</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contacts">contacts</a>
                </li>
                <li>
                    <a class="page-scroll" href="/login">login</a>
                </li>
            {% endif %}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>