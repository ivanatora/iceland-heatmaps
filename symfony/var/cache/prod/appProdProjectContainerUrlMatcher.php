<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_heatmap_index
        if ('/heatmap' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HeatmapController::index',  '_route' => 'app_heatmap_index',);
        }

        // app_test_number
        if ('/test/number' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::numberAction',  '_route' => 'app_test_number',);
        }

        // app_test_brei
        if ('/brei' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::brei',  '_route' => 'app_test_brei',);
        }

        if (0 === strpos($pathinfo, '/form')) {
            // app_test_form
            if ('/form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::form',  '_route' => 'app_test_form',);
            }

            // app_test_form_1
            if (preg_match('#^/form(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_test_form_1')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\TestController::form',));
            }

            // app_test_formdelete
            if (0 === strpos($pathinfo, '/form/delete') && preg_match('#^/form/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_test_formdelete')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\TestController::formDelete',));
            }

        }

        // article_view
        if (0 === strpos($pathinfo, '/article/view') && preg_match('#^/article/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'AppBundle\\Controller\\TestController::test',));
        }

        // app_test_create
        if ('/product/create' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::createAction',  '_route' => 'app_test_create',);
        }

        // app_test_edit
        if ('/product/edit' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::editAction',  '_route' => 'app_test_edit',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
