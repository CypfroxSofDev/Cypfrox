<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c5a76b06afbb691e813c880f3e8c36c52d6fb50303a7c46e00a37e8d222d05be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f27ab7bc3aaacc2dd38c9a5811b8057b3258d2dcbb61b2efbd9b9d877df1b3e = $this->env->getExtension("native_profiler");
        $__internal_4f27ab7bc3aaacc2dd38c9a5811b8057b3258d2dcbb61b2efbd9b9d877df1b3e->enter($__internal_4f27ab7bc3aaacc2dd38c9a5811b8057b3258d2dcbb61b2efbd9b9d877df1b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f27ab7bc3aaacc2dd38c9a5811b8057b3258d2dcbb61b2efbd9b9d877df1b3e->leave($__internal_4f27ab7bc3aaacc2dd38c9a5811b8057b3258d2dcbb61b2efbd9b9d877df1b3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_320ed17e789b187cb360937c077f9c846c4e366f2e6d5f7fb137923e3177b352 = $this->env->getExtension("native_profiler");
        $__internal_320ed17e789b187cb360937c077f9c846c4e366f2e6d5f7fb137923e3177b352->enter($__internal_320ed17e789b187cb360937c077f9c846c4e366f2e6d5f7fb137923e3177b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_320ed17e789b187cb360937c077f9c846c4e366f2e6d5f7fb137923e3177b352->leave($__internal_320ed17e789b187cb360937c077f9c846c4e366f2e6d5f7fb137923e3177b352_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15ac865475b266b8a1f16aff2471ae887e79a17237e08851f0cf48bf5c830de8 = $this->env->getExtension("native_profiler");
        $__internal_15ac865475b266b8a1f16aff2471ae887e79a17237e08851f0cf48bf5c830de8->enter($__internal_15ac865475b266b8a1f16aff2471ae887e79a17237e08851f0cf48bf5c830de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15ac865475b266b8a1f16aff2471ae887e79a17237e08851f0cf48bf5c830de8->leave($__internal_15ac865475b266b8a1f16aff2471ae887e79a17237e08851f0cf48bf5c830de8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd381119e6b5c977782bb89232c826411d01f6eb54dc276510ce26b747cbc153 = $this->env->getExtension("native_profiler");
        $__internal_fd381119e6b5c977782bb89232c826411d01f6eb54dc276510ce26b747cbc153->enter($__internal_fd381119e6b5c977782bb89232c826411d01f6eb54dc276510ce26b747cbc153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fd381119e6b5c977782bb89232c826411d01f6eb54dc276510ce26b747cbc153->leave($__internal_fd381119e6b5c977782bb89232c826411d01f6eb54dc276510ce26b747cbc153_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
