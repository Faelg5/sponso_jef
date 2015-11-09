<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'jef_performance_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/performance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jef_performance_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/performance/document',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jef_performance_add' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/performance/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jef_performance_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/performance/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jef_performance_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JEF\\PerformanceBundle\\Controller\\PerformanceController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/performance/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
