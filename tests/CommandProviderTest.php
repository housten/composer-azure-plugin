<?php declare(strict_types=1);

use housten\Composer\Command\PublishCommand;
use housten\Composer\CommandProvider;
use PHPUnit\Framework\TestCase;

final class CommandProviderTest extends TestCase
{
    public function testCopyAndRemoveDirectory(): void
    {
        $commandProvider = new CommandProvider();
        $commands = $commandProvider->getCommands();

        $this->assertCount(1, $commands);
        $this->assertInstanceOf(
            PublishCommand::class,
            $commands[0]
        );
    }
}
