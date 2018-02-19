<?php

namespace Rad\ML;

interface MLInterface {

    public function train(...$args);

    public function predict(...$args);

    public function save();

    public function load();
}
