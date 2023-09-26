<?php

namespace luis2307\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use luis2307\Composer\Command\PublishCommand;

class CommandProvider implements CommandProviderCapability
{
    public function getCommands()
    {
        return [new PublishCommand()];
    }
}