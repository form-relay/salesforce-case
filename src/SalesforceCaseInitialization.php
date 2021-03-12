<?php

namespace FormRelay\SalesforceCase;

use FormRelay\Core\Initialization;
use FormRelay\Core\Service\RegistryInterface;
use FormRelay\Request\RequestInitialization;
use FormRelay\SalesforceCase\Route\SalesforceCaseRoute;

class SalesforceCaseInitialization extends Initialization
{
    const ROUTES = [
        SalesforceCaseRoute::class,
    ];

    public static function initialize(RegistryInterface $registry)
    {
        RequestInitialization::initialize($registry);
        parent::initialize($registry);
    }
}
