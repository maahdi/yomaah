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
        return array (  83 => 30,  79 => 29,  75 => 28,  66 => 25,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  91 => 35,  87 => 23,  72 => 21,  68 => 20,  62 => 24,  54 => 16,  46 => 14,  43 => 13,  24 => 2,  19 => 1,  199 => 49,  196 => 48,  190 => 75,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  168 => 68,  164 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  136 => 50,  134 => 48,  131 => 47,  127 => 45,  124 => 44,  119 => 40,  116 => 39,  114 => 38,  112 => 37,  110 => 36,  107 => 35,  104 => 29,  101 => 28,  98 => 32,  95 => 27,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 26,  65 => 19,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  33 => 12,  20 => 1,  50 => 15,  44 => 11,  38 => 12,  36 => 11,  31 => 5,  28 => 4,);
    }
}
