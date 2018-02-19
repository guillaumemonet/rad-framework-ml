<?php

namespace Rad\ML;

class AprioriMLHandler implements MLInterface {

    private $apriori = null;
    private $modelManager = null;
    private $config = null;

    public function __construct() {
        $this->modelManager = new ModelManager();
        $this->config = \Rad\Config\Config::getServiceConfig('ml', 'apriori')->config;
    }

    public function predict(...$args) {
        return $this->apriori->predict($args);
    }

    public function train(...$args) {
        return $this->apriori->train($args);
    }

    public function load() {
        $this->apriori = $this->modelManager->restoreFromFile($this->config->file);
        if ($this->apriori === null) {
            $this->apriori = new Phpml\Association\Apriori();
        }
    }

    public function save() {
        $this->modelManager->saveToFile($this->apriori, $this->config->file);
    }

}
