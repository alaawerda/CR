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

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'UserBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ('/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        if (0 === strpos($pathinfo, '/typepermis')) {
            // typepermis_index
            if ('/typepermis' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_typepermis_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'typepermis_index');
                }

                return array (  '_controller' => 'TypepermisBundle\\Controller\\TypepermisController::indexAction',  '_route' => 'typepermis_index',);
            }
            not_typepermis_index:

            // typepermis_show
            if (preg_match('#^/typepermis/(?P<idtype>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_typepermis_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepermis_show')), array (  '_controller' => 'TypepermisBundle\\Controller\\TypepermisController::showAction',));
            }
            not_typepermis_show:

            // typepermis_new
            if ('/typepermis/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_typepermis_new;
                }

                return array (  '_controller' => 'TypepermisBundle\\Controller\\TypepermisController::newAction',  '_route' => 'typepermis_new',);
            }
            not_typepermis_new:

            // typepermis_edit
            if (preg_match('#^/typepermis/(?P<idtype>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_typepermis_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepermis_edit')), array (  '_controller' => 'TypepermisBundle\\Controller\\TypepermisController::editAction',));
            }
            not_typepermis_edit:

            // typepermis_delete
            if (preg_match('#^/typepermis/(?P<idtype>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_typepermis_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepermis_delete')), array (  '_controller' => 'TypepermisBundle\\Controller\\TypepermisController::deleteAction',));
            }
            not_typepermis_delete:

        }

        elseif (0 === strpos($pathinfo, '/tests')) {
            // tests_index
            if ('/tests' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tests_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'tests_index');
                }

                return array (  '_controller' => 'TestBundle\\Controller\\TestsController::indexAction',  '_route' => 'tests_index',);
            }
            not_tests_index:

            // tests_show
            if (preg_match('#^/tests/(?P<idtest>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tests_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_show')), array (  '_controller' => 'TestBundle\\Controller\\TestsController::showAction',));
            }
            not_tests_show:

            // tests_new
            if ('/tests/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tests_new;
                }

                return array (  '_controller' => 'TestBundle\\Controller\\TestsController::newAction',  '_route' => 'tests_new',);
            }
            not_tests_new:

            // tests_edit
            if (preg_match('#^/tests/(?P<idtest>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tests_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_edit')), array (  '_controller' => 'TestBundle\\Controller\\TestsController::editAction',));
            }
            not_tests_edit:

            // tests_delete
            if (preg_match('#^/tests/(?P<idtest>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_tests_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_delete')), array (  '_controller' => 'TestBundle\\Controller\\TestsController::deleteAction',));
            }
            not_tests_delete:

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

        if (0 === strpos($pathinfo, '/reponse')) {
            // reponse_index
            if ('/reponse' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reponse_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'reponse_index');
                }

                return array (  '_controller' => 'ReponseBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse_index',);
            }
            not_reponse_index:

            // reponse_show
            if (preg_match('#^/reponse/(?P<idreponse>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reponse_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_show')), array (  '_controller' => 'ReponseBundle\\Controller\\ReponseController::showAction',));
            }
            not_reponse_show:

            // reponse_new
            if ('/reponse/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reponse_new;
                }

                return array (  '_controller' => 'ReponseBundle\\Controller\\ReponseController::newAction',  '_route' => 'reponse_new',);
            }
            not_reponse_new:

            // reponse_edit
            if (preg_match('#^/reponse/(?P<idreponse>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reponse_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_edit')), array (  '_controller' => 'ReponseBundle\\Controller\\ReponseController::editAction',));
            }
            not_reponse_edit:

            // reponse_delete
            if (preg_match('#^/reponse/(?P<idreponse>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_reponse_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_delete')), array (  '_controller' => 'ReponseBundle\\Controller\\ReponseController::deleteAction',));
            }
            not_reponse_delete:

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

        if (0 === strpos($pathinfo, '/question')) {
            // question_index
            if ('/question' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_question_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'question_index');
                }

                return array (  '_controller' => 'QuestionBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question_index',);
            }
            not_question_index:

            // question_show
            if (preg_match('#^/question/(?P<idquestion>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_question_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'QuestionBundle\\Controller\\QuestionController::showAction',));
            }
            not_question_show:

            // question_new
            if ('/question/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_question_new;
                }

                return array (  '_controller' => 'QuestionBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
            }
            not_question_new:

            // question_edit
            if (preg_match('#^/question/(?P<idquestion>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_question_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'QuestionBundle\\Controller\\QuestionController::editAction',));
            }
            not_question_edit:

            // question_delete
            if (preg_match('#^/question/(?P<idquestion>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_question_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'QuestionBundle\\Controller\\QuestionController::deleteAction',));
            }
            not_question_delete:

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
