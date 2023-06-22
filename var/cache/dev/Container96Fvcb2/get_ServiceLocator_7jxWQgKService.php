<?php

namespace Container96Fvcb2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7jxWQgKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7jxWQgK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7jxWQgK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ArticleController::showArticles' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\ArticleController::showArticlesFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController::showOneArticleFront' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\CategoryController::showEbook' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showFormations' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showRdv' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showStages' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showOneProductFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showProductsFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.nKyAywb', 'get_ServiceLocator_NKyAywbService', true],
            'App\\Controller\\UserSecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:showArticles' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\ArticleController:showArticlesFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController:showOneArticleFront' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\CategoryController:showEbook' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showFormations' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showRdv' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showStages' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showOneProductFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showProductsFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.nKyAywb', 'get_ServiceLocator_NKyAywbService', true],
            'App\\Controller\\UserSecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ArticleController::showArticles' => '?',
            'App\\Controller\\ArticleController::showArticlesFront' => '?',
            'App\\Controller\\ArticleController::showOneArticleFront' => '?',
            'App\\Controller\\CategoryController::showEbook' => '?',
            'App\\Controller\\CategoryController::showFormations' => '?',
            'App\\Controller\\CategoryController::showRdv' => '?',
            'App\\Controller\\CategoryController::showStages' => '?',
            'App\\Controller\\CategoryController::showcategoryfront' => '?',
            'App\\Controller\\ProductController::showOneProductFront' => '?',
            'App\\Controller\\ProductController::showProducts' => '?',
            'App\\Controller\\ProductController::showProductsFront' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\UserSecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:showArticles' => '?',
            'App\\Controller\\ArticleController:showArticlesFront' => '?',
            'App\\Controller\\ArticleController:showOneArticleFront' => '?',
            'App\\Controller\\CategoryController:showEbook' => '?',
            'App\\Controller\\CategoryController:showFormations' => '?',
            'App\\Controller\\CategoryController:showRdv' => '?',
            'App\\Controller\\CategoryController:showStages' => '?',
            'App\\Controller\\CategoryController:showcategoryfront' => '?',
            'App\\Controller\\ProductController:showOneProductFront' => '?',
            'App\\Controller\\ProductController:showProducts' => '?',
            'App\\Controller\\ProductController:showProductsFront' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\UserSecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
