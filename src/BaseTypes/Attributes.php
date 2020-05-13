<?php

/**
 * Copyright (c) 2019. CDEK-IT. All rights reserved.
 * See LICENSE.md for license details.
 *
 * @author Chizhekov Viktor
 */

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

class Attributes
{
    /**
     * Признак возвратного заказа
     * @Type("boolean")
     * @var bool
     */
    public $is_return;

    /**
     * Номер заказа СДЭК
     * @Type("int")
     * @var int
     */
    public $cdek_number;

    /**
     * Номер заказа в ИС Клиента
     * @Type("string")
     * @var string
     */
    public $number;

    /**
     * Код статуса
     * @Type("string")
     * @var string
     */
    public $status_code;

    /**
     * Код дополнительного статуса
     * @Type("string")
     * @var string
     */
    public $status_reason_code;

    /**
     * Дата и время установки статуса
     * @Type("string")
     * @var string
     */
    public $status_date_time;

    /**
     * Наименование города(места), где произошло изменение статуса
     * @Type("string")
     * @var string
     */
    public $city;

    /**
     * Тип печатной формы
     * @Type("string")
     * @var string
     */
    public $type;

    /**
     * Ссылка на скачивание файла
     * @Type("string")
     * @var string
     */
    public $url;
}