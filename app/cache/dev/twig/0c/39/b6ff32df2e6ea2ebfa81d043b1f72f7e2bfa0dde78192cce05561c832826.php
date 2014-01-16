<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_0c39b6ff32df2e6ea2ebfa81d043b1f72f7e2bfa0dde78192cce05561c832826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  651 => 337,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  593 => 310,  591 => 309,  588 => 308,  563 => 298,  559 => 296,  552 => 293,  545 => 291,  541 => 290,  519 => 278,  515 => 276,  497 => 267,  489 => 262,  479 => 256,  471 => 253,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  212 => 78,  431 => 189,  348 => 140,  270 => 102,  207 => 75,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  746 => 478,  710 => 475,  698 => 471,  682 => 467,  679 => 466,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  389 => 160,  334 => 141,  276 => 111,  255 => 93,  353 => 193,  350 => 327,  308 => 287,  406 => 158,  401 => 172,  378 => 157,  373 => 156,  364 => 139,  359 => 138,  290 => 119,  244 => 85,  234 => 80,  198 => 69,  195 => 68,  155 => 47,  316 => 121,  284 => 106,  279 => 104,  237 => 86,  694 => 470,  685 => 406,  680 => 403,  678 => 398,  668 => 344,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 319,  599 => 355,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  550 => 326,  531 => 283,  518 => 307,  514 => 306,  509 => 272,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 226,  383 => 207,  366 => 140,  331 => 140,  267 => 101,  232 => 88,  318 => 111,  306 => 107,  256 => 96,  242 => 140,  170 => 96,  351 => 192,  323 => 128,  301 => 111,  281 => 114,  251 => 101,  248 => 94,  239 => 83,  225 => 77,  213 => 78,  211 => 81,  202 => 77,  165 => 60,  134 => 54,  370 => 100,  346 => 196,  343 => 146,  330 => 87,  327 => 114,  320 => 127,  313 => 183,  310 => 81,  304 => 181,  287 => 72,  265 => 96,  262 => 98,  260 => 98,  12 => 34,  150 => 55,  70 => 19,  549 => 411,  544 => 172,  538 => 319,  521 => 162,  511 => 160,  508 => 159,  504 => 302,  499 => 268,  487 => 152,  477 => 150,  470 => 135,  463 => 248,  460 => 132,  449 => 198,  441 => 196,  426 => 102,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 206,  367 => 198,  357 => 123,  352 => 135,  333 => 117,  302 => 125,  300 => 180,  296 => 121,  226 => 84,  205 => 108,  192 => 65,  186 => 111,  174 => 65,  172 => 64,  160 => 58,  127 => 35,  20 => 1,  707 => 211,  704 => 210,  696 => 206,  686 => 468,  681 => 203,  666 => 200,  663 => 393,  635 => 191,  618 => 190,  602 => 317,  596 => 181,  592 => 351,  590 => 178,  585 => 307,  568 => 175,  551 => 174,  547 => 173,  533 => 284,  528 => 167,  525 => 280,  516 => 161,  510 => 158,  507 => 157,  505 => 270,  502 => 155,  492 => 295,  473 => 254,  467 => 134,  456 => 273,  451 => 141,  446 => 197,  403 => 157,  394 => 168,  377 => 82,  371 => 156,  361 => 195,  349 => 133,  347 => 191,  342 => 137,  339 => 100,  336 => 126,  329 => 188,  326 => 138,  324 => 113,  311 => 89,  297 => 179,  291 => 102,  286 => 112,  274 => 97,  272 => 158,  263 => 95,  250 => 93,  233 => 87,  228 => 78,  223 => 27,  200 => 72,  197 => 104,  191 => 67,  146 => 49,  84 => 24,  344 => 119,  340 => 145,  335 => 134,  321 => 112,  315 => 110,  295 => 178,  292 => 135,  288 => 176,  282 => 80,  280 => 101,  277 => 100,  259 => 103,  249 => 55,  215 => 74,  184 => 101,  181 => 65,  161 => 63,  137 => 46,  129 => 57,  118 => 49,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 479,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  722 => 184,  719 => 183,  715 => 277,  713 => 214,  708 => 267,  706 => 473,  702 => 472,  699 => 235,  693 => 232,  690 => 469,  688 => 230,  683 => 227,  677 => 465,  674 => 223,  672 => 345,  669 => 201,  664 => 342,  658 => 391,  655 => 194,  652 => 193,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  613 => 320,  611 => 203,  608 => 187,  605 => 186,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  572 => 180,  569 => 300,  566 => 182,  561 => 178,  557 => 295,  548 => 292,  542 => 321,  539 => 171,  536 => 169,  530 => 165,  526 => 310,  523 => 156,  517 => 404,  512 => 159,  506 => 151,  498 => 134,  495 => 148,  491 => 147,  486 => 292,  483 => 258,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  465 => 249,  462 => 202,  459 => 246,  450 => 135,  447 => 134,  434 => 130,  428 => 230,  425 => 135,  420 => 249,  417 => 126,  414 => 127,  408 => 176,  400 => 214,  396 => 234,  390 => 150,  388 => 107,  376 => 205,  369 => 141,  363 => 126,  358 => 151,  345 => 147,  338 => 135,  332 => 116,  328 => 139,  325 => 129,  319 => 124,  317 => 185,  307 => 128,  303 => 106,  299 => 112,  293 => 120,  289 => 113,  275 => 105,  271 => 108,  261 => 91,  257 => 149,  253 => 100,  236 => 109,  231 => 83,  222 => 83,  216 => 79,  210 => 77,  194 => 70,  190 => 76,  188 => 102,  185 => 74,  180 => 62,  178 => 66,  175 => 65,  152 => 46,  148 => 64,  114 => 71,  97 => 41,  90 => 26,  77 => 20,  81 => 30,  76 => 31,  58 => 14,  126 => 42,  113 => 48,  104 => 32,  53 => 12,  153 => 56,  124 => 41,  110 => 22,  100 => 39,  65 => 11,  34 => 5,  23 => 18,  480 => 151,  474 => 285,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 131,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 215,  398 => 119,  393 => 211,  387 => 164,  384 => 147,  381 => 121,  379 => 119,  374 => 81,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 115,  298 => 120,  294 => 90,  285 => 175,  283 => 100,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 88,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 58,  132 => 44,  128 => 58,  107 => 48,  61 => 15,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 86,  238 => 139,  235 => 85,  230 => 106,  227 => 86,  224 => 81,  221 => 75,  219 => 129,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 40,  71 => 13,  67 => 24,  63 => 18,  59 => 17,  28 => 3,  38 => 6,  26 => 6,  93 => 27,  88 => 25,  78 => 18,  201 => 106,  196 => 92,  183 => 121,  171 => 63,  166 => 95,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 61,  138 => 36,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 14,  87 => 34,  46 => 13,  44 => 9,  31 => 4,  25 => 35,  21 => 2,  94 => 21,  89 => 35,  85 => 23,  75 => 19,  68 => 30,  56 => 16,  27 => 3,  24 => 3,  19 => 1,  79 => 21,  72 => 17,  69 => 21,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 50,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 12,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 73,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 50,  147 => 54,  144 => 42,  141 => 51,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 46,  99 => 31,  95 => 34,  92 => 27,  86 => 64,  82 => 28,  80 => 32,  73 => 20,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
