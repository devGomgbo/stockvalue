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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache/avatar_')) {
            // _imagine_avatar_med
            if (0 === strpos($pathinfo, '/media/cache/avatar_med') && preg_match('#^/media/cache/avatar_med/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_avatar_med;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_med')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_med',));
            }
            not__imagine_avatar_med:

            // _imagine_avatar_xsmall
            if (0 === strpos($pathinfo, '/media/cache/avatar_xsmall') && preg_match('#^/media/cache/avatar_xsmall/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_avatar_xsmall;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_xsmall')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_xsmall',));
            }
            not__imagine_avatar_xsmall:

        }

        // oro_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_default');
            }

            return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',  '_route' => 'oro_default',);
        }

        if (0 === strpos($pathinfo, '/ui')) {
            // oro_ui_index
            if ($pathinfo === '/ui') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:index.html.twig',  '_route' => 'oro_ui_index',);
            }

            if (0 === strpos($pathinfo, '/ui/1column')) {
                // oro_ui_1column
                if ($pathinfo === '/ui/1column') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumn.html.twig',  '_route' => 'oro_ui_1column',);
                }

                if (0 === strpos($pathinfo, '/ui/1column-')) {
                    // oro_ui_1column_menu
                    if ($pathinfo === '/ui/1column-menu') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnMenu.html.twig',  '_route' => 'oro_ui_1column_menu',);
                    }

                    // oro_ui_1column_toolbar
                    if ($pathinfo === '/ui/1column-toolbar') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnWithToolbar.html.twig',  '_route' => 'oro_ui_1column_toolbar',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ui/2columns-')) {
                // oro_ui_2columns_left
                if ($pathinfo === '/ui/2columns-left') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnLeft.html.twig',  '_route' => 'oro_ui_2columns_left',);
                }

                // oro_ui_2columns_right
                if ($pathinfo === '/ui/2columns-right') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnRight.html.twig',  '_route' => 'oro_ui_2columns_right',);
                }

            }

            // oro_ui_3columns
            if ($pathinfo === '/ui/3columns') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:threeColumn.html.twig',  '_route' => 'oro_ui_3columns',);
            }

            // oro_ui_forgot_password
            if ($pathinfo === '/ui/forgot-password') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:forgotPassword.html.twig',  '_route' => 'oro_ui_forgot_password',);
            }

            // oro_ui_login
            if ($pathinfo === '/ui/login') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:loginPage.html.twig',  '_route' => 'oro_ui_login',);
            }

            // oro_ui_registration
            if ($pathinfo === '/ui/registration') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:registrationPage.html.twig',  '_route' => 'oro_ui_registration',);
            }

            // oro_ui_404
            if ($pathinfo === '/ui/404') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page404.html.twig',  '_route' => 'oro_ui_404',);
            }

            // oro_ui_503
            if ($pathinfo === '/ui/503') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page503.html.twig',  '_route' => 'oro_ui_503',);
            }

            // oro_ui_form_elements
            if ($pathinfo === '/ui/form-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formElements.html.twig',  '_route' => 'oro_ui_form_elements',);
            }

            // oro_ui_messages
            if ($pathinfo === '/ui/messages') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:systemMessages.html.twig',  '_route' => 'oro_ui_messages',);
            }

            // oro_ui_buttons
            if ($pathinfo === '/ui/buttons') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:buttonsPage.html.twig',  '_route' => 'oro_ui_buttons',);
            }

            // oro_ui_tables
            if ($pathinfo === '/ui/tables') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:tablesPage.html.twig',  '_route' => 'oro_ui_tables',);
            }

            // oro_ui_general_elements
            if ($pathinfo === '/ui/general-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:generalElements.html.twig',  '_route' => 'oro_ui_general_elements',);
            }

            // oro_ui_dialog_styled
            if ($pathinfo === '/ui/dialog-styled') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:dialogStyledPage.html.twig',  '_route' => 'oro_ui_dialog_styled',);
            }

            if (0 === strpos($pathinfo, '/ui/grid-page')) {
                // oro_ui_grid_page
                if ($pathinfo === '/ui/grid-page') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPage.html.twig',  '_route' => 'oro_ui_grid_page',);
                }

                // oro_ui_grid_without_bar_page
                if ($pathinfo === '/ui/grid-page-withoutabr') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPageWithoutBar.html.twig',  '_route' => 'oro_ui_grid_without_bar_page',);
                }

            }

            // oro_ui_record_edit
            if ($pathinfo === '/ui/record-edit') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:RecordEdit.html.twig',  '_route' => 'oro_ui_record_edit',);
            }

            // oro_ui_title_bar
            if ($pathinfo === '/ui/entity-title-bar') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:EntityTitleBar.html.twig',  '_route' => 'oro_ui_title_bar',);
            }

            // oro_ui_form_horizontal
            if ($pathinfo === '/ui/form-horizontal') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formHorizontal.html.twig',  '_route' => 'oro_ui_form_horizontal',);
            }

        }

        if (0 === strpos($pathinfo, '/organization')) {
            if (0 === strpos($pathinfo, '/organization/business_unit')) {
                // oro_business_unit_create
                if ($pathinfo === '/organization/business_unit/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction',  '_route' => 'oro_business_unit_create',);
                }

                // oro_business_unit_view
                if (0 === strpos($pathinfo, '/organization/business_unit/view') && preg_match('#^/organization/business_unit/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_view')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction',));
                }

                // oro_business_unit_search
                if (0 === strpos($pathinfo, '/organization/business_unit/search') && preg_match('#^/organization/business_unit/search/(?P<organizationId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_search')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::searchAction',));
                }

                // oro_business_unit_update
                if (0 === strpos($pathinfo, '/organization/business_unit/update') && preg_match('#^/organization/business_unit/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction',));
                }

                // oro_business_unit_index
                if (preg_match('#^/organization/business_unit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/organization/business_unit/widget')) {
                    // oro_business_unit_widget_info
                    if (0 === strpos($pathinfo, '/organization/business_unit/widget/info') && preg_match('#^/organization/business_unit/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_info')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::infoAction',));
                    }

                    // oro_business_unit_widget_users
                    if (0 === strpos($pathinfo, '/organization/business_unit/widget/users') && preg_match('#^/organization/business_unit/widget/users/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_users')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::usersAction',));
                    }

                }

            }

            // oro_organization_update_current
            if ($pathinfo === '/organization/update_current') {
                return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\OrganizationController::updateCurrentAction',  '_route' => 'oro_organization_update_current',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_businessunits
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunits:

            // oro_api_post_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit:

            // oro_api_put_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_businessunit:

            // oro_api_get_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunit:

            // oro_api_delete_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_businessunit:

            // oro_api_options_businessunits
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_businessunits:

            // oro_api_options_businessunits_auto_488
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_businessunits_auto_488;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits_auto_488')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_businessunits_auto_488:

            // oro_api_post_businessunit_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit_deprecated')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit_deprecated:

        }

        if (0 === strpos($pathinfo, '/security')) {
            // oro_security_access_levels
            if (0 === strpos($pathinfo, '/security/acl-access-levels') && preg_match('#^/security/acl\\-access\\-levels/(?P<oid>\\w+:[\\w\\(\\)]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_access_levels')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
            }

            // oro_security_switch_organization
            if (0 === strpos($pathinfo, '/security/switch-organization') && preg_match('#^/security/switch\\-organization(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_switch_organization')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::switchOrganizationAction',));
            }

        }

        // oro_attachment_api_rest_file_get
        if (0 === strpos($pathinfo, '/files') && preg_match('#^/files/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_attachment_api_rest_file_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_api_rest_file_get')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction',));
        }
        not_oro_attachment_api_rest_file_get:

        if (0 === strpos($pathinfo, '/attachment')) {
            // oro_attachment_widget_attachments
            if (0 === strpos($pathinfo, '/attachment/view/widget') && preg_match('#^/attachment/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_widget_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::widgetAction',));
            }

            // oro_attachment_create
            if (0 === strpos($pathinfo, '/attachment/create') && preg_match('#^/attachment/create/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_create')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::createAction',));
            }

            // oro_attachment_update
            if (0 === strpos($pathinfo, '/attachment/update') && preg_match('#^/attachment/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_update')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::updateAction',));
            }

            // oro_attachment_file
            if (preg_match('#^/attachment/(?P<codedString>[^/\\.]++)\\.(?P<extension>\\w+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getAttachmentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/attachment/resize')) {
            // oro_resize_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<width>\\d+)/(?P<height>\\d+)/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_resize_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getResizedAttachmentImageAction',));
            }

            // oro_filtered_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<filter>[^/]++)/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_filtered_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getFilteredImageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_attachment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_attachment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_attachment:

            // oro_api_delete_attachment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_attachment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_attachment:

            // oro_api_options_attachments
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_attachments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_attachments:

            // oro_api_options_attachments_auto_489
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachment(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_attachments_auto_489;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments_auto_489')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_attachments_auto_489:

            // oro_api_get_file
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/files/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|binary))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_file;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_file:

            // oro_api_options_files
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/files(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_files;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_files:

            // oro_api_options_files_auto_490
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/file(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_files_auto_490;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files_auto_490')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_files_auto_490:

        }

        if (0 === strpos($pathinfo, '/email')) {
            // oro_email_api_rest_emailtemplate_delete
            if ($pathinfo === '/email/') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_email_api_rest_emailtemplate_delete;
                }

                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_route' => 'oro_email_api_rest_emailtemplate_delete',);
            }
            not_oro_email_api_rest_emailtemplate_delete:

            if (0 === strpos($pathinfo, '/email/emailtemplates')) {
                // oro_email_api_rest_emailtemplate_cget
                if (0 === strpos($pathinfo, '/email/emailtemplates/list') && preg_match('#^/email/emailtemplates/list(?:/(?P<entityName>\\w+)(?:/(?P<includeNonEntity>\\d+)(?:/(?P<includeSystemTemplates>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_api_rest_emailtemplate_cget')), array (  'entityName' => NULL,  'includeNonEntity' => false,  'includeSystemTemplates' => true,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',));
                }
                not_oro_email_api_rest_emailtemplate_cget:

                // oro_email_api_rest_emailtemplate_getvariables
                if ($pathinfo === '/email/emailtemplates/variables') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_getvariables;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction',  '_route' => 'oro_email_api_rest_emailtemplate_getvariables',);
                }
                not_oro_email_api_rest_emailtemplate_getvariables:

                // oro_email_api_rest_emailtemplate_getcompiled
                if (0 === strpos($pathinfo, '/email/emailtemplates/compiled') && preg_match('#^/email/emailtemplates/compiled/(?P<id>\\d+)(?:/(?P<entityId>\\d*))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_getcompiled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_api_rest_emailtemplate_getcompiled')), array (  'entityId' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction',));
                }
                not_oro_email_api_rest_emailtemplate_getcompiled:

            }

            if (0 === strpos($pathinfo, '/email/autoresponserule')) {
                // oro_email_autoresponserule_create
                if (0 === strpos($pathinfo, '/email/autoresponserule/create') && preg_match('#^/email/autoresponserule/create(?:/(?P<mailbox>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_create')), array (  'mailbox' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::createAction',));
                }

                // oro_email_autoresponserule_update
                if (0 === strpos($pathinfo, '/email/autoresponserule/update') && preg_match('#^/email/autoresponserule/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::updateAction',));
                }

            }

            // oro_email_view
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction',));
            }

            // oro_email_last
            if ($pathinfo === '/email/last') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::lastAction',  '_route' => 'oro_email_last',);
            }

            // oro_email_thread_view
            if (0 === strpos($pathinfo, '/email/view/thread') && preg_match('#^/email/view/thread/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewThreadAction',));
            }

            // oro_email_thread_widget
            if (0 === strpos($pathinfo, '/email/widget/thread') && preg_match('#^/email/widget/thread/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_widget')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::threadWidgetAction',));
            }

            if (0 === strpos($pathinfo, '/email/view-')) {
                // oro_email_items_view
                if ($pathinfo === '/email/view-items') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::itemsAction',  '_route' => 'oro_email_items_view',);
                }

                // oro_email_view_group
                if (0 === strpos($pathinfo, '/email/view-group') && preg_match('#^/email/view\\-group/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view_group')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewGroupAction',));
                }

            }

            // oro_email_activity_view
            if (0 === strpos($pathinfo, '/email/activity/view') && preg_match('#^/email/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_activity_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::activityAction',));
            }

            // oro_email_email_create
            if ($pathinfo === '/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction',  '_route' => 'oro_email_email_create',);
            }

            if (0 === strpos($pathinfo, '/email/reply')) {
                // oro_email_email_reply
                if (preg_match('#^/email/reply/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAction',));
                }

                // oro_email_email_reply_all
                if (0 === strpos($pathinfo, '/email/replyall') && preg_match('#^/email/replyall/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply_all')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAllAction',));
                }

            }

            // oro_email_email_forward
            if (0 === strpos($pathinfo, '/email/forward') && preg_match('#^/email/forward/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_forward')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::forwardAction',));
            }

            // oro_email_body
            if (0 === strpos($pathinfo, '/email/body') && preg_match('#^/email/body/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction',));
            }

            if (0 === strpos($pathinfo, '/email/attachment')) {
                // oro_email_attachment
                if (preg_match('#^/email/attachment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction',));
                }

                // oro_email_attachment_link
                if (preg_match('#^/email/attachment/(?P<id>\\d+)/link$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment_link')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::linkAction',));
                }

            }

            // oro_email_widget_emails
            if ($pathinfo === '/email/widget') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::emailsAction',  '_route' => 'oro_email_widget_emails',);
            }

            // oro_email_widget_base_emails
            if ($pathinfo === '/email/base-widget') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::baseEmailsAction',  '_route' => 'oro_email_widget_base_emails',);
            }

            if (0 === strpos($pathinfo, '/email/user-')) {
                // oro_email_user_emails
                if ($pathinfo === '/email/user-emails') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsAction',  '_route' => 'oro_email_user_emails',);
                }

                // oro_email_user_sync_emails
                if ($pathinfo === '/email/user-sync-emails') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsSyncAction',  '_route' => 'oro_email_user_sync_emails',);
                }

            }

            if (0 === strpos($pathinfo, '/email/context')) {
                // oro_email_context
                if (preg_match('#^/email/context/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_context')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::contextAction',));
                }

                // oro_email_context_grid
                if (0 === strpos($pathinfo, '/email/context/grid') && preg_match('#^/email/context/grid/(?P<activityId>[^/]++)(?:/(?P<entityClass>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_context_grid')), array (  'entityClass' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::contextGridAction',));
                }

            }

            // oro_email_toggle_seen
            if (0 === strpos($pathinfo, '/email/toggle-seen') && preg_match('#^/email/toggle\\-seen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_toggle_seen')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::toggleSeenAction',));
            }

            if (0 === strpos($pathinfo, '/email/mark')) {
                // oro_email_mark_seen
                if (0 === strpos($pathinfo, '/email/mark-seen') && preg_match('#^/email/mark\\-seen/(?P<id>\\d+)/(?P<status>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_seen')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markSeenAction',));
                }

                // oro_email_mark_all_as_seen
                if ($pathinfo === '/email/mark_all_as_seen') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markAllEmailsAsSeenAction',  '_route' => 'oro_email_mark_all_as_seen',);
                }

            }

            // oro_email_mark_massaction
            if (preg_match('#^/email/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_massaction')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markMassAction',));
            }

            // oro_email_autocomplete_recipient
            if ($pathinfo === '/email/autocomplete-recipient') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::autocompleteRecipientAction',  '_route' => 'oro_email_autocomplete_recipient',);
            }

            if (0 === strpos($pathinfo, '/email/emailtemplate')) {
                // oro_email_emailtemplate_index
                if (preg_match('#^/email/emailtemplate(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction',));
                }

                // oro_email_emailtemplate_update
                if (0 === strpos($pathinfo, '/email/emailtemplate/update') && preg_match('#^/email/emailtemplate/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_update')), array (  'id' => 0,  'isClone' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/email/emailtemplate/c')) {
                    // oro_email_emailtemplate_create
                    if ($pathinfo === '/email/emailtemplate/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction',  '_route' => 'oro_email_emailtemplate_create',);
                    }

                    // oro_email_emailtemplate_clone
                    if (0 === strpos($pathinfo, '/email/emailtemplate/clone') && preg_match('#^/email/emailtemplate/clone(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_clone')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction',));
                    }

                }

                // oro_email_emailtemplate_preview
                if (0 === strpos($pathinfo, '/email/emailtemplate/preview') && preg_match('#^/email/emailtemplate/preview(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_preview')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction',));
                }

            }

        }

        // oro_email_dashboard_recent_emails
        if (0 === strpos($pathinfo, '/dashboard/recent_emails') && preg_match('#^/dashboard/recent_emails/(?P<widget>[\\w-]+)(?:/(?P<activeTab>inbox|sent|new)(?:/(?P<contentType>full|tab))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_dashboard_recent_emails')), array (  'activeTab' => 'inbox',  'contentType' => 'full',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Dashboard\\DashboardController::recentEmailsAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emails:

            // oro_api_get_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email:

            // oro_api_put_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_email:

            // oro_api_post_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_email:

            // oro_api_get_email_context
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/]++)/context(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email_context;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_context')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getContextAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email_context:

            // oro_api_options_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emails:

            // oro_api_options_emails_auto_491
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emails_auto_491;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails_auto_491')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emails_auto_491:

            // oro_api_delete_autoresponserule
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserules/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_autoresponserule;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_autoresponserule')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_autoresponserule:

            // oro_api_options_autoresponserules
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserules(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_autoresponserules;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_autoresponserules:

            // oro_api_options_autoresponserules_auto_492
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserule(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_autoresponserules_auto_492;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules_auto_492')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_autoresponserules_auto_492:

            // oro_api_get_emailorigins
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailorigins;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailorigins:

            // oro_api_get_emailorigin
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailorigin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigin')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailorigin:

            // oro_api_options_emailorigins
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailorigins;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailorigins:

            // oro_api_options_emailorigins_auto_493
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigin(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailorigins_auto_493;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins_auto_493')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailorigins_auto_493:

            // oro_api_delete_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailtemplate:

            // oro_api_get_emailtemplates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/list(?:/(?P<entityName>\\w+)(?:/(?P<includeNonEntity>\\d+)(?:/(?P<includeSystemTemplates>\\d+)(?:\\.(?P<_format>json))?)?)?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',  'entityName' => NULL,  'includeNonEntity' => false,  'includeSystemTemplates' => true,  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplates:

            // oro_api_get_emailtemplate_variables
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/variables(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_variables;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_variables')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_variables:

            // oro_api_get_emailtemplate_compiled
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/compiled/(?P<id>\\d+)/(?P<entityId>\\d*)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_compiled;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_compiled')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_compiled:

            // oro_api_options_emailtemplates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailtemplates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailtemplates:

            // oro_api_options_emailtemplates_auto_494
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplate(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailtemplates_auto_494;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates_auto_494')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailtemplates_auto_494:

            // oro_api_get_email_activity_relations_by_filters
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email_activity_relations_by_filters;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_activity_relations_by_filters')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::cgetByFiltersAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email_activity_relations_by_filters:

            // oro_api_options_email_activity_relations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email/activity/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_email_activity_relations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_email_activity_relations:

            // oro_api_options_email_search_relations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email/search/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_email_search_relations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_email_search_relations:

        }

        if (0 === strpos($pathinfo, '/config/mailbox')) {
            // oro_email_mailbox_update
            if (0 === strpos($pathinfo, '/config/mailbox/update') && preg_match('#^/config/mailbox/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::updateAction',));
            }

            // oro_email_mailbox_create
            if (0 === strpos($pathinfo, '/config/mailbox/create') && preg_match('#^/config/mailbox/create(?:/(?P<organization_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_create')), array (  'organization_id' => NULL,  'organization' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::createAction',));
            }

            // oro_email_mailbox_delete
            if (0 === strpos($pathinfo, '/config/mailbox/delete') && preg_match('#^/config/mailbox/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_email_mailbox_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_delete')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::deleteAction',));
            }
            not_oro_email_mailbox_delete:

            // oro_email_mailbox_users_search
            if (0 === strpos($pathinfo, '/config/mailbox/users/search') && preg_match('#^/config/mailbox/users/search/(?P<organizationId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_users_search')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::searchUsersAction',));
            }

        }

        // oro_user_google_login
        if ($pathinfo === '/login/check-google') {
            return array('_route' => 'oro_user_google_login');
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_users
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_users:

            // oro_api_get_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user:

            // oro_api_post_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_user:

            // oro_api_put_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_user:

            // oro_api_delete_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_user:

            // oro_api_get_user_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_roles:

            // oro_api_get_user_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_groups:

            // oro_api_get_user_filter
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/filter(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_filter')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_filter:

            // oro_api_options_users
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_users:

            // oro_api_options_users_auto_495
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_users_auto_495;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users_auto_495')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_users_auto_495:

            // oro_api_get_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_roles:

            // oro_api_get_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role:

            // oro_api_post_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_role:

            // oro_api_put_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_role:

            // oro_api_delete_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_role:

            // oro_api_get_role_byname
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<name>[^/]++)/byname(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role_byname;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role_byname')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role_byname:

            // oro_api_options_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_roles:

            // oro_api_options_roles_auto_496
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_roles_auto_496;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles_auto_496')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_roles_auto_496:

            // oro_api_get_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_groups:

            // oro_api_get_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_group:

            // oro_api_post_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_group:

            // oro_api_put_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_group:

            // oro_api_delete_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_group:

            // oro_api_options_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_groups:

            // oro_api_options_groups_auto_497
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_groups_auto_497;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups_auto_497')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_groups_auto_497:

            // oro_api_get_user_permissions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/permissions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_permissions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_permissions:

            // oro_api_options_user_permissions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/permissions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_user_permissions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_user_permissions:

            // oro_api_options_user_permissions_auto_498
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/permission(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_user_permissions_auto_498;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions_auto_498')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_user_permissions_auto_498:

            // oro_api_post_role_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_role_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_role_deprecated:

            // oro_api_post_user_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_user_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_user_deprecated:

            // oro_api_post_group_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_group_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_group_deprecated:

        }

        // oro_sso_google_login
        if ($pathinfo === '/login/check-google') {
            return array('_route' => 'oro_sso_google_login');
        }

        // oro_entity_api_rest_entityfield_getfields
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_entity_api_rest_entityfield_getfields;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_entity_api_rest_entityfield_getfields');
            }

            return array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_route' => 'oro_entity_api_rest_entityfield_getfields',);
        }
        not_oro_entity_api_rest_entityfield_getfields:

        if (0 === strpos($pathinfo, '/dictionary')) {
            // oro_dictionary_search
            if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/search$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_search')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::searchAction',));
            }

            // oro_dictionary_value
            if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/values$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_value')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::valuesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // oro_entity_index
            if (preg_match('#^/entity/(?P<entityName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_index')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction',));
            }

            // oro_entity_detailed
            if (0 === strpos($pathinfo, '/entity/detailed') && preg_match('#^/entity/detailed/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_detailed')), array (  'id' => 0,  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction',));
            }

            // oro_entity_relation
            if (0 === strpos($pathinfo, '/entity/relation') && preg_match('#^/entity/relation/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_relation')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction',));
            }

            // oro_entity_view
            if (0 === strpos($pathinfo, '/entity/view') && preg_match('#^/entity/view/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_view')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction',));
            }

            // oro_entity_update
            if (0 === strpos($pathinfo, '/entity/update') && preg_match('#^/entity/update/(?P<entityName>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction',));
            }

            // oro_entity_delete
            if (0 === strpos($pathinfo, '/entity/delete') && preg_match('#^/entity/delete/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_delete')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_fields_entity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_fields_entity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_fields_entity:

            // oro_api_get_entities
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entities')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entities:

            // oro_api_get_entity_fields
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/(?P<entityName>((\\w+)_)+(\\w+))/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_fields:

            // oro_api_get_entity_aliases
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/aliases(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_aliases;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_aliases')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityAliasController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_aliases:

            // oro_api_get_addresstypes_auto_499
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/Oro_Bundle_AddressBundle_Entity_AddressType(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstypes_auto_499;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes_auto_499')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstypes_auto_499:

            // oro_api_get_addresstypes
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstypes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstypes:

            // oro_api_get_countries_auto_500
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/Oro_Bundle_AddressBundle_Entity_Country(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_countries_auto_500;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries_auto_500')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_countries_auto_500:

            // oro_api_get_countries
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_countries;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_countries:

            // oro_api_get_dictionary_values_auto_501
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/regions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_501;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_501')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'regions',));
            }
            not_oro_api_get_dictionary_values_auto_501:

            // oro_api_get_dictionary_values
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/(?P<dictionary>regions|Oro_Bundle_AddressBundle_Entity_Region)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_dictionary_values:

            // oro_api_options_dictionary_values
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dictionary/values(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_dictionary_values;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_dictionary_values:

        }

        if (0 === strpos($pathinfo, '/entity')) {
            if (0 === strpos($pathinfo, '/entity/config')) {
                if (0 === strpos($pathinfo, '/entity/config/audit')) {
                    // oro_entityconfig_audit
                    if (preg_match('#^/entity/config/audit(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction',));
                    }

                    // oro_entityconfig_audit_field
                    if (0 === strpos($pathinfo, '/entity/config/audit_field') && preg_match('#^/entity/config/audit_field(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit_field')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction',));
                    }

                }

                // oro_entityconfig_index
                if (rtrim($pathinfo, '/') === '/entity/config') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_entityconfig_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction',  '_route' => 'oro_entityconfig_index',);
                }

                // oro_entityconfig_update
                if (0 === strpos($pathinfo, '/entity/config/update') && preg_match('#^/entity/config/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction',));
                }

                // oro_entityconfig_view
                if (0 === strpos($pathinfo, '/entity/config/view') && preg_match('#^/entity/config/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/entity/config/field')) {
                    // oro_entityconfig_fields
                    if (0 === strpos($pathinfo, '/entity/config/fields') && preg_match('#^/entity/config/fields(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_fields')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction',));
                    }

                    // oro_entityconfig_field_update
                    if (0 === strpos($pathinfo, '/entity/config/field/update') && preg_match('#^/entity/config/field/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction',));
                    }

                    // oro_entityconfig_field_search
                    if (0 === strpos($pathinfo, '/entity/config/field/search') && preg_match('#^/entity/config/field/search(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/config/widget')) {
                    // oro_entityconfig_widget_info
                    if (0 === strpos($pathinfo, '/entity/config/widget/info') && preg_match('#^/entity/config/widget/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_info')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::infoAction',));
                    }

                    // oro_entityconfig_widget_unique_keys
                    if (0 === strpos($pathinfo, '/entity/config/widget/unique_keys') && preg_match('#^/entity/config/widget/unique_keys/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_unique_keys')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::uniqueKeysAction',));
                    }

                    // oro_entityconfig_widget_entity_fields
                    if (0 === strpos($pathinfo, '/entity/config/widget/entity_fields') && preg_match('#^/entity/config/widget/entity_fields/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::entityFieldsAction',));
                    }

                }

            }

            // oro_entityextend_api_rest_enum_get
            if (0 === strpos($pathinfo, '/entity_extends/enum') && preg_match('#^/entity_extends/enum/(?P<entityName>((\\w+)_)+(\\w+))$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_entityextend_api_rest_enum_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_api_rest_enum_get')), array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\Api\\Rest\\EnumController::getAction',));
            }
            not_oro_entityextend_api_rest_enum_get:

            if (0 === strpos($pathinfo, '/entity/extend')) {
                // oro_entityextend_update
                if (0 === strpos($pathinfo, '/entity/extend/update') && preg_match('#^/entity/extend/update(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/entity/extend/entity')) {
                    // oro_entityextend_entity_unique_key
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unique-key') && preg_match('#^/entity/extend/entity/unique\\-key(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unique_key')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction',));
                    }

                    // oro_entityextend_entity_create
                    if ($pathinfo === '/entity/extend/entity/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction',  '_route' => 'oro_entityextend_entity_create',);
                    }

                    // oro_entityextend_entity_remove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/remove') && preg_match('#^/entity/extend/entity/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction',));
                    }

                    // oro_entityextend_entity_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unremove') && preg_match('#^/entity/extend/entity/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/extend/field')) {
                    // oro_entityextend_field_create
                    if (0 === strpos($pathinfo, '/entity/extend/field/create') && preg_match('#^/entity/extend/field/create(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_create')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction',));
                    }

                    // oro_entityextend_field_update
                    if (0 === strpos($pathinfo, '/entity/extend/field/update') && preg_match('#^/entity/extend/field/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction',));
                    }

                    // oro_entityextend_field_remove
                    if (0 === strpos($pathinfo, '/entity/extend/field/remove') && preg_match('#^/entity/extend/field/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction',));
                    }

                    // oro_entityextend_field_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/field/unremove') && preg_match('#^/entity/extend/field/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction',));
                    }

                }

            }

        }

        // oro_api_get_entity_extend_enum
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/entity_extends/enum/(?P<entityName>((\\w+)_)+(\\w+))(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_get_entity_extend_enum;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_extend_enum')), array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\Api\\Rest\\EnumController::getAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_get_entity_extend_enum:

        if (0 === strpos($pathinfo, '/integration')) {
            // oro_integration_index
            if (rtrim($pathinfo, '/') === '/integration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_integration_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::indexAction',  '_route' => 'oro_integration_index',);
            }

            // oro_integration_create
            if ($pathinfo === '/integration/create') {
                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::createAction',  '_route' => 'oro_integration_create',);
            }

            // oro_integration_update
            if (0 === strpos($pathinfo, '/integration/update') && preg_match('#^/integration/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_update')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::updateAction',));
            }

            // oro_integration_schedule
            if (0 === strpos($pathinfo, '/integration/schedule') && preg_match('#^/integration/schedule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_schedule')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::scheduleAction',));
            }

            // oro_integration_toggle
            if (0 === strpos($pathinfo, '/integration/toggle') && preg_match('#^/integration/toggle/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_toggle')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::toggleAction',));
            }

        }

        // oro_api_delete_integration
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/integrations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_oro_api_delete_integration;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_integration')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\Api\\Rest\\IntegrationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_delete_integration:

        if (0 === strpos($pathinfo, '/fichier')) {
            // main_fichier_societe
            if ($pathinfo === '/fichier/societe') {
                return array (  '_controller' => 'Main\\StockValueBundle\\Controller\\DefaultController::societeAction',  '_route' => 'main_fichier_societe',);
            }

            // main_fichier_fonction
            if ($pathinfo === '/fichier/fonction') {
                return array (  '_controller' => 'Main\\StockValueBundle\\Controller\\DefaultController::fonctionAction',  '_route' => 'main_fichier_fonction',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/activities')) {
                // oro_activity_view_activities
                if (0 === strpos($pathinfo, '/activities/view') && preg_match('#^/activities/view/(?P<entity>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_view_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::activitiesAction',));
                }

                // 
                if (0 === strpos($pathinfo, '/activities/targets') && preg_match('#^/activities/targets/(?P<entity>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivitiesAction',));
                }
                not_:

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_activity_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_types:

                // oro_api_get_activity_target_types_auto_502
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_502;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_502')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_get_activity_target_types_auto_502:

                // oro_api_get_activity_target_types_auto_503
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_503;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_503')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_target_types_auto_503:

                // oro_api_get_activity_target_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_types:

                // oro_api_options_activities
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activities:

                // oro_api_options_activities_auto_504
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activities_auto_504;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities_auto_504')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activities_auto_504:

                // oro_api_get_activity_relations_auto_505
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_505;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_505')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_get_activity_relations_auto_505:

                // oro_api_get_activity_relations_auto_506
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_506;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_506')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_relations_auto_506:

                // oro_api_get_activity_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents)/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_relations:

                // oro_api_post_activity_relation_auto_507
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_507;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_507')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_post_activity_relation_auto_507:

                // oro_api_post_activity_relation_auto_508
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_508;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_508')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_post_activity_relation_auto_508:

                // oro_api_post_activity_relation
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents)/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_activity_relation:

                // oro_api_delete_activity_relation_auto_509
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_509;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_509')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_delete_activity_relation_auto_509:

                // oro_api_delete_activity_relation_auto_510
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_510;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_510')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_delete_activity_relation_auto_510:

                // oro_api_delete_activity_relation
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents)/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_activity_relation:

                // oro_api_options_activity_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_relations:

                // oro_api_get_email_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_email_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_email_search_relations:

                // oro_api_get_activity_search_relations_auto_511
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations_auto_511;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_511')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_search_relations_auto_511:

                // oro_api_get_activity_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>calendarevents)/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_search_relations:

                // oro_api_options_activity_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/search/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_search_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_search_relations:

                // oro_api_get_activity_target_all_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_all_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_all_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getAllTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_all_types:

                // oro_api_get_activity_target_activity_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_activity_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivityTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_activity_types:

                // oro_api_get_activity_target_activities
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_activities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivitiesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_activities:

                // oro_api_options_activity_targets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/targets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_targets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_targets:

                // oro_api_options_activity_targets_auto_512
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/target(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_targets_auto_512;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets_auto_512')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_targets_auto_512:

            }

            if (0 === strpos($pathinfo, '/activity-list')) {
                // oro_activity_list_widget_activities
                if (0 === strpos($pathinfo, '/activity-list/view/widget') && preg_match('#^/activity\\-list/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_widget_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\ActivityListController::widgetAction',));
                }

                // oro_activitylist_segment_activitycondition
                if ($pathinfo === '/activity-list/segment/activity-condition') {
                    return array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\SegmentController::activityConditionAction',  '_route' => 'oro_activitylist_segment_activitycondition',);
                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_activitylists
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityClass>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylists;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylists:

                // oro_api_get_activitylist_activity_list_item
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityId>[^/]++)/activity/list/item(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylist_activity_list_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylist_activity_list_item:

                // oro_api_get_activitylist_activity_list_option
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylist/activity/list/option(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylist_activity_list_option;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_option')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListOptionAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylist_activity_list_option:

                // oro_api_options_activitylists
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activitylists;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activitylists:

                // oro_api_options_activitylists_auto_513
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylist(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activitylists_auto_513;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists_auto_513')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activitylists_auto_513:

                // oro_activity_list_api_get_list
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_activity_list_api_get_list;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_list')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_activity_list_api_get_list:

                // oro_activity_list_api_get_item
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_activity_list_api_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_activity_list_api_get_item:

                // oro_api_get_addresstype
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_addresstype;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstype')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_addresstype:

                // oro_api_get_country
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_country;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_country')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_country:

                // oro_api_get_region
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/region(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_region;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_region')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\RegionController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_region:

                // oro_api_country_get_regions
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/country/regions/(?P<country>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_country_get_regions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_country_get_regions')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryRegionsController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_country_get_regions:

            }

        }

        if (0 === strpos($pathinfo, '/calendar')) {
            if (0 === strpos($pathinfo, '/calendar/event/ajax')) {
                // oro_calendar_event_accepted
                if (0 === strpos($pathinfo, '/calendar/event/ajax/accept') && preg_match('#^/calendar/event/ajax/accept/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_accepted')), array (  'status' => 'accepted',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

                // oro_calendar_event_tentatively_accepted
                if (0 === strpos($pathinfo, '/calendar/event/ajax/tentatively') && preg_match('#^/calendar/event/ajax/tentatively/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_tentatively_accepted')), array (  'status' => 'tentatively_accepted',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

                // oro_calendar_event_declined
                if (0 === strpos($pathinfo, '/calendar/event/ajax/decline') && preg_match('#^/calendar/event/ajax/decline/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_declined')), array (  'status' => 'declined',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

            }

            if (0 === strpos($pathinfo, '/calendar/calendar')) {
                // oro_calendar_api_rest_calendarconnection_cget
                if (0 === strpos($pathinfo, '/calendar/calendars') && preg_match('#^/calendar/calendars/(?P<id>\\d+)/connections$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_calendar_api_rest_calendarconnection_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_cget')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction',));
                }
                not_oro_calendar_api_rest_calendarconnection_cget:

                if (0 === strpos($pathinfo, '/calendar/calendarconnections')) {
                    // oro_calendar_api_rest_calendarconnection_put
                    if (preg_match('#^/calendar/calendarconnections/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_calendar_api_rest_calendarconnection_put;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_put')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction',));
                    }
                    not_oro_calendar_api_rest_calendarconnection_put:

                    // oro_calendar_api_rest_calendarconnection_post
                    if ($pathinfo === '/calendar/calendarconnections') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_calendar_api_rest_calendarconnection_post;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction',  '_route' => 'oro_calendar_api_rest_calendarconnection_post',);
                    }
                    not_oro_calendar_api_rest_calendarconnection_post:

                    // oro_calendar_api_rest_calendarconnection_delete
                    if (preg_match('#^/calendar/calendarconnections/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_calendar_api_rest_calendarconnection_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_delete')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction',));
                    }
                    not_oro_calendar_api_rest_calendarconnection_delete:

                }

                if (0 === strpos($pathinfo, '/calendar/calendars')) {
                    // oro_calendar_api_rest_calendar_getdefault
                    if ($pathinfo === '/calendar/calendars/default') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_calendar_api_rest_calendar_getdefault;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction',  '_route' => 'oro_calendar_api_rest_calendar_getdefault',);
                    }
                    not_oro_calendar_api_rest_calendar_getdefault:

                    // oro_calendar_api_rest_calendarevent_getbycalendar
                    if (preg_match('#^/calendar/calendars/(?P<id>\\d+)/events/(?P<eventId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_calendar_api_rest_calendarevent_getbycalendar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarevent_getbycalendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction',));
                    }
                    not_oro_calendar_api_rest_calendarevent_getbycalendar:

                }

                // oro_calendar_api_rest_calendarevent_post
                if ($pathinfo === '/calendar/calendarevents') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_calendar_api_rest_calendarevent_post;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_route' => 'oro_calendar_api_rest_calendarevent_post',);
                }
                not_oro_calendar_api_rest_calendarevent_post:

            }

            // oro_calendar_view_default
            if ($pathinfo === '/calendar/default') {
                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewDefaultAction',  '_route' => 'oro_calendar_view_default',);
            }

            // oro_calendar_view
            if (0 === strpos($pathinfo, '/calendar/view') && preg_match('#^/calendar/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/calendar/event')) {
                // oro_calendar_event_index
                if ($pathinfo === '/calendar/event') {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::indexAction',  '_route' => 'oro_calendar_event_index',);
                }

                // oro_calendar_event_view
                if (0 === strpos($pathinfo, '/calendar/event/view') && preg_match('#^/calendar/event/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::viewAction',));
                }

                // oro_calendar_event_widget_info
                if (0 === strpos($pathinfo, '/calendar/event/widget/info') && preg_match('#^/calendar/event/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_widget_info')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::infoAction',));
                }

                // oro_calendar_event_activity_view
                if (0 === strpos($pathinfo, '/calendar/event/activity/view') && preg_match('#^/calendar/event/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_activity_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::activityAction',));
                }

                // oro_calendar_event_create
                if ($pathinfo === '/calendar/event/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::createAction',  '_route' => 'oro_calendar_event_create',);
                }

                // oro_calendar_event_update
                if (0 === strpos($pathinfo, '/calendar/event/update') && preg_match('#^/calendar/event/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::updateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/system-calendar')) {
            // oro_system_calendar_index
            if (rtrim($pathinfo, '/') === '/system-calendar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_system_calendar_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::indexAction',  '_route' => 'oro_system_calendar_index',);
            }

            // oro_system_calendar_view
            if (0 === strpos($pathinfo, '/system-calendar/view') && preg_match('#^/system\\-calendar/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::viewAction',));
            }

            // oro_system_calendar_create
            if ($pathinfo === '/system-calendar/create') {
                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::createAction',  '_route' => 'oro_system_calendar_create',);
            }

            // oro_system_calendar_update
            if (0 === strpos($pathinfo, '/system-calendar/update') && preg_match('#^/system\\-calendar/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::updateAction',));
            }

            // oro_system_calendar_widget_events
            if (0 === strpos($pathinfo, '/system-calendar/widget/events') && preg_match('#^/system\\-calendar/widget/events/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_widget_events')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::eventsAction',));
            }

            // oro_system_calendar_event_view
            if (0 === strpos($pathinfo, '/system-calendar/event/view') && preg_match('#^/system\\-calendar/event/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::viewAction',));
            }

            // oro_system_calendar_event_create
            if (preg_match('#^/system\\-calendar/(?P<id>\\d+)/event/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_create')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::createAction',));
            }

            // oro_system_calendar_event_update
            if (0 === strpos($pathinfo, '/system-calendar/event/update') && preg_match('#^/system\\-calendar/event/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::updateAction',));
            }

        }

        // oro_calendar_dashboard_my_calendar
        if (0 === strpos($pathinfo, '/dashboard/my_calendar') && preg_match('#^/dashboard/my_calendar/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_dashboard_my_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Dashboard\\DashboardController::myCalendarAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendar_connections:

            // oro_api_put_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_calendar_connection:

            // oro_api_post_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendar_connection:

            // oro_api_delete_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendar_connection:

            // oro_api_options_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendar/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendar_connections:

            // oro_api_options_calendar_connections_auto_514
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendar/connection(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendar_connections_auto_514;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections_auto_514')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendar_connections_auto_514:

            // oro_api_get_calendarevents
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevents;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevents:

            // oro_api_get_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevent:

            // oro_api_get_calendarevent_by_calendar
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/events/(?P<eventId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevent_by_calendar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent_by_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevent_by_calendar:

            // oro_api_put_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_calendarevent:

            // oro_api_post_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendarevent:

            // oro_api_delete_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendarevent:

            // oro_api_options_calendarevents
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendarevents;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendarevents:

            // oro_api_options_calendarevents_auto_515
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevent(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendarevents_auto_515;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents_auto_515')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendarevents_auto_515:

            // oro_api_get_calendar_default
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/default(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendar_default;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_default')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendar_default:

            // oro_api_delete_systemcalendar
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendars/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_systemcalendar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_systemcalendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_systemcalendar:

            // oro_api_options_systemcalendars
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendars(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_systemcalendars;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_systemcalendars:

            // oro_api_options_systemcalendars_auto_516
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendar(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_systemcalendars_auto_516;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars_auto_516')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_systemcalendars_auto_516:

        }

        if (0 === strpos($pathinfo, '/config')) {
            if (0 === strpos($pathinfo, '/config/configuration')) {
                // oro_config_api_rest_configuration_cget
                if ($pathinfo === '/config/configuration') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_config_api_rest_configuration_cget;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction',  '_route' => 'oro_config_api_rest_configuration_cget',);
                }
                not_oro_config_api_rest_configuration_cget:

                // oro_config_api_rest_configuration_get
                if (preg_match('#^/config/configuration/(?P<path>[\\w-]+[\\w-\\/]*)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_config_api_rest_configuration_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_api_rest_configuration_get')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction',));
                }
                not_oro_config_api_rest_configuration_get:

            }

            // oro_config_configuration_system
            if (0 === strpos($pathinfo, '/config/system') && preg_match('#^/config/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_configurations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/configuration(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_configurations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configurations')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_configurations:

            // oro_api_get_configuration
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/configuration/(?P<path>[\\w-]+[\\w-\\/]*)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_configuration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configuration')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_configuration:

        }

        if (0 === strpos($pathinfo, '/cron/job')) {
            // oro_cron_job_index
            if (rtrim($pathinfo, '/') === '/cron/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_cron_job_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::indexAction',  '_route' => 'oro_cron_job_index',);
            }

            // oro_cron_job_view
            if (0 === strpos($pathinfo, '/cron/job/view') && preg_match('#^/cron/job/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cron_job_view')), array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::viewAction',));
            }

            // oro_cron_job_run_daemon
            if ($pathinfo === '/cron/job/run-daemon') {
                return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::runDaemonAction',  '_route' => 'oro_cron_job_run_daemon',);
            }

            if (0 === strpos($pathinfo, '/cron/job/st')) {
                // oro_cron_job_stop_daemon
                if ($pathinfo === '/cron/job/stop-daemon') {
                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::stopDaemonAction',  '_route' => 'oro_cron_job_stop_daemon',);
                }

                // oro_cron_job_status
                if ($pathinfo === '/cron/job/status') {
                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::statusAction',  '_route' => 'oro_cron_job_status',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/audit')) {
                // oro_dataaudit_index
                if (preg_match('#^/audit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction',));
                }

                // oro_dataaudit_history
                if (0 === strpos($pathinfo, '/audit/history') && preg_match('#^/audit/history(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_history')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_audits
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audits:

                // oro_api_get_audit
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audit:

                // oro_api_get_audit_fields
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audit/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audit_fields;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit_fields')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audit_fields:

                // oro_api_options_audits
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_audits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_audits:

                // oro_api_options_audits_auto_517
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_audits_auto_517;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits_auto_517')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_audits_auto_517:

            }

        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // oro_datagrid_widget
            if (0 === strpos($pathinfo, '/datagrid/widget') && preg_match('#^/datagrid/widget/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_widget')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::widgetAction',));
            }

            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_export_action
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)/export/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_datagrid_export_action');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_export_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::exportAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)/massAction/(?P<actionName>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_datagrid_api_rest_gridview_post
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_datagrid_api_rest_gridview_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_post')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_post:

            // oro_datagrid_api_rest_gridview_put
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_datagrid_api_rest_gridview_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_put')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_put:

            // oro_datagrid_api_rest_gridview_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_datagrid_api_rest_gridview_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_delete')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_delete:

            // oro_datagrid_api_rest_gridview_options
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_datagrid_api_rest_gridview_options;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_options')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_options:

        }

        if (0 === strpos($pathinfo, '/embedded-form')) {
            if (0 === strpos($pathinfo, '/embedded-form/su')) {
                // oro_embedded_form_submit
                if (0 === strpos($pathinfo, '/embedded-form/submit') && preg_match('#^/embedded\\-form/submit/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_submit')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formAction',));
                }

                // oro_embedded_form_success
                if (0 === strpos($pathinfo, '/embedded-form/success') && preg_match('#^/embedded\\-form/success/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_success')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formSuccessAction',));
                }

            }

            // oro_embedded_form_list
            if (rtrim($pathinfo, '/') === '/embedded-form') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_embedded_form_list');
                }

                return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::indexAction',  '_route' => 'oro_embedded_form_list',);
            }

            // oro_embedded_form_create
            if ($pathinfo === '/embedded-form/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::createAction',  '_route' => 'oro_embedded_form_create',);
            }

            if (0 === strpos($pathinfo, '/embedded-form/de')) {
                // oro_embedded_form_delete
                if (0 === strpos($pathinfo, '/embedded-form/delete') && preg_match('#^/embedded\\-form/delete/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_delete')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::deleteAction',));
                }

                // oro_embedded_form_default_data
                if (0 === strpos($pathinfo, '/embedded-form/default-data') && preg_match('#^/embedded\\-form/default\\-data/(?P<formType>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_default_data')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::defaultDataAction',));
                }

            }

            // oro_embedded_form_update
            if (0 === strpos($pathinfo, '/embedded-form/update') && preg_match('#^/embedded\\-form/update/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_update')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::updateAction',));
            }

            // oro_embedded_form_view
            if (0 === strpos($pathinfo, '/embedded-form/view') && preg_match('#^/embedded\\-form/view/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_view')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::viewAction',));
            }

            // oro_embedded_form_info
            if (0 === strpos($pathinfo, '/embedded-form/info') && preg_match('#^/embedded\\-form/info/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_info')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::infoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/merge')) {
            // oro_entity_merge_massaction
            if (preg_match('#^/merge/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_merge_massaction')), array (  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeMassActionAction',));
            }

            // oro_entity_merge
            if ($pathinfo === '/merge') {
                return array (  'entityData' => NULL,  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeAction',  '_route' => 'oro_entity_merge',);
            }

        }

        if (0 === strpos($pathinfo, '/entity-pagination')) {
            // oro_entity_pagination_first
            if (0 === strpos($pathinfo, '/entity-pagination/first') && preg_match('#^/entity\\-pagination/first/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_first')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::firstAction',));
            }

            // oro_entity_pagination_previous
            if (0 === strpos($pathinfo, '/entity-pagination/previous') && preg_match('#^/entity\\-pagination/previous/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_previous')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::previousAction',));
            }

            // oro_entity_pagination_next
            if (0 === strpos($pathinfo, '/entity-pagination/next') && preg_match('#^/entity\\-pagination/next/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_next')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::nextAction',));
            }

            // oro_entity_pagination_last
            if (0 === strpos($pathinfo, '/entity-pagination/last') && preg_match('#^/entity\\-pagination/last/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_last')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::lastAction',));
            }

        }

        // oro_form_autocomplete_search
        if ($pathinfo === '/autocomplete/search') {
            return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_form_autocomplete_search',);
        }

        // oro_imap_connection_check
        if ($pathinfo === '/connection/check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_oro_imap_connection_check;
            }

            return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::checkAction',  '_route' => 'oro_imap_connection_check',);
        }
        not_oro_imap_connection_check:

        if (0 === strpos($pathinfo, '/import')) {
            // oro_importexport_import_form
            if ($pathinfo === '/import') {
                return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importFormAction',  '_route' => 'oro_importexport_import_form',);
            }

            // oro_importexport_import_validate
            if (0 === strpos($pathinfo, '/import/validate') && preg_match('#^/import/validate/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_validate')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateAction',));
            }

            // oro_importexport_import_process
            if (0 === strpos($pathinfo, '/import/process') && preg_match('#^/import/process/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_process')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importProcessAction',));
            }

        }

        if (0 === strpos($pathinfo, '/export')) {
            // oro_importexport_export_instant
            if (0 === strpos($pathinfo, '/export/instant') && preg_match('#^/export/instant/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_instant')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::instantExportAction',));
            }

            // oro_importexport_export_template
            if (0 === strpos($pathinfo, '/export/template') && preg_match('#^/export/template/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_template')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::templateExportAction',));
            }

            // oro_importexport_export_download
            if (0 === strpos($pathinfo, '/export/download') && preg_match('#^/export/download/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_download')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::downloadExportResultAction',));
            }

        }

        if (0 === strpos($pathinfo, '/i')) {
            // oro_importexport_error_log
            if (0 === strpos($pathinfo, '/import_export/error') && preg_match('#^/import_export/error/(?P<jobCode>[^/\\.]++)\\.log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_error_log')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::errorLogAction',));
            }

            if (0 === strpos($pathinfo, '/installer')) {
                // oro_installer_flow
                if ($pathinfo === '/installer') {
                    return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'oro_installer',  '_route' => 'oro_installer_flow',);
                }

                if (0 === strpos($pathinfo, '/installer/flow')) {
                    // sylius_flow_start
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                    }

                    // sylius_flow_display
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                    }

                    // sylius_flow_forward
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/notes')) {
            if (0 === strpos($pathinfo, '/notes/view')) {
                // oro_note_widget_notes
                if (0 === strpos($pathinfo, '/notes/view/widget') && preg_match('#^/notes/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::widgetAction',));
                }

                // oro_note_notes
                if (preg_match('#^/notes/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::getAction',));
                }

            }

            // oro_note_widget_info
            if (0 === strpos($pathinfo, '/notes/widget/info') && preg_match('#^/notes/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_info')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::infoAction',));
            }

            // oro_note_create
            if (0 === strpos($pathinfo, '/notes/create') && preg_match('#^/notes/create/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_create')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::createAction',));
            }

            // oro_note_update
            if (0 === strpos($pathinfo, '/notes/update') && preg_match('#^/notes/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_update')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_put_note
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_note:

            // oro_api_delete_note
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_note:

            // oro_api_options_notes
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_notes:

            // oro_api_options_notes_auto_518
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/note(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_notes_auto_518;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes_auto_518')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_notes_auto_518:

            // oro_api_get_notes
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::cgetAction',  '_format' => 'json',));
            }
            not_oro_api_get_notes:

            // oro_api_get_note
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::getAction',  '_format' => 'json',));
            }
            not_oro_api_get_note:

            // oro_api_post_note
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::postAction',  '_format' => 'json',));
            }
            not_oro_api_post_note:

        }

        if (0 === strpos($pathinfo, '/notification/email')) {
            // oro_notification_emailnotification_index
            if (preg_match('#^/notification/email(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::indexAction',));
            }

            // oro_notification_emailnotification_update
            if (0 === strpos($pathinfo, '/notification/email/update') && preg_match('#^/notification/email/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::updateAction',));
            }

            // oro_notification_emailnotification_create
            if ($pathinfo === '/notification/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::createAction',  '_route' => 'oro_notification_emailnotification_create',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_emailnotication
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailnotications/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailnotication;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailnotication')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailnotication:

            // oro_api_options_emailnotications
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailnotications(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailnotications;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailnotications')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailnotications:

        }

        // oro_platform_system_info
        if ($pathinfo === '/platform/information') {
            return array (  '_controller' => 'Oro\\Bundle\\PlatformBundle\\Controller\\PlatformController::systemInfoAction',  '_route' => 'oro_platform_system_info',);
        }

        // oro_api_querydesigner_fields_entity
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/querydesigner/entities/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_querydesigner_fields_entity;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_querydesigner_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\QueryDesignerBundle\\Controller\\Api\\Rest\\QueryDesignerEntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_querydesigner_fields_entity:

        if (0 === strpos($pathinfo, '/report')) {
            // oro_report_view
            if (0 === strpos($pathinfo, '/report/view') && preg_match('#^/report/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewAction',));
            }

            // oro_report_create
            if ($pathinfo === '/report/create') {
                return array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::createAction',  '_route' => 'oro_report_create',);
            }

            // oro_report_update
            if (0 === strpos($pathinfo, '/report/update') && preg_match('#^/report/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::updateAction',));
            }

            // oro_report_index
            if (preg_match('#^/report(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_report
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reports/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_report;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_report')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_report:

            // oro_api_options_reports
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reports(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_reports;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_reports:

            // oro_api_options_reports_auto_519
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/report(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_reports_auto_519;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports_auto_519')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_reports_auto_519:

        }

        if (0 === strpos($pathinfo, '/search')) {
            // oro_search_advanced
            if ($pathinfo === '/search/advanced-search') {
                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::ajaxAdvancedSearchAction',  '_route' => 'oro_search_advanced',);
            }

            if (0 === strpos($pathinfo, '/search/s')) {
                // oro_search_bar
                if ($pathinfo === '/search/search-bar') {
                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchBarAction',  '_route' => 'oro_search_bar',);
                }

                // oro_search_suggestion
                if ($pathinfo === '/search/suggestion') {
                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchSuggestionAction',  '_route' => 'oro_search_suggestion',);
                }

            }

            // oro_search_results
            if (rtrim($pathinfo, '/') === '/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_search_results');
                }

                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchResultsAction',  '_route' => 'oro_search_results',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_search
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search:

            // oro_api_get_search_autocomplete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/autocomplete(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search_autocomplete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_autocomplete')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAutocompleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search_autocomplete:

            // oro_api_get_search_advanced
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/advanced(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search_advanced;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_advanced')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchAdvancedController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search_advanced:

        }

        if (0 === strpos($pathinfo, '/segment')) {
            // oro_segment_index
            if (preg_match('#^/segment(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::indexAction',));
            }

            // oro_segment_view
            if (0 === strpos($pathinfo, '/segment/view') && preg_match('#^/segment/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::viewAction',));
            }

            // oro_segment_create
            if ($pathinfo === '/segment/create') {
                return array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::createAction',  '_route' => 'oro_segment_create',);
            }

            // oro_segment_update
            if (0 === strpos($pathinfo, '/segment/update') && preg_match('#^/segment/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_segment_items
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segment/items(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items:

                // oro_api_delete_segment
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_segment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_segment')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_segment:

                // oro_api_post_segment_run
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/runs(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run:

                // oro_api_options_segments
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments:

                // oro_api_options_segments_auto_520
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segment(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments_auto_520;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments_auto_520')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments_auto_520:

                // oro_api_get_segment_items_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<entityName>[^/]++)/items(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\DeprecatedSegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items_deprecated:

                // oro_api_post_segment_run_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/run(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run_deprecated:

                // oro_api_cget_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_cget_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_cget_sidebarwidgets:

                // oro_api_get_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebarwidgets:

                // oro_api_post_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebarwidgets:

                // oro_api_put_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebarwidgets:

                // oro_api_delete_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_sidebarwidgets:

                // oro_api_get_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<position>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebars:

                // oro_api_post_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebars:

                // oro_api_put_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<stateId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebars:

            }

            // _webservice_call
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__webservice_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_call')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::CallAction',  '_format' => 'soap',));
            }
            not__webservice_call:

            // _webservice_definition
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__webservice_definition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_definition')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::DefinitionAction',  '_format' => 'wsdl',));
            }
            not__webservice_definition:

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // oro_tag_index
            if (preg_match('#^/tag(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::indexAction',));
            }

            // oro_tag_create
            if ($pathinfo === '/tag/create') {
                return array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::createAction',  '_route' => 'oro_tag_create',);
            }

            // oro_tag_update
            if (0 === strpos($pathinfo, '/tag/update') && preg_match('#^/tag/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::updateAction',));
            }

            // oro_tag_search
            if (0 === strpos($pathinfo, '/tag/search') && preg_match('#^/tag/search(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_tag
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_tag;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tag')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_tag:

            // oro_api_options_tags
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tags(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tags;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tags:

            // oro_api_options_tags_auto_521
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tag(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tags_auto_521;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags_auto_521')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tags_auto_521:

        }

        if (0 === strpos($pathinfo, '/translation')) {
            // oro_translation_available_translations
            if ($pathinfo === '/translation/available-translations') {
                return array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\ServiceController::availableTranslationsAction',  '_route' => 'oro_translation_available_translations',);
            }

            // oro_translation_download
            if (0 === strpos($pathinfo, '/translation/download') && preg_match('#^/translation/download(?:/(?P<code>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_download')), array (  'code' => NULL,  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\ServiceController::downloadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_translations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/translations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_translations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_translations')), array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_translations:

            // oro_api_cget_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_cget_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_cget_windows:

            // oro_api_get_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_windows:

            // oro_api_post_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_windows:

            // oro_api_put_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_windows:

            // oro_api_delete_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_windows:

            // oro_workflow_api_rest_entity_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowentity$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_entity_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_entity_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',));
            }
            not_oro_workflow_api_rest_entity_get:

            // oro_workflow_api_rest_process_activate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/process/activate/(?P<processDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_process_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_activate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction',));
            }
            not_oro_workflow_api_rest_process_activate:

            // oro_workflow_api_rest_process_deactivate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/process/deactivate/(?P<processDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_process_deactivate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_deactivate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction',));
            }
            not_oro_workflow_api_rest_process_deactivate:

            // oro_workflow_api_rest_workflow_start
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_start')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',));
            }
            not_oro_workflow_api_rest_workflow_start:

            // oro_workflow_api_rest_workflow_transit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_transit')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',));
            }
            not_oro_workflow_api_rest_workflow_transit:

            // oro_workflow_api_rest_workflow_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',));
            }
            not_oro_workflow_api_rest_workflow_get:

            // oro_workflow_api_rest_workflow_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_workflow_api_rest_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_delete')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',));
            }
            not_oro_workflow_api_rest_workflow_delete:

            // oro_workflow_api_rest_workflow_activate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_activate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',));
            }
            not_oro_workflow_api_rest_workflow_activate:

            // oro_workflow_api_rest_workflow_deactivate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<entityClass>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_deactivate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_deactivate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',));
            }
            not_oro_workflow_api_rest_workflow_deactivate:

            // oro_workflow_api_rest_workflowdefinition_get
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflowdefinition_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_get:

            // oro_workflow_api_rest_workflowdefinition_put
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_workflow_api_rest_workflowdefinition_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_put')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_put:

            // oro_workflow_api_rest_workflowdefinition_post
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition(?:/(?P<workflowDefinition>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_workflow_api_rest_workflowdefinition_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_post')), array (  'version' => 'latest',  '_format' => 'json',  'workflowDefinition' => NULL,  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_post:

            // oro_workflow_api_rest_workflowdefinition_delete
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_workflow_api_rest_workflowdefinition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_delete')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_delete:

        }

        if (0 === strpos($pathinfo, '/processdefinition')) {
            // oro_process_definition_index
            if ($pathinfo === '/processdefinition') {
                return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::indexAction',  '_route' => 'oro_process_definition_index',);
            }

            // oro_process_definition_view
            if (0 === strpos($pathinfo, '/processdefinition/view') && preg_match('#^/processdefinition/view/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_process_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/workflow')) {
            if (0 === strpos($pathinfo, '/workflowwidget')) {
                // oro_workflow_widget_steps
                if (0 === strpos($pathinfo, '/workflowwidget/steps') && preg_match('#^/workflowwidget/steps/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_steps')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::stepsAction',));
                }

                if (0 === strpos($pathinfo, '/workflowwidget/transition')) {
                    // oro_workflow_widget_start_transition_form
                    if (0 === strpos($pathinfo, '/workflowwidget/transition/create/attributes') && preg_match('#^/workflowwidget/transition/create/attributes/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::startTransitionFormAction',));
                    }

                    // oro_workflow_widget_transition_form
                    if (0 === strpos($pathinfo, '/workflowwidget/transition/edit/attributes') && preg_match('#^/workflowwidget/transition/edit/attributes/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::transitionFormAction',));
                    }

                }

                // oro_workflow_widget_buttons
                if (0 === strpos($pathinfo, '/workflowwidget/buttons') && preg_match('#^/workflowwidget/buttons/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_buttons')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::buttonsAction',));
                }

            }

            // oro_workflow_start_transition_form
            if (0 === strpos($pathinfo, '/workflow/start') && preg_match('#^/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::startTransitionAction',));
            }

            // oro_workflow_transition_form
            if (0 === strpos($pathinfo, '/workflow/transit') && preg_match('#^/workflow/transit/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::transitionAction',));
            }

            if (0 === strpos($pathinfo, '/workflowdefinition')) {
                // oro_workflow_definition_index
                if ($pathinfo === '/workflowdefinition') {
                    return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::indexAction',  '_route' => 'oro_workflow_definition_index',);
                }

                // oro_workflow_definition_create
                if ($pathinfo === '/workflowdefinition/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::createAction',  '_route' => 'oro_workflow_definition_create',);
                }

                // oro_workflow_definition_update
                if (0 === strpos($pathinfo, '/workflowdefinition/update') && preg_match('#^/workflowdefinition/update/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_update')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::updateAction',));
                }

                // oro_workflow_definition_clone
                if (0 === strpos($pathinfo, '/workflowdefinition/clone') && preg_match('#^/workflowdefinition/clone/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_clone')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::cloneAction',));
                }

                // oro_workflow_definition_view
                if (0 === strpos($pathinfo, '/workflowdefinition/view') && preg_match('#^/workflowdefinition/view/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::viewAction',));
                }

                // oro_workflow_definition_info
                if (0 === strpos($pathinfo, '/workflowdefinition/info') && preg_match('#^/workflowdefinition/info/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_info')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::infoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_workflow_start
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_start:

            // oro_api_workflow_transit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_transit:

            // oro_api_workflow_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_delete:

            // oro_api_workflow_activate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_activate:

            // oro_api_workflow_deactivate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<entityClass>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_deactivate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_deactivate:

            // oro_api_workflow_definition_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_definition_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_definition_get:

            // oro_api_workflow_definition_put
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_workflow_definition_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_put')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_definition_put:

            // oro_api_workflow_definition_post
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition(?:/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_workflow_definition_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_post')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',  'version' => 'latest',  '_format' => 'json',  'workflowDefinition' => NULL,));
            }
            not_oro_api_workflow_definition_post:

            // oro_api_workflow_definition_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_workflow_definition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_definition_delete:

            // oro_api_workflow_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowentity(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',  'version' => 'latest',  '_format' => 'json',));
            }
            not_oro_api_workflow_get:

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/group')) {
                // oro_user_group_create
                if ($pathinfo === '/user/group/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                }

                // oro_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',));
                }

                // oro_user_group_index
                if (preg_match('#^/user/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',));
                }

            }

            // oro_user_reset_request
            if ($pathinfo === '/user/reset-request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_request;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
            }
            not_oro_user_reset_request:

            if (0 === strpos($pathinfo, '/user/send-email')) {
                // oro_user_reset_send_email
                if ($pathinfo === '/user/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_user_reset_send_email;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
                }
                not_oro_user_reset_send_email:

                // oro_user_reset_send_email_as_admin
                if (0 === strpos($pathinfo, '/user/send-email-as-admin') && preg_match('#^/user/send\\-email\\-as\\-admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_send_email_as_admin')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAsAdminAction',));
                }

            }

            // oro_user_reset_check_email
            if ($pathinfo === '/user/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_check_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
            }
            not_oro_user_reset_check_email:

            // oro_user_reset_reset
            if (0 === strpos($pathinfo, '/user/reset') && preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_user_reset_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
            }
            not_oro_user_reset_reset:

            // oro_user_reset_set_password
            if (0 === strpos($pathinfo, '/user/set-password') && preg_match('#^/user/set\\-password/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_user_reset_set_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_set_password')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::setPasswordAction',));
            }
            not_oro_user_reset_set_password:

            if (0 === strpos($pathinfo, '/user/role')) {
                // oro_user_role_create
                if ($pathinfo === '/user/role/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                }

                // oro_user_role_update
                if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',));
                }

                // oro_user_role_index
                if (preg_match('#^/user/role(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // oro_user_security_login
                    if ($pathinfo === '/user/login') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                    }

                    // oro_user_security_check
                    if ($pathinfo === '/user/login-check') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                    }

                }

                // oro_user_security_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/status')) {
                // oro_user_status_list
                if (rtrim($pathinfo, '/') === '/user/status') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_user_status_list');
                    }

                    return array (  'limit' => 10,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::indexAction',  '_route' => 'oro_user_status_list',);
                }

                // oro_user_status_create
                if ($pathinfo === '/user/status/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::createAction',  '_route' => 'oro_user_status_create',);
                }

                // oro_user_status_delete
                if (0 === strpos($pathinfo, '/user/status/delete') && preg_match('#^/user/status/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::deleteAction',));
                }

                // oro_user_status_set_current
                if (0 === strpos($pathinfo, '/user/status/set-current') && preg_match('#^/user/status/set\\-current/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_set_current')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::setCurrentStatus',));
                }

                // oro_user_status_clear_current
                if ($pathinfo === '/user/status/clear-current') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::clearCurrentStatus',  '_route' => 'oro_user_status_clear_current',);
                }

            }

            // oro_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // oro_user_profile_view
                if ($pathinfo === '/user/profile/view') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                }

                // oro_user_profile_update
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                }

            }

            // oro_user_apigen
            if (0 === strpos($pathinfo, '/user/apigen') && preg_match('#^/user/apigen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
            }

            // oro_user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
            }

            // oro_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',));
            }

            // oro_user_index
            if (preg_match('#^/user(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',));
            }

            // oro_user_widget_info
            if (0 === strpos($pathinfo, '/user/widget/info') && preg_match('#^/user/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_widget_info')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::infoAction',));
            }

        }

        // oro_comment_form
        if ($pathinfo === '/comments/form') {
            return array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\CommentController::getFormAction',  '_route' => 'oro_comment_form',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_comment_get_items
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_comment_get_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_items')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_get_items:

            // oro_api_comment_create_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_create_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_create_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_create_item:

            // oro_api_comment_get_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_comment_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_get_item:

            // oro_api_comment_update_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_update_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_update_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_update_item:

            // oro_api_comment_remove_attachment_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/]++)/removeAttachment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_remove_attachment_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_remove_attachment_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::removeAttachmentAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_remove_attachment_item:

            // oro_api_comment_delete_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_comment_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_delete_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_delete_item:

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // oro_dashboard_index
            if (preg_match('#^/dashboard(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction',));
            }

            // oro_dashboard_view
            if (0 === strpos($pathinfo, '/dashboard/view') && preg_match('#^/dashboard/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_view')), array (  'id' => '0',  'dashboard' => NULL,  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',));
            }

            // oro_dashboard_configure
            if (0 === strpos($pathinfo, '/dashboard/configure') && preg_match('#^/dashboard/configure/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_dashboard_configure;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_configure')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::configureAction',));
            }
            not_oro_dashboard_configure:

            // oro_dashboard_update
            if (0 === strpos($pathinfo, '/dashboard/update') && preg_match('#^/dashboard/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::updateAction',));
            }

            // oro_dashboard_create
            if ($pathinfo === '/dashboard/create') {
                return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::createAction',  '_route' => 'oro_dashboard_create',);
            }

            // oro_dashboard_widget
            if (0 === strpos($pathinfo, '/dashboard/widget') && preg_match('#^/dashboard/widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::widgetAction',));
            }

            if (0 === strpos($pathinfo, '/dashboard/itemized_')) {
                // oro_dashboard_itemized_widget
                if (0 === strpos($pathinfo, '/dashboard/itemized_widget') && preg_match('#^/dashboard/itemized_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedWidgetAction',));
                }

                // oro_dashboard_itemized_data_widget
                if (0 === strpos($pathinfo, '/dashboard/itemized_data_widget') && preg_match('#^/dashboard/itemized_data_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_data_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedDataWidgetAction',));
                }

            }

            // oro_dashboard_quick_launchpad
            if ($pathinfo === '/dashboard/launchpad') {
                return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::quickLaunchpadAction',  '_route' => 'oro_dashboard_quick_launchpad',);
            }

            // oro_dashboard_grid
            if (0 === strpos($pathinfo, '/dashboard/grid') && preg_match('#^/dashboard/grid/(?P<widget>[^/]++)/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_grid')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::gridAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_put_dashboard_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_dashboard_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_dashboard_widget:

            // oro_api_delete_dashboard_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_dashboard_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_dashboard_widget:

            // oro_api_put_dashboard_widget_positions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widget/positions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_dashboard_widget_positions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget_positions')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putPositionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_dashboard_widget_positions:

            // oro_api_post_dashboard_widget_add_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/widgets/adds/widgets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_dashboard_widget_add_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_dashboard_widget_add_widget:

            // oro_api_delete_dashboard
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_dashboard;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\DashboardController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_dashboard:

            // oro_api_post_dashboard_widget_add_widget_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboard/widget/add/widget(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_dashboard_widget_add_widget_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget_deprecated')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_dashboard_widget_add_widget_deprecated:

        }

        // oro_shortcut_actionslist
        if ($pathinfo === '/shortcutactionslist') {
            return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction',  '_route' => 'oro_shortcut_actionslist',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_navigationitems:

            // oro_api_post_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_navigationitems:

            // oro_api_put_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_navigationitems_id:

            // oro_api_delete_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_navigationitems_id:

            // oro_api_get_shortcuts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shortcuts/(?P<query>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_shortcuts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_shortcuts')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_shortcuts:

            // oro_api_get_pagestates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestates:

            // oro_api_get_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate:

            // oro_api_post_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_pagestate:

            // oro_api_put_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_pagestate:

            // oro_api_delete_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_pagestate:

            // oro_api_get_pagestate_checkid
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate/checkid(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate_checkid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate_checkid:

        }

        // oro_pinbar_help
        if ($pathinfo === '/pinbar/help') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
        }

        // oro_api_post_pagestate_deprecated
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_oro_api_post_pagestate_deprecated;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate_deprecated')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_post_pagestate_deprecated:

        if (0 === strpos($pathinfo, '/tracking')) {
            // oro_tracking_data_create
            if ($pathinfo === '/tracking/data/create') {
                return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingDataController::createAction',  '_route' => 'oro_tracking_data_create',);
            }

            if (0 === strpos($pathinfo, '/tracking/website')) {
                // oro_tracking_website_index
                if (preg_match('#^/tracking/website(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::indexAction',));
                }

                // oro_tracking_website_create
                if ($pathinfo === '/tracking/website/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::createAction',  '_route' => 'oro_tracking_website_create',);
                }

                // oro_tracking_website_update
                if (0 === strpos($pathinfo, '/tracking/website/update') && preg_match('#^/tracking/website/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_update')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::updateAction',));
                }

                // oro_tracking_website_view
                if (0 === strpos($pathinfo, '/tracking/website/view') && preg_match('#^/tracking/website/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_view')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::viewAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_tracking_website
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/trackings/(?P<id>[^/]++)/website(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_tracking_website;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tracking_website')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_tracking_website:

            // oro_api_options_tracking_websites
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tracking/websites(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tracking_websites;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tracking_websites:

            // oro_api_options_tracking_websites_auto_522
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tracking/website(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tracking_websites_auto_522;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites_auto_522')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tracking_websites_auto_522:

            // oro_api_post_reminder_shown
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reminders/showns(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_reminder_shown;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_reminder_shown:

            // oro_api_post_reminder_shown_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reminder/shown(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_reminder_shown_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown_deprecated')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_reminder_shown_deprecated:

        }

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
