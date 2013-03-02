<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // show_product
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tsm\\CatalogBundle\\Controller\\CatalogController::showAction',)), array('_route' => 'show_product'));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_tsm_catalog_catalog_list
            if ($pathinfo === '/admin/tsm/catalog/catalog/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_list',  '_route' => 'admin_tsm_catalog_catalog_list',);
            }

            // admin_tsm_catalog_catalog_create
            if ($pathinfo === '/admin/tsm/catalog/catalog/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_create',  '_route' => 'admin_tsm_catalog_catalog_create',);
            }

            // admin_tsm_catalog_catalog_batch
            if ($pathinfo === '/admin/tsm/catalog/catalog/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_batch',  '_route' => 'admin_tsm_catalog_catalog_batch',);
            }

            // admin_tsm_catalog_catalog_edit
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/catalog') && preg_match('#^/admin/tsm/catalog/catalog/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_edit',)), array('_route' => 'admin_tsm_catalog_catalog_edit'));
            }

            // admin_tsm_catalog_catalog_delete
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/catalog') && preg_match('#^/admin/tsm/catalog/catalog/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_delete',)), array('_route' => 'admin_tsm_catalog_catalog_delete'));
            }

            // admin_tsm_catalog_catalog_show
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/catalog') && preg_match('#^/admin/tsm/catalog/catalog/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_show',)), array('_route' => 'admin_tsm_catalog_catalog_show'));
            }

            // admin_tsm_catalog_catalog_export
            if ($pathinfo === '/admin/tsm/catalog/catalog/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'tsm.catalog.admin.catalog',  '_sonata_name' => 'admin_tsm_catalog_catalog_export',  '_route' => 'admin_tsm_catalog_catalog_export',);
            }

            // admin_tsm_catalog_category_list
            if ($pathinfo === '/admin/tsm/catalog/category/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_list',  '_route' => 'admin_tsm_catalog_category_list',);
            }

            // admin_tsm_catalog_category_create
            if ($pathinfo === '/admin/tsm/catalog/category/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_create',  '_route' => 'admin_tsm_catalog_category_create',);
            }

            // admin_tsm_catalog_category_batch
            if ($pathinfo === '/admin/tsm/catalog/category/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_batch',  '_route' => 'admin_tsm_catalog_category_batch',);
            }

            // admin_tsm_catalog_category_edit
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/category') && preg_match('#^/admin/tsm/catalog/category/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_edit',)), array('_route' => 'admin_tsm_catalog_category_edit'));
            }

            // admin_tsm_catalog_category_delete
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/category') && preg_match('#^/admin/tsm/catalog/category/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_delete',)), array('_route' => 'admin_tsm_catalog_category_delete'));
            }

            // admin_tsm_catalog_category_show
            if (0 === strpos($pathinfo, '/admin/tsm/catalog/category') && preg_match('#^/admin/tsm/catalog/category/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_show',)), array('_route' => 'admin_tsm_catalog_category_show'));
            }

            // admin_tsm_catalog_category_export
            if ($pathinfo === '/admin/tsm/catalog/category/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'tsm.catalog.admin.category',  '_sonata_name' => 'admin_tsm_catalog_category_export',  '_route' => 'admin_tsm_catalog_category_export',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
