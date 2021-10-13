<?php

namespace FormRelay\SalesforceCase\Route;

use FormRelay\Request\Route\RequestRoute;

class SalesforceCaseRoute extends RequestRoute
{
    public static function getDefaultConfiguration(): array
    {
        $defaults = parent::getDefaultConfiguration();
        $defaults['url'] = 'https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
        $defaults['gate'] =[
            'required' => 'email',
        ];
        $defaults['fields'] = [
            'orgid' => '',
            'retURL' => '#',
            'debugEmail' => '',
            'debug' => '0',

            'comments' => [
                'fieldCollector' => [
                    'exclude' => '',
                    'ignoreIfEmpty' => true,
                    'unprocessedOnly' => true,
                ],
            ],
        ];
        return $defaults;
    }
}
