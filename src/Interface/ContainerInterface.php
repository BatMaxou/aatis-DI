<?php

namespace Aatis\DependencyInjection\Interface;

use Aatis\DependencyInjection\Entity\Service;
use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{
    /**
     * Finds entries of the container by the given tag and returns them.
     *
     * @param string $tag Tag of the entries to look for
     *
     * @return Service[] Entries
     */
    public function getByTag(string $tag): array;

    /**
     * Finds entries of the container by the given tags and returns them.
     *
     * @param string[] $tags Tags of the entries to look for
     *
     * @return Service[] Entries
     */
    public function getByTags(array $tags): array;

    /**
     * Finds an entry of the container by the given interface and returns them.
     *
     * @param string $interface Interface of the entry to look for
     *
     * @return Service[] Entries
     */
    public function getByInterface(string $interface): array;

    /**
     * Finds entries of the container by the given interfaces and returns them.
     *
     * @param string[] $interfaces Interfaces of the entries to look for
     *
     * @return Service[] Entries
     */
    public function getByInterfaces(array $interfaces): array;

    /**
     * Add a service to the container.
     *
     * @param string $id is of the data to add
     * @param mixed $service Data to add
     */
    public function set(string $id, mixed $service): void;
}
