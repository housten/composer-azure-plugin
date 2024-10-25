<?php

namespace housten\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use housten\Composer\Command\PublishCommand;

class CommandProvider implements CommandProviderCapability
{
    public function getCommands()
    {
        return [new PublishCommand()];
    }
}
