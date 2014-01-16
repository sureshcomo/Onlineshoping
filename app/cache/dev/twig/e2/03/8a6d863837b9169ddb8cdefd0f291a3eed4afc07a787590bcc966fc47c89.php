<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_e2038a6d863837b9169ddb8cdefd0f291a3eed4afc07a787590bcc966fc47c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 158,  401 => 156,  378 => 144,  373 => 142,  364 => 139,  359 => 138,  290 => 106,  244 => 85,  234 => 80,  198 => 69,  195 => 68,  155 => 53,  316 => 121,  284 => 106,  279 => 104,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  331 => 187,  267 => 94,  232 => 84,  318 => 122,  306 => 141,  256 => 89,  242 => 140,  170 => 74,  351 => 135,  323 => 125,  301 => 111,  281 => 105,  251 => 101,  248 => 116,  239 => 83,  225 => 77,  213 => 126,  211 => 81,  202 => 77,  165 => 59,  134 => 45,  370 => 100,  346 => 196,  343 => 132,  330 => 87,  327 => 126,  320 => 84,  313 => 82,  310 => 81,  304 => 174,  287 => 72,  265 => 99,  262 => 105,  260 => 98,  12 => 34,  150 => 55,  70 => 33,  549 => 174,  544 => 172,  538 => 319,  521 => 162,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  426 => 102,  419 => 98,  415 => 247,  410 => 96,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 99,  357 => 125,  352 => 135,  333 => 117,  302 => 78,  300 => 139,  296 => 109,  226 => 67,  205 => 59,  192 => 65,  186 => 111,  174 => 60,  172 => 52,  160 => 58,  127 => 60,  20 => 11,  707 => 211,  704 => 210,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  635 => 191,  618 => 190,  602 => 185,  596 => 181,  592 => 351,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  533 => 169,  528 => 167,  525 => 166,  516 => 161,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  492 => 295,  473 => 150,  467 => 134,  456 => 273,  451 => 141,  446 => 122,  403 => 157,  394 => 152,  377 => 82,  371 => 113,  361 => 208,  349 => 133,  347 => 134,  342 => 129,  339 => 100,  336 => 126,  329 => 95,  326 => 185,  324 => 116,  311 => 89,  297 => 84,  291 => 169,  286 => 133,  274 => 98,  272 => 158,  263 => 125,  250 => 93,  233 => 62,  228 => 78,  223 => 27,  200 => 70,  197 => 70,  191 => 69,  146 => 49,  84 => 29,  344 => 97,  340 => 90,  335 => 188,  321 => 123,  315 => 118,  295 => 88,  292 => 135,  288 => 107,  282 => 80,  280 => 101,  277 => 100,  259 => 70,  249 => 55,  215 => 74,  184 => 63,  181 => 80,  161 => 71,  137 => 46,  129 => 57,  118 => 46,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  713 => 214,  708 => 267,  706 => 237,  702 => 209,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  669 => 201,  664 => 218,  658 => 391,  655 => 194,  652 => 193,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  613 => 188,  611 => 203,  608 => 187,  605 => 186,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 180,  569 => 183,  566 => 182,  561 => 178,  557 => 330,  548 => 165,  542 => 321,  539 => 171,  536 => 169,  530 => 165,  526 => 310,  523 => 156,  517 => 161,  512 => 159,  506 => 151,  498 => 134,  495 => 148,  491 => 147,  486 => 292,  483 => 129,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  465 => 147,  462 => 146,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  428 => 136,  425 => 135,  420 => 249,  417 => 126,  414 => 127,  408 => 124,  400 => 120,  396 => 234,  390 => 150,  388 => 107,  376 => 119,  369 => 141,  363 => 114,  358 => 139,  345 => 97,  338 => 130,  332 => 125,  328 => 124,  325 => 73,  319 => 124,  317 => 70,  307 => 115,  303 => 140,  299 => 112,  293 => 109,  289 => 112,  275 => 103,  271 => 108,  261 => 91,  257 => 149,  253 => 95,  236 => 109,  231 => 33,  222 => 81,  216 => 100,  210 => 75,  194 => 87,  190 => 50,  188 => 21,  185 => 68,  180 => 62,  178 => 45,  175 => 77,  152 => 92,  148 => 64,  114 => 71,  97 => 41,  90 => 32,  77 => 27,  81 => 30,  76 => 28,  58 => 17,  126 => 42,  113 => 41,  104 => 67,  53 => 10,  153 => 56,  124 => 41,  110 => 22,  100 => 36,  65 => 30,  34 => 16,  23 => 18,  480 => 151,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 136,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 111,  283 => 102,  278 => 86,  268 => 127,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 44,  132 => 44,  128 => 58,  107 => 48,  61 => 12,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 62,  119 => 28,  102 => 17,  71 => 32,  67 => 27,  63 => 19,  59 => 49,  28 => 3,  38 => 17,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 60,  158 => 79,  156 => 57,  151 => 45,  142 => 61,  138 => 36,  136 => 60,  121 => 75,  117 => 19,  105 => 18,  91 => 34,  62 => 29,  49 => 13,  87 => 33,  46 => 8,  44 => 19,  31 => 3,  25 => 35,  21 => 12,  94 => 34,  89 => 35,  85 => 32,  75 => 28,  68 => 31,  56 => 11,  27 => 13,  24 => 13,  19 => 11,  79 => 35,  72 => 56,  69 => 50,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 86,  157 => 58,  145 => 52,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 50,  111 => 43,  108 => 19,  101 => 43,  98 => 37,  96 => 44,  83 => 32,  74 => 27,  66 => 25,  55 => 22,  52 => 14,  50 => 22,  43 => 11,  41 => 10,  35 => 16,  32 => 16,  29 => 15,  209 => 73,  203 => 71,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 80,  176 => 65,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 40,  106 => 45,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 25,  57 => 20,  54 => 18,  51 => 38,  48 => 9,  45 => 8,  42 => 7,  39 => 17,  36 => 5,  33 => 4,  30 => 3,);
    }
}
