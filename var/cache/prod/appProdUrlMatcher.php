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

        // app_wapo_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_wapo_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\wapoController::indexAction',  '_route' => 'app_wapo_index',);
        }

        // app_wapo_index_1
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\wapoController::indexAction',  '_route' => 'app_wapo_index_1',);
        }

        // app_wapo_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\wapoController::aboutAction',  '_route' => 'app_wapo_about',);
        }

        // app_wapo_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\wapoController::contactAction',  '_route' => 'app_wapo_contact',);
        }

        // app_wapo_freestations
        if ($pathinfo === '/freestations') {
            return array (  '_controller' => 'AppBundle\\Controller\\wapoController::freestationsAction',  '_route' => 'app_wapo_freestations',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
