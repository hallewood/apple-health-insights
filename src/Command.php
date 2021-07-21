<?php

namespace Hallewood\AppleHealthInsights;

use Symfony\Component\Console\Command\Command as BaseCommand;

class Command extends BaseCommand
{
    /**
     * Constructs the base command
     */
    public function __construct () {
        parent::__construct($this->signature());

        $this->setDescription($this->description());
        $this->setCode(fn () => $this->handle());
    }

    protected function signature () : string {
        return $this->signature;
    }

    protected function description () : string {
        return $this->description;
    }
}
