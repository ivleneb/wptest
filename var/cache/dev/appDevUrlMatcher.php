<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        if (0 === strpos($pathinfo, '/m')) {
            // mailing
            if (0 === strpos($pathinfo, '/mailing') && preg_match('#^/mailing/(?P<codeSchedule>[^/]++)/(?P<schedule>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mailing')), array (  '_controller' => 'AppBundle\\Controller\\MailingController::ScheduledEmailAction',));
            }

            if (0 === strpos($pathinfo, '/monitor')) {
                // persistData
                if (preg_match('#^/monitor(?:/(?P<encoded_stream>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persistData')), array (  'encoded_stream' => NULL,  '_controller' => 'AppBundle\\Controller\\MonitorController::PersistDataAction',));
                }

                // generateCredentials
                if (0 === strpos($pathinfo, '/monitor/validate') && preg_match('#^/monitor/validate/(?P<encoded_credentials>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateCredentials')), array (  '_controller' => 'AppBundle\\Controller\\MonitorController::ValidateCredentialsAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/v2/dashboard')) {
            // dashboard2
            if ($pathinfo === '/v2/dashboard') {
                return array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::dashboardAction',  '_route' => 'dashboard2',);
            }

            // processBlock2
            if (0 === strpos($pathinfo, '/v2/dashboard/process') && preg_match('#^/v2/dashboard/process/(?P<idProcess>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'processBlock2')), array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::processBlockAction',));
            }

            // processBlockUpdate2
            if (0 === strpos($pathinfo, '/v2/dashboard/update/process') && preg_match('#^/v2/dashboard/update/process/(?P<idProcess>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'processBlockUpdate2')), array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::processBlockUpdateAction',));
            }

            if (0 === strpos($pathinfo, '/v2/dashboard/station')) {
                // sensorData2
                if (preg_match('#^/v2/dashboard/station/(?P<idStation>[^/]++)/sensor/(?P<idSensor>[^/]++)/long/(?P<long>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensorData2')), array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::sensorDataAction',));
                }

                // sensorDataUpdate2
                if (preg_match('#^/v2/dashboard/station/(?P<idStation>[^/]++)/sensor/(?P<idSensor>[^/]++)/lastid/(?P<lastId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensorDataUpdate2')), array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::sensorDataUpdateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/v2/dashboard/alerts')) {
                // alertData2
                if (rtrim($pathinfo, '/') === '/v2/dashboard/alerts') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'alertData2');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::AlertAction',  '_route' => 'alertData2',);
                }

                // alertDataUpdate2
                if ($pathinfo === '/v2/dashboard/alerts/update') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Platform2Controller::AlertUpdateAction',  '_route' => 'alertDataUpdate2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // dashboard
            if ($pathinfo === '/dashboard') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlatformController::dashboardAction',  '_route' => 'dashboard',);
            }

            // processBlock
            if (0 === strpos($pathinfo, '/dashboard/process') && preg_match('#^/dashboard/process/(?P<idProcess>[^/]++)/states(?:/(?P<critical>[^/]++)(?:/(?P<alert>[^/]++)(?:/(?P<stable>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'processBlock')), array (  'critical' => 1,  'alert' => 1,  'stable' => 1,  '_controller' => 'AppBundle\\Controller\\PlatformController::processBlockAction',));
            }

            // processBlockUpdate
            if (0 === strpos($pathinfo, '/dashboard/update/process') && preg_match('#^/dashboard/update/process/(?P<idProcess>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'processBlockUpdate')), array (  '_controller' => 'AppBundle\\Controller\\PlatformController::processBlockUpdateAction',));
            }

            // stationBlock
            if (0 === strpos($pathinfo, '/dashboard/station') && preg_match('#^/dashboard/station/(?P<idStation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stationBlock')), array (  '_controller' => 'AppBundle\\Controller\\PlatformController::stationBlockAction',));
            }

            // stationBlockUpdate
            if (0 === strpos($pathinfo, '/dashboard/update/station') && preg_match('#^/dashboard/update/station/(?P<idStation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stationBlockUpdate')), array (  '_controller' => 'AppBundle\\Controller\\PlatformController::stationBlockUpdateAction',));
            }

            // sensorData
            if (0 === strpos($pathinfo, '/dashboard/station') && preg_match('#^/dashboard/station/(?P<idStation>[^/]++)/sensor/(?P<idSensor>[^/]++)/long/(?P<long>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensorData')), array (  '_controller' => 'AppBundle\\Controller\\PlatformController::sensorDataAction',));
            }

            // sensorDataUpdate
            if (0 === strpos($pathinfo, '/dashboard/update/station') && preg_match('#^/dashboard/update/station/(?P<idStation>[^/]++)/sensor/(?P<idSensor>[^/]++)/lastid/(?P<lastId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sensorDataUpdate')), array (  '_controller' => 'AppBundle\\Controller\\PlatformController::sensorDataUpdateAction',));
            }

            if (0 === strpos($pathinfo, '/dashboard/alerts')) {
                // alertData
                if (rtrim($pathinfo, '/') === '/dashboard/alerts') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'alertData');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PlatformController::AlertAction',  '_route' => 'alertData',);
                }

                // alertDataUpdate
                if ($pathinfo === '/dashboard/alerts/update') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlatformController::AlertUpdateAction',  '_route' => 'alertDataUpdate',);
                }

            }

        }

        // app_security_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_security_login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'app_security_login',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // alert
        if ($pathinfo === '/alertas') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewController::indexAction',  '_route' => 'alert',);
        }

        // scada
        if ($pathinfo === '/scada') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewController::indexAction',  '_route' => 'scada',);
        }

        // app_view_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewController::aboutAction',  '_route' => 'app_view_about',);
        }

        // app_view_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewController::contactAction',  '_route' => 'app_view_contact',);
        }

        // app_view_freestations
        if ($pathinfo === '/freestations') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewController::freestationsAction',  '_route' => 'app_view_freestations',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
