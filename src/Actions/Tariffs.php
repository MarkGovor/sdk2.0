<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\Tariff;
use CdekSDK2\Http\ApiResponse;

class Tariffs extends Action
{
    /**
     * URL для запросов к API
     * @var string */
    public const URL = '/calculator/tariff';

    /**
     * Расчет стоимости
     * @param Tariff $tariff
     * @return ApiResponse
     * @throws \CdekSDK2\Exceptions\RequestException
     */
    public function check(Tariff $tariff): ApiResponse
    {
        $params = $this->serializer->toArray($tariff);
        return $this->preparedAdd($params);
    }
}
