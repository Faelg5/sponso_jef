<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/performance')) {
            // jef_performance_home
            if (preg_match('#^/performance(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jef_performance_home')), array (  '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::indexAction',  'page' => 1,));
            }

            // jef_performance_view
            if (0 === strpos($pathinfo, '/performance/document') && preg_match('#^/performance/document/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jef_performance_view')), array (  '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::viewAction',));
            }

            // jef_performance_add
            if (0 === strpos($pathinfo, '/performance/add') && preg_match('#^/performance/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jef_performance_add')), array (  '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::addAction',));
            }

            // jef_performance_edit
            if (0 === strpos($pathinfo, '/performance/edit') && preg_match('#^/performance/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jef_performance_edit')), array (  '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::editAction',));
            }

            // jef_performance_delete
            if (0 === strpos($pathinfo, '/performance/delete') && preg_match('#^/performance/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jef_performance_delete')), array (  '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
