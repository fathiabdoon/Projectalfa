<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_8b21298d1732cdd04a970bdbebd0824c extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  346 => 321,  343 => 320,  299 => 278,  65 => 22,  20 => 1,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  170 => 84,  385 => 160,  382 => 159,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  206 => 77,  204 => 76,  180 => 63,  159 => 53,  148 => 46,  34 => 5,  344 => 119,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 128,  300 => 105,  297 => 277,  291 => 102,  274 => 97,  265 => 107,  263 => 95,  255 => 103,  231 => 89,  212 => 79,  190 => 68,  174 => 59,  104 => 37,  178 => 66,  175 => 65,  161 => 63,  118 => 49,  100 => 36,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 322,  334 => 145,  327 => 140,  293 => 118,  288 => 101,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  221 => 85,  219 => 84,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 66,  172 => 64,  153 => 77,  150 => 55,  134 => 54,  113 => 40,  81 => 23,  97 => 23,  63 => 21,  58 => 18,  59 => 22,  127 => 60,  110 => 22,  102 => 33,  90 => 37,  76 => 28,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 87,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 43,  140 => 42,  132 => 51,  128 => 49,  119 => 40,  107 => 27,  71 => 23,  38 => 6,  177 => 64,  165 => 83,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 27,  70 => 26,  67 => 22,  61 => 23,  94 => 34,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 11,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 20,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  196 => 92,  183 => 70,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 59,  138 => 57,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 20,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 15,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
