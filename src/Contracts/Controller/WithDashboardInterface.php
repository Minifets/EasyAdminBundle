<?php


namespace EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller;

/**
 *
 */
interface WithDashboardInterface
{
    public static function getDashboardControllerFqcn(): string;
}