<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_4a9abac39daea790a9474081a1abb1a4682fed5a0cbd87ca96c012ef943b15c2 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  50 => 15,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  104 => 29,  101 => 28,  91 => 35,  87 => 23,  72 => 21,  68 => 20,  62 => 24,  54 => 16,  46 => 14,  43 => 13,  38 => 12,  36 => 11,  24 => 2,  19 => 1,  203 => 50,  200 => 49,  194 => 76,  188 => 73,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  168 => 68,  163 => 67,  160 => 66,  154 => 64,  140 => 51,  138 => 49,  123 => 41,  120 => 40,  116 => 38,  114 => 37,  108 => 35,  105 => 34,  102 => 33,  97 => 31,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 26,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  37 => 13,  33 => 12,  20 => 1,  182 => 65,  178 => 63,  175 => 62,  165 => 58,  157 => 65,  152 => 55,  149 => 54,  145 => 52,  141 => 50,  139 => 49,  135 => 48,  131 => 46,  128 => 45,  118 => 39,  111 => 36,  106 => 38,  103 => 37,  99 => 32,  95 => 27,  93 => 32,  83 => 30,  79 => 29,  75 => 28,  71 => 22,  65 => 19,  56 => 15,  52 => 14,  48 => 13,  45 => 15,  41 => 14,  31 => 3,  28 => 2,);
    }
}
