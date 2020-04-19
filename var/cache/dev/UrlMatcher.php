<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/customerAdd' => [[['_route' => 'customerAdd_addCustomer', '_controller' => 'App\\Controller\\AdminCustomerAddController::addCustomer'], null, null, null, false, false, null]],
        '/admin/customers' => [[['_route' => 'admin/customers', '_controller' => 'App\\Controller\\AdminCustomersController::admin'], null, null, null, false, false, null]],
        '/admin/feedback' => [[['_route' => 'admin_feedback', '_controller' => 'App\\Controller\\AdminFeedbackController::index'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin/login', '_controller' => 'App\\Controller\\AdminLoginController::login'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin/orders', '_controller' => 'App\\Controller\\AdminOrdersController::admin'], null, null, null, false, false, null]],
        '/admin/product/type' => [[['_route' => 'addmin_product_type', '_controller' => 'App\\Controller\\AdminProductTypeController::index'], null, null, null, false, false, null]],
        '/add' => [
            [['_route' => 'product_addProduct', '_controller' => 'App\\Controller\\AdminProductsAddController::addProduct'], null, null, null, false, false, null],
            [['_route' => 'app_customeradd_add', '_controller' => 'App\\Controller\\CustomerAddController::add'], null, null, null, false, false, null],
        ],
        '/admin/products' => [[['_route' => 'admin/products', '_controller' => 'App\\Controller\\AdminProductsController::admin'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts', '_controller' => 'App\\Controller\\ContactsController::add'], null, null, null, false, false, null]],
        '/sendrequest' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/task/success' => [
            [['_route' => 'app_customeradd_success', '_controller' => 'App\\Controller\\CustomerAddController::successAction'], null, null, null, false, false, null],
            [['_route' => 'success', '_controller' => 'App\\Controller\\StoreCartController::successAction'], null, null, null, false, false, null],
        ],
        '/customers' => [[['_route' => 'customers', '_controller' => 'App\\Controller\\CustomersController::index'], null, null, null, false, false, null]],
        '/customers/save' => [[['_route' => 'customer', '_controller' => 'App\\Controller\\CustomersController::save'], null, null, null, false, false, null]],
        '/submit' => [[['_route' => 'submit', '_controller' => 'App\\Controller\\CustomersController::index4'], null, null, null, false, false, null]],
        '/default/form' => [[['_route' => 'app_default_new', '_controller' => 'App\\Controller\\DefaultController::new'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'task_success', '_controller' => 'App\\Controller\\DefaultController::successAction'], null, null, null, true, false, null]],
        '/pdf' => [[['_route' => 'pdf_success', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, true, false, null]],
        '/gender/product' => [[['_route' => 'gender_product', '_controller' => 'App\\Controller\\GenderProductController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LogoutController::ajaxAction'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/orders' => [[['_route' => 'orders', '_controller' => 'App\\Controller\\OrdersController::index'], null, null, null, false, false, null]],
        '/saveorders' => [[['_route' => 'saveorders_save', '_controller' => 'App\\Controller\\OrdersController::save'], null, null, null, false, false, null]],
        '/orders/items' => [[['_route' => 'orders_items', '_controller' => 'App\\Controller\\OrdersItemsController::index'], null, null, null, false, false, null]],
        '/addOrdersItems' => [[['_route' => 'add_Orders_Items', '_controller' => 'App\\Controller\\OrdersItemsController::add'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product_products', '_controller' => 'App\\Controller\\ProductController::products'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset/password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], null, null, null, false, false, null]],
        '/user/update' => [[['_route' => 'reset_ok', '_controller' => 'App\\Controller\\ResetPasswordController::update'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::searchBar'], null, null, null, false, false, null]],
        '/cart/form' => [[['_route' => 'product_showcart', '_controller' => 'App\\Controller\\StoreCartController::showcart'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProductController::products'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/customerEdit/([^/]++)(*:29)'
                .'|/Customer(?'
                    .'|Del/([^/]++)(*:60)'
                    .'|01/([^/]++)(*:78)'
                .')'
                .'|/feedback/del/([^/]++)(*:108)'
                .'|/orderEdit/([^/]++)(*:135)'
                .'|/admin/orders/([^/]++)(*:165)'
                .'|/OrderDel/([^/]++)(*:191)'
                .'|/KindDel/([^/]++)(*:216)'
                .'|/edit/([^/]++)(*:238)'
                .'|/remove/([^/]++)(*:262)'
                .'|/EditInfo/([^/]++)(*:288)'
                .'|/sendEmail/([^/]++)(*:315)'
                .'|/product(?'
                    .'|/(?'
                        .'|gender/([^/]++)(*:353)'
                        .'|type/([^/]++)(*:374)'
                        .'|([^/]++)(?'
                            .'|(*:393)'
                            .'|/([^/]++)(*:410)'
                        .')'
                    .')'
                    .'|_card/([^/]++)(*:434)'
                .')'
                .'|/infor09/([^/]++)(*:460)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:499)'
                    .'|wdt/([^/]++)(*:519)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:565)'
                            .'|router(*:579)'
                            .'|exception(?'
                                .'|(*:599)'
                                .'|\\.css(*:612)'
                            .')'
                        .')'
                        .'|(*:622)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'customerEdit_editCustomer', '_controller' => 'App\\Controller\\AdminCustomerEditController::editCustomer'], ['id'], null, null, false, true, null]],
        60 => [[['_route' => 'CustomerDel_deleteCustomer', '_controller' => 'App\\Controller\\AdminCustomerRemoveController::deleteCustomer'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'customer01_CustomerInfo', '_controller' => 'App\\Controller\\InforCustomerController::CustomerInfo'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'Del_deleteFeedback', '_controller' => 'App\\Controller\\AdminFeedbackController::deleteFeedback'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'orderEdit_find', '_controller' => 'App\\Controller\\AdminOrderEditController::find'], ['id'], null, null, false, true, null]],
        165 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\AdminOrdersController::show'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'OrderDel_deleteOrder', '_controller' => 'App\\Controller\\AdminOrdersRemoveController::deleteOrder'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'KindDel_deletekind', '_controller' => 'App\\Controller\\AdminProductsController::deleteKind'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'product_editProduct', '_controller' => 'App\\Controller\\AdminProductsEditController::editProduct'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'product_deleteProduct', '_controller' => 'App\\Controller\\AdminProductsRemoveController::deleteProduct'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'EditInfo_editCustomer', '_controller' => 'App\\Controller\\CustomerEditController::editCustomer'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'email_success', '_controller' => 'App\\Controller\\DefaultController::index1'], ['name'], null, null, false, true, null]],
        353 => [[['_route' => 'product_pagination', '_controller' => 'App\\Controller\\GenderProductController::pagination'], ['gender'], null, null, false, true, null]],
        374 => [[['_route' => 'product_type', '_controller' => 'App\\Controller\\ProductTypeController::index'], ['id'], null, null, false, true, null]],
        393 => [[['_route' => 'product_productDetail', '_controller' => 'App\\Controller\\StoreProductDetailController::productDetail'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'product_productgroup', '_controller' => 'App\\Controller\\StoreProductGroupController::productgroup'], ['gender', 'type_id'], null, null, false, true, null]],
        434 => [[['_route' => 'product_card', '_controller' => 'App\\Controller\\StoreShoppingCartController::card'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'infor09_show', '_controller' => 'App\\Controller\\InforCustomerController::show'], ['id'], null, null, false, true, null]],
        499 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        519 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        565 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        579 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        599 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        612 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        622 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
