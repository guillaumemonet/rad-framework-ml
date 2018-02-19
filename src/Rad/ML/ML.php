<?php

namespace Rad\ML;

use Rad\Service\Service;

/**
 * Description of Database.
 * @author Guillaume MonetI
 */
final class ML extends Service {

    public static function addHandler(string $handlerType, $handler) {
        static::getInstance()->addServiceHandler($handlerType, $handler);
    }

    public static function getHandler(string $handlerType = null): MLInterface {
        return static::getInstance()->getServiceHandler($handlerType);
    }

    protected function getServiceType(): string {
        return 'ml';
    }

}
