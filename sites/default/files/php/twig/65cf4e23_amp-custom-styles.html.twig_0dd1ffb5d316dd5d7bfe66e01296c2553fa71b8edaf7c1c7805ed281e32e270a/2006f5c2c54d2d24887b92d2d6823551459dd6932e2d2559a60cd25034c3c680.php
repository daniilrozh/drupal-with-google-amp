<?php

/* themes/ampsubtheme_example/templates/amp-css/amp-custom-styles.html.twig */
class __TwigTemplate_7d5d4a57df0f06ef51233cbe1be1cb954b19f9810462e707f8e8b607f1f6a4c4 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "/* ---------- Layout ----------- */

html {
  height: 100%;
}

body {
  min-height: 100%;
}

.amp-header__content,
.amp-main__content,
.amp-footer__content {
  margin: 0 auto;
  max-width: 620px;
}

.amp-main {
  min-height: 300px;
}

.amp-main__content {
  padding-top: 20px;
  padding-bottom: 40px;
}

.layout-container {
  max-width: 860px;
  margin-left: auto;
  margin-right: auto;
  box-sizing: border-box;
}

/* ---------- Typography ----------- */

body {
  font-family: Georgia, \"Times New Roman\", Times, serif;
  font-size: 100%;
  line-height: 1.5;
  word-wrap: break-word;
}

/* --- Links --- */

a,
a.link {
  text-decoration: none;
  border-bottom: 1px dotted;
}

a:hover,
a:active,
a:focus,
.link:hover,
.link:active,
.link:focus {
  text-decoration: none;
  border-bottom-style: solid;
}

.link {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

h1 a,
h2 a {
  border-bottom: none;
}

/* --- Headings --- */

h1,
h2,
h3,
h4,
h5,
h6,
.heading-a,
.heading-b,
.heading-c,
.heading-d,
.heading-e,
.heading-f {
  font-weight: inherit;
  margin: 1rem 0 0.5rem;
}

h1,
.heading-a {
  font-size: 1.2rem;
  color: #000;
}

h2,
.heading-b {
  font-size: 1rem;
}

h3,
.heading-c {
  font-size: 0.9375rem;
}

h4,
.heading-d {
  font-size: 0.875rem;
}

h5,
h6,
.heading-e,
.heading-f {
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

h5,
.heading-e {
  font-size: 0.75rem;
}

h6,
.heading-f {
  font-size: 0.625rem;
}

/* --- Text --- */

p {
  margin: 0 0 1rem;
}

del {
  text-decoration: line-through;
}

blockquote {
  background: #f7f7f7;
  border-left: 1px solid #bbb; /* LTR */
  font-style: italic;
  margin: 1.3125rem 10px;
  padding: 0.4375rem 10px;
}

[dir=\"rtl\"] blockquote {
  border-left: none;
  border-right: 1px solid #bbb;
}

blockquote:before {
  color: #bbb;
  content: \"\\201C\";
  font-size: 2.625rem;
  line-height: 0.1;
  margin-right: 0.153125rem; /* LTR */
  vertical-align: -0.30625rem;
}

[dir=\"rtl\"] blockquote:before {
  content: \"\\201D\";
  margin-left: 0.153125rem;
  margin-right: 0;
}

blockquote:after {
  color: #bbb;
  content: \"\\201D\";
  font-size: 2.625rem;
  line-height: 0.1;
  vertical-align: -0.39375rem;
}

[dir=\"rtl\"] blockquote:after {
  content: \"\\201C\";
}

blockquote > p:first-child {
  display: inline;
}

img {
  max-width: 100%;
  height: auto;
}

ul, ol {
  margin: 0;
  padding: 0 0 0.21875rem 0.875rem; /* LTR */
}

[dir=\"rtl\"] ul,
[dir=\"rtl\"] ol {
  padding: 0 0.875rem 0.21875rem 0;
}

ol ol,
ul ul {
  margin: 0;
  padding: 0 0 0.21875rem 0.875rem; /* LTR */
}

[dir=\"rtl\"] ol ol,
[dir=\"rtl\"] ul ul {
  padding: 0 0.875rem 0.21875rem 0;
}

/* ---------- Colors ----------- */

body {
  background: #292929;
  color: #3b3b3b;
}

.amp-header {
  background-color: #1d84c3;
  background-image: -webkit-linear-gradient(top, #055a8e 0%, #1d84c3 100%);
  background-image: linear-gradient(to bottom, #055a8e 0%, #1d84c3 100%);
}

.amp-main {
  background-color: #ffffff;
}

.amp-footer {
  background: #292929;
}

a,
.link {
  color: #0071b3;
}

a:hover,
a:focus,
.link:hover,
.link:focus {
  color: #018fe2;
}

a:active,
.link:active {
  color: #23aeff;
}

.amp-header,
.amp-header a,
.amp-header li a.is-active,
.site-branding__text,
.site-branding,
.site-branding__text a,
.site-branding a {
  color: #fffeff;
}

/* ---------- Utility classes ----------- */

.hidden {
  display: none;
}

.visually-hidden {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  overflow: hidden;
  height: 1px;
  width: 1px;
  word-wrap: normal;
}

.visually-hidden.focusable:active,
.visually-hidden.focusable:focus {
  position: static;
  clip: auto;
  overflow: visible;
  height: auto;
  width: auto;
}

.invisible {
  visibility: hidden;
}

.clearfix:after {
  content: \"\";
  display: table;
  clear: both;
}

/* ---------- Header ----------- */

.amp-header {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.amp-header__content {
  padding: 0.75rem .9375rem 0.75rem;
}


.amp-header a {
  border-bottom: none;
}

.brand {
  margin: 0.375rem auto 0.375rem;
}

.site-branding__logo {
  display: inline-block;
  margin-right: 0.875rem; /* LTR */
  margin-bottom: 0.25rem;
  width: 6rem;
}

[dir=\"rtl\"] .site-branding__logo {
  margin-right: 0;
  margin-left: 1em;
}

.site-branding__text {
  display: inline-block;
  vertical-align: top;
}

.site-branding__name {
  font-size: 1.375rem;
  color: #686868;
  line-height: 1;
}

.site-branding__slogan {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-size: 0.8125rem;
  margin-top: 7px;
  word-spacing: 0.1em;
  font-style: italic;
}

/* ---------- Footer ----------- */

.amp-footer {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.amp-footer__content {
  color: #c0c0c0;
  color: rgba(255, 255, 255, 0.65);
  font-size: 0.75rem;
  padding: 2rem 1rem 2rem;
}

.amp-footer a,
.amp-footer a.is-active {
  color: #fcfcfc;
  color: rgba(255, 255, 255, 0.8);
}

.amp-footer a:hover,
.amp-footer a:focus {
  color: #fefefe;
  color: rgba(255, 255, 255, 0.95);
}


/* ---------- Skip Link ----------- */

.amp-skip-link {
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  z-index: 50;
  background: #444;
  background: rgba(0, 0, 0, 0.6);
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-size: 0.94em;
  line-height: 1.7em;
  padding: 1px 10px 2px;
  border-radius: 0 0 10px 10px;
  border-bottom-width: 0;
  outline: 0;
}

.amp-skip-link.visually-hidden.focusable:focus {
  position: absolute;
  color: #fff;
}

/* ---------- Messages ----------- */

.messages__wrapper {
  padding: 20px 0 5px 8px;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  margin: 8px 0;
}

[dir=\"rtl\"] .messages__wrapper {
  padding: 20px 8px 5px 0;
}

.messages {
  background: no-repeat 10px 17px;  /* LTR */
  border: 1px solid;
  border-width: 1px 1px 1px 0;  /* LTR */
  border-radius: 2px;
  padding: 15px 20px 15px 35px; /* LTR */
  word-wrap: break-word;
  overflow-wrap: break-word;
}

[dir=\"rtl\"] .messages {
  border-width: 1px 0 1px 1px;
  background-position: right 10px top 17px;
  padding-left: 20px;
  padding-right: 35px;
  text-align: right;
}
.messages + .messages {
  margin-top: 1.538em;
}

.messages__list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.messages__item + .messages__item {
  margin-top: 0.769em;
}

/* See .color-success in Seven's colors.css */
.messages--status {
  color: #325e1c;
  background-color: #f3faef;
  border-color: #c9e1bd #c9e1bd #c9e1bd transparent;  /* LTR */
  background-image: url(../../../../../../core/misc/icons/73b355/check.svg);
  box-shadow: -8px 0 0 #77b259; /* LTR */
}

[dir=\"rtl\"] .messages--status {
  border-color: #c9e1bd transparent #c9e1bd #c9e1bd;
  box-shadow: 8px 0 0 #77b259;
  margin-left: 0;
}

/* See .color-warning in Seven's colors.css */
.messages--warning {
  background-color: #fdf8ed;
  background-image: url(../../../../../../core/misc/icons/e29700/warning.svg);
  border-color: #f4daa6 #f4daa6 #f4daa6 transparent;  /* LTR */
  color: #734c00;
  box-shadow: -8px 0 0 #e09600; /* LTR */
}

[dir=\"rtl\"] .messages--warning {
  border-color: #f4daa6 transparent #f4daa6 #f4daa6;
  box-shadow: 8px 0 0 #e09600;
}

/* See .color-error in Seven's colors.css */
.messages--error {
  background-color: #fcf4f2;
  color: #a51b00;
  background-image: url(../../../../../../core/misc/icons/e32700/error.svg);
  border-color: #f9c9bf #f9c9bf #f9c9bf transparent;  /* LTR */
  box-shadow: -8px 0 0 #e62600; /* LTR */
}

[dir=\"rtl\"] .messages--error {
  border-color: #f9c9bf transparent #f9c9bf #f9c9bf;
  box-shadow: 8px 0 0 #e62600;
}

.messages--error p.error {
  color: #a51b00;
}
";
    }

    public function getTemplateName()
    {
        return "themes/ampsubtheme_example/templates/amp-css/amp-custom-styles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "/* ---------- Layout ----------- */

html {
  height: 100%;
}

body {
  min-height: 100%;
}

.amp-header__content,
.amp-main__content,
.amp-footer__content {
  margin: 0 auto;
  max-width: 620px;
}

.amp-main {
  min-height: 300px;
}

.amp-main__content {
  padding-top: 20px;
  padding-bottom: 40px;
}

.layout-container {
  max-width: 860px;
  margin-left: auto;
  margin-right: auto;
  box-sizing: border-box;
}

/* ---------- Typography ----------- */

body {
  font-family: Georgia, \"Times New Roman\", Times, serif;
  font-size: 100%;
  line-height: 1.5;
  word-wrap: break-word;
}

/* --- Links --- */

a,
a.link {
  text-decoration: none;
  border-bottom: 1px dotted;
}

a:hover,
a:active,
a:focus,
.link:hover,
.link:active,
.link:focus {
  text-decoration: none;
  border-bottom-style: solid;
}

.link {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

h1 a,
h2 a {
  border-bottom: none;
}

/* --- Headings --- */

h1,
h2,
h3,
h4,
h5,
h6,
.heading-a,
.heading-b,
.heading-c,
.heading-d,
.heading-e,
.heading-f {
  font-weight: inherit;
  margin: 1rem 0 0.5rem;
}

h1,
.heading-a {
  font-size: 1.2rem;
  color: #000;
}

h2,
.heading-b {
  font-size: 1rem;
}

h3,
.heading-c {
  font-size: 0.9375rem;
}

h4,
.heading-d {
  font-size: 0.875rem;
}

h5,
h6,
.heading-e,
.heading-f {
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

h5,
.heading-e {
  font-size: 0.75rem;
}

h6,
.heading-f {
  font-size: 0.625rem;
}

/* --- Text --- */

p {
  margin: 0 0 1rem;
}

del {
  text-decoration: line-through;
}

blockquote {
  background: #f7f7f7;
  border-left: 1px solid #bbb; /* LTR */
  font-style: italic;
  margin: 1.3125rem 10px;
  padding: 0.4375rem 10px;
}

[dir=\"rtl\"] blockquote {
  border-left: none;
  border-right: 1px solid #bbb;
}

blockquote:before {
  color: #bbb;
  content: \"\\201C\";
  font-size: 2.625rem;
  line-height: 0.1;
  margin-right: 0.153125rem; /* LTR */
  vertical-align: -0.30625rem;
}

[dir=\"rtl\"] blockquote:before {
  content: \"\\201D\";
  margin-left: 0.153125rem;
  margin-right: 0;
}

blockquote:after {
  color: #bbb;
  content: \"\\201D\";
  font-size: 2.625rem;
  line-height: 0.1;
  vertical-align: -0.39375rem;
}

[dir=\"rtl\"] blockquote:after {
  content: \"\\201C\";
}

blockquote > p:first-child {
  display: inline;
}

img {
  max-width: 100%;
  height: auto;
}

ul, ol {
  margin: 0;
  padding: 0 0 0.21875rem 0.875rem; /* LTR */
}

[dir=\"rtl\"] ul,
[dir=\"rtl\"] ol {
  padding: 0 0.875rem 0.21875rem 0;
}

ol ol,
ul ul {
  margin: 0;
  padding: 0 0 0.21875rem 0.875rem; /* LTR */
}

[dir=\"rtl\"] ol ol,
[dir=\"rtl\"] ul ul {
  padding: 0 0.875rem 0.21875rem 0;
}

/* ---------- Colors ----------- */

body {
  background: #292929;
  color: #3b3b3b;
}

.amp-header {
  background-color: #1d84c3;
  background-image: -webkit-linear-gradient(top, #055a8e 0%, #1d84c3 100%);
  background-image: linear-gradient(to bottom, #055a8e 0%, #1d84c3 100%);
}

.amp-main {
  background-color: #ffffff;
}

.amp-footer {
  background: #292929;
}

a,
.link {
  color: #0071b3;
}

a:hover,
a:focus,
.link:hover,
.link:focus {
  color: #018fe2;
}

a:active,
.link:active {
  color: #23aeff;
}

.amp-header,
.amp-header a,
.amp-header li a.is-active,
.site-branding__text,
.site-branding,
.site-branding__text a,
.site-branding a {
  color: #fffeff;
}

/* ---------- Utility classes ----------- */

.hidden {
  display: none;
}

.visually-hidden {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  overflow: hidden;
  height: 1px;
  width: 1px;
  word-wrap: normal;
}

.visually-hidden.focusable:active,
.visually-hidden.focusable:focus {
  position: static;
  clip: auto;
  overflow: visible;
  height: auto;
  width: auto;
}

.invisible {
  visibility: hidden;
}

.clearfix:after {
  content: \"\";
  display: table;
  clear: both;
}

/* ---------- Header ----------- */

.amp-header {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.amp-header__content {
  padding: 0.75rem .9375rem 0.75rem;
}


.amp-header a {
  border-bottom: none;
}

.brand {
  margin: 0.375rem auto 0.375rem;
}

.site-branding__logo {
  display: inline-block;
  margin-right: 0.875rem; /* LTR */
  margin-bottom: 0.25rem;
  width: 6rem;
}

[dir=\"rtl\"] .site-branding__logo {
  margin-right: 0;
  margin-left: 1em;
}

.site-branding__text {
  display: inline-block;
  vertical-align: top;
}

.site-branding__name {
  font-size: 1.375rem;
  color: #686868;
  line-height: 1;
}

.site-branding__slogan {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-size: 0.8125rem;
  margin-top: 7px;
  word-spacing: 0.1em;
  font-style: italic;
}

/* ---------- Footer ----------- */

.amp-footer {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.amp-footer__content {
  color: #c0c0c0;
  color: rgba(255, 255, 255, 0.65);
  font-size: 0.75rem;
  padding: 2rem 1rem 2rem;
}

.amp-footer a,
.amp-footer a.is-active {
  color: #fcfcfc;
  color: rgba(255, 255, 255, 0.8);
}

.amp-footer a:hover,
.amp-footer a:focus {
  color: #fefefe;
  color: rgba(255, 255, 255, 0.95);
}


/* ---------- Skip Link ----------- */

.amp-skip-link {
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  z-index: 50;
  background: #444;
  background: rgba(0, 0, 0, 0.6);
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-size: 0.94em;
  line-height: 1.7em;
  padding: 1px 10px 2px;
  border-radius: 0 0 10px 10px;
  border-bottom-width: 0;
  outline: 0;
}

.amp-skip-link.visually-hidden.focusable:focus {
  position: absolute;
  color: #fff;
}

/* ---------- Messages ----------- */

.messages__wrapper {
  padding: 20px 0 5px 8px;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  margin: 8px 0;
}

[dir=\"rtl\"] .messages__wrapper {
  padding: 20px 8px 5px 0;
}

.messages {
  background: no-repeat 10px 17px;  /* LTR */
  border: 1px solid;
  border-width: 1px 1px 1px 0;  /* LTR */
  border-radius: 2px;
  padding: 15px 20px 15px 35px; /* LTR */
  word-wrap: break-word;
  overflow-wrap: break-word;
}

[dir=\"rtl\"] .messages {
  border-width: 1px 0 1px 1px;
  background-position: right 10px top 17px;
  padding-left: 20px;
  padding-right: 35px;
  text-align: right;
}
.messages + .messages {
  margin-top: 1.538em;
}

.messages__list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.messages__item + .messages__item {
  margin-top: 0.769em;
}

/* See .color-success in Seven's colors.css */
.messages--status {
  color: #325e1c;
  background-color: #f3faef;
  border-color: #c9e1bd #c9e1bd #c9e1bd transparent;  /* LTR */
  background-image: url(../../../../../../core/misc/icons/73b355/check.svg);
  box-shadow: -8px 0 0 #77b259; /* LTR */
}

[dir=\"rtl\"] .messages--status {
  border-color: #c9e1bd transparent #c9e1bd #c9e1bd;
  box-shadow: 8px 0 0 #77b259;
  margin-left: 0;
}

/* See .color-warning in Seven's colors.css */
.messages--warning {
  background-color: #fdf8ed;
  background-image: url(../../../../../../core/misc/icons/e29700/warning.svg);
  border-color: #f4daa6 #f4daa6 #f4daa6 transparent;  /* LTR */
  color: #734c00;
  box-shadow: -8px 0 0 #e09600; /* LTR */
}

[dir=\"rtl\"] .messages--warning {
  border-color: #f4daa6 transparent #f4daa6 #f4daa6;
  box-shadow: 8px 0 0 #e09600;
}

/* See .color-error in Seven's colors.css */
.messages--error {
  background-color: #fcf4f2;
  color: #a51b00;
  background-image: url(../../../../../../core/misc/icons/e32700/error.svg);
  border-color: #f9c9bf #f9c9bf #f9c9bf transparent;  /* LTR */
  box-shadow: -8px 0 0 #e62600; /* LTR */
}

[dir=\"rtl\"] .messages--error {
  border-color: #f9c9bf transparent #f9c9bf #f9c9bf;
  box-shadow: 8px 0 0 #e62600;
}

.messages--error p.error {
  color: #a51b00;
}
";
    }
}
