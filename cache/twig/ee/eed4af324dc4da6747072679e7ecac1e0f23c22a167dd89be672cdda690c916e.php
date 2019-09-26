<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.twig */
class __TwigTemplate_76c5f16f819260088d5369c47c1e314fdddaa669b645a61b8e41c4060d36f5af extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>USSD - Ultramed-Health</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/img/favicon.png\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/mdb.min.css\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/style.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 559px) {

            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 560px) and (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 600px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }

    </style>
</head>

<body>

<!-- Navbar -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar\">
    <div class=\"container\">

        <!-- Brand -->
        <a class=\"navbar-brand\" href=\"#\" target=\"_blank\">
            <strong>Ultramed-Health USSD API</strong>
        </a>

        <!-- Collapse -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <!-- Left -->
            <ul class=\"navbar-nav mr-auto\">
                <!--<li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"#\">Home
                    <span class=\"sr-only\">(current)</span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">About MDB</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">Free
                    download</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">Free tutorials</a>
                </li>-->
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->

<!-- Full Page Intro -->
<div class=\"view\">

    <video class=\"video-intro\" poster=\"https://mdbootstrap.com/img/Photos/Others/background.jpg\" playsinline autoplay
           muted loop>
        <source src=\"https://mdbootstrap.com/img/video/Lines-min.mp4\" type=\"video/mp4\">
    </video>

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

        <!-- Content -->
        <div class=\"text-center white-text mx-5 wow fadeIn\">

            <h1 class=\"display-4 mb-4\">
                <strong>Coming Soon!</strong>
            </h1>

            <!-- Time Counter -->
            <p id=\"time-counter\" class=\"border border-light my-4\"></p>


            <h4 class=\"mb-4\">
                <strong>We're working hard to finish the development of this site. </strong>
            </h4>

            <h4 class=\"mb-4 d-none d-md-block\">
                <strong>Until then please browse through our website</strong>
            </h4>

            <a target=\"_blank\" href=\"https://ultramedhealth.com\" class=\"btn btn-outline-white btn-lg\">Browse Website
                <i class=\"fas fa-graduation-cap ml-2\"></i>
            </a>
        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

<!--Footer-->
<footer class=\"page-footer text-center font-small wow fadeIn\">
    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
        © 2019 Copyright:
        <a href=\"https://ultramedhealth.com\" target=\"_blank\"> Ultramed-Health </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/js/jquery-3.4.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/js/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/js/mdb.min.js\"></script>
<!-- Initializations -->
<script type=\"text/javascript\">
    // Animations initialization
    new WOW().init();

</script>

<!-- Time Counter -->
<script type=\"text/javascript\">
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id=\"demo\"
        document.getElementById(\"time-counter\").innerHTML = days + \"d \" + hours + \"h \" +
            minutes + \"m \" + seconds + \"s \";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById(\"time-counter\").innerHTML = \"EXPIRED\";
        }
    }, 1000);

</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 173,  227 => 171,  222 => 169,  217 => 167,  65 => 18,  60 => 16,  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>USSD - Ultramed-Health</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ base_url() }}/img/favicon.png\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ base_url() }}/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"{{ base_url() }}/css/mdb.min.css\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"{{ base_url() }}/css/style.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 559px) {

            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 560px) and (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 600px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }

    </style>
</head>

<body>

<!-- Navbar -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar\">
    <div class=\"container\">

        <!-- Brand -->
        <a class=\"navbar-brand\" href=\"#\" target=\"_blank\">
            <strong>Ultramed-Health USSD API</strong>
        </a>

        <!-- Collapse -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <!-- Left -->
            <ul class=\"navbar-nav mr-auto\">
                <!--<li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"#\">Home
                    <span class=\"sr-only\">(current)</span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">About MDB</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">Free
                    download</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\" target=\"_blank\">Free tutorials</a>
                </li>-->
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->

<!-- Full Page Intro -->
<div class=\"view\">

    <video class=\"video-intro\" poster=\"https://mdbootstrap.com/img/Photos/Others/background.jpg\" playsinline autoplay
           muted loop>
        <source src=\"https://mdbootstrap.com/img/video/Lines-min.mp4\" type=\"video/mp4\">
    </video>

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

        <!-- Content -->
        <div class=\"text-center white-text mx-5 wow fadeIn\">

            <h1 class=\"display-4 mb-4\">
                <strong>Coming Soon!</strong>
            </h1>

            <!-- Time Counter -->
            <p id=\"time-counter\" class=\"border border-light my-4\"></p>


            <h4 class=\"mb-4\">
                <strong>We're working hard to finish the development of this site. </strong>
            </h4>

            <h4 class=\"mb-4 d-none d-md-block\">
                <strong>Until then please browse through our website</strong>
            </h4>

            <a target=\"_blank\" href=\"https://ultramedhealth.com\" class=\"btn btn-outline-white btn-lg\">Browse Website
                <i class=\"fas fa-graduation-cap ml-2\"></i>
            </a>
        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

<!--Footer-->
<footer class=\"page-footer text-center font-small wow fadeIn\">
    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
        © 2019 Copyright:
        <a href=\"https://ultramedhealth.com\" target=\"_blank\"> Ultramed-Health </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/js/jquery-3.4.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/js/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/js/mdb.min.js\"></script>
<!-- Initializations -->
<script type=\"text/javascript\">
    // Animations initialization
    new WOW().init();

</script>

<!-- Time Counter -->
<script type=\"text/javascript\">
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id=\"demo\"
        document.getElementById(\"time-counter\").innerHTML = days + \"d \" + hours + \"h \" +
            minutes + \"m \" + seconds + \"s \";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById(\"time-counter\").innerHTML = \"EXPIRED\";
        }
    }, 1000);

</script>
</body>

</html>
", "home.twig", "C:\\xampp\\htdocs\\Ultramed-Health\\backend\\api\\app\\templates\\home.twig");
    }
}
