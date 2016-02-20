<?php

/* index.html */
class __TwigTemplate_c5a7d82ba473ec341cf6771dd353d522ceb72e1b5b018bfe357da91bd1d66743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Expressive CSS Content Display Patterns</title>
        <meta name=\"description\" content=\"An approach to writing lightweight, scalable CSS using utility classes that are easy to write and understand.\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,200,200italic' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"./css/style.min.css\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\">
    </head>
    <body>
        <div class=\"box-960 box-center group pad-3 s-pad-2\">
            <section class=\"grid-12 pad-2-vert s-pad-0-sides\">
                <h1 class=\"text-light text-red\">Events</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a vero numquam officiis. Praesentium dolorem optio doloremque libero suscipit, beatae, reiciendis in, dolor dolore fuga enim aperiam obcaecati ratione, omnis!</p>
            </section>

            <section class=\"grid-12 pad-3-vert s-pad-0-sides\">
                ";
        // line 21
        $this->loadTemplate("events.html", "index.html", 21)->display($context);
        // line 22
        echo "            </section>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 22,  41 => 21,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*         <title>Expressive CSS Content Display Patterns</title>*/
/*         <meta name="description" content="An approach to writing lightweight, scalable CSS using utility classes that are easy to write and understand.">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,200,200italic' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="./css/style.min.css">*/
/*         <link rel="shortcut icon" href="favicon.ico">*/
/*     </head>*/
/*     <body>*/
/*         <div class="box-960 box-center group pad-3 s-pad-2">*/
/*             <section class="grid-12 pad-2-vert s-pad-0-sides">*/
/*                 <h1 class="text-light text-red">Events</h1>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a vero numquam officiis. Praesentium dolorem optio doloremque libero suscipit, beatae, reiciendis in, dolor dolore fuga enim aperiam obcaecati ratione, omnis!</p>*/
/*             </section>*/
/* */
/*             <section class="grid-12 pad-3-vert s-pad-0-sides">*/
/*                 {% include "events.html" %}*/
/*             </section>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
