<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // usertest_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'usertest_homepage');
            }

            return array (  '_controller' => 'UsertestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usertest_homepage',);
        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // typepermis_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'typepermis_homepage');
            }

            return array (  '_controller' => 'TypepermisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'typepermis_homepage',);
        }

        // test_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'test_homepage');
            }

            return array (  '_controller' => 'TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'test_homepage',);
        }

        // reponse_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'reponse_homepage');
            }

            return array (  '_controller' => 'ReponseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reponse_homepage',);
        }

        // rdv_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'rdv_homepage');
            }

            return array (  '_controller' => 'RdvBundle\\Controller\\DefaultController::indexAction',  '_route' => 'rdv_homepage',);
        }

        // question_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'question_homepage');
            }

            return array (  '_controller' => 'QuestionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'question_homepage',);
        }

        if (0 === strpos($pathinfo, '/moniteur')) {
            // moniteur_index
            if ('/moniteur' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_moniteur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'moniteur_index');
                }

                return array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::indexAction',  '_route' => 'moniteur_index',);
            }
            not_moniteur_index:

            // moniteur_show
            if (preg_match('#^/moniteur/(?P<idmoniteur>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_moniteur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_show')), array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::showAction',));
            }
            not_moniteur_show:

            // moniteur_new
            if ('/moniteur/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_moniteur_new;
                }

                return array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::newAction',  '_route' => 'moniteur_new',);
            }
            not_moniteur_new:

            // moniteur_edit
            if (preg_match('#^/moniteur/(?P<idmoniteur>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_moniteur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_edit')), array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::editAction',));
            }
            not_moniteur_edit:

            // moniteur_delete
            if (preg_match('#^/moniteur/(?P<idmoniteur>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_moniteur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_delete')), array (  '_controller' => 'MoniteurBundle\\Controller\\MoniteurController::deleteAction',));
            }
            not_moniteur_delete:

        }

        // moniteur_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'moniteur_homepage');
            }

            return array (  '_controller' => 'MoniteurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'moniteur_homepage',);
        }

        // examen_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'examen_homepage');
            }

            return array (  '_controller' => 'ExamenBundle\\Controller\\DefaultController::indexAction',  '_route' => 'examen_homepage',);
        }

        // detail_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'detail_homepage');
            }

            return array (  '_controller' => 'DetailBundle\\Controller\\DefaultController::indexAction',  '_route' => 'detail_homepage',);
        }

        if (0 === strpos($pathinfo, '/cours')) {
            // cours_index
            if ('/cours' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cours_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'cours_index');
                }

                return array (  '_controller' => 'CoursBundle\\Controller\\CoursController::indexAction',  '_route' => 'cours_index',);
            }
            not_cours_index:

            // cours_show
            if (preg_match('#^/cours/(?P<idcours>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cours_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_show')), array (  '_controller' => 'CoursBundle\\Controller\\CoursController::showAction',));
            }
            not_cours_show:

            // cours_new
            if ('/cours/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cours_new;
                }

                return array (  '_controller' => 'CoursBundle\\Controller\\CoursController::newAction',  '_route' => 'cours_new',);
            }
            not_cours_new:

            // cours_edit
            if (preg_match('#^/cours/(?P<idcours>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cours_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_edit')), array (  '_controller' => 'CoursBundle\\Controller\\CoursController::editAction',));
            }
            not_cours_edit:

            // cours_delete
            if (preg_match('#^/cours/(?P<idcours>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_cours_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_delete')), array (  '_controller' => 'CoursBundle\\Controller\\CoursController::deleteAction',));
            }
            not_cours_delete:

        }

        elseif (0 === strpos($pathinfo, '/chapitre')) {
            // chapitre_index
            if ('/chapitre' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_chapitre_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'chapitre_index');
                }

                return array (  '_controller' => 'ChapitreBundle\\Controller\\ChapitreController::indexAction',  '_route' => 'chapitre_index',);
            }
            not_chapitre_index:

            // chapitre_show
            if (preg_match('#^/chapitre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_chapitre_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapitre_show')), array (  '_controller' => 'ChapitreBundle\\Controller\\ChapitreController::showAction',));
            }
            not_chapitre_show:

            // chapitre_new
            if ('/chapitre/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_chapitre_new;
                }

                return array (  '_controller' => 'ChapitreBundle\\Controller\\ChapitreController::newAction',  '_route' => 'chapitre_new',);
            }
            not_chapitre_new:

            // chapitre_edit
            if (preg_match('#^/chapitre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_chapitre_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapitre_edit')), array (  '_controller' => 'ChapitreBundle\\Controller\\ChapitreController::editAction',));
            }
            not_chapitre_edit:

            // chapitre_delete
            if (preg_match('#^/chapitre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_chapitre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapitre_delete')), array (  '_controller' => 'ChapitreBundle\\Controller\\ChapitreController::deleteAction',));
            }
            not_chapitre_delete:

        }

        // cours_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'cours_homepage');
            }

            return array (  '_controller' => 'CoursBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cours_homepage',);
        }

        // chapitre_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'chapitre_homepage');
            }

            return array (  '_controller' => 'ChapitreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'chapitre_homepage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
