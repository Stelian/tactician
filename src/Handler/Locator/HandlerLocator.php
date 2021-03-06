<?php

namespace League\Tactician\CommandBus\Handler\Locator;

use League\Tactician\CommandBus\Command;

/**
 * Service locator for handler objects
 *
 * This interface is often a wrapper around your frameworks dependency
 * injection container or just maps command names to handler names on disk somehow.
 */
interface HandlerLocator
{
    /**
     * Retrieves the handler for a specified command
     *
     * @param Command $command
     * @return mixed
     */
    public function getHandlerForCommand(Command $command);
}
