<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/ce_headerimage.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\CeHeaderimage\Domain\Model;

/**
 * Class FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * cruserId
     *
     * @var int
     */
    protected $cruserId = 0;

    /**
     * uidLocal
     *
     * @var int
     */
    protected $uidLocal = 0;

    /**
     * tablenames
     *
     * @var string
     */
    protected $tablenames = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return FileReference
     */
    public function setTitle(string $title): FileReference
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Returns the cruserId
     *
     * @return int $cruserId
     */
    public function getCruserId(): int
    {
        return $this->cruserId;
    }

    /**
     * Sets the cruserId
     *
     * @param int $cruserId
     * @return FileReference
     */
    public function setCruserId(int $cruserId): FileReference
    {
        $this->cruserId = $cruserId;
        return $this;
    }

    /**
     * Returns the uidLocal
     *
     * @return int $uidLocal
     */
    public function getUidLocal(): int
    {
        return $this->uidLocal;
    }

    /**
     * Sets the uidLocal
     *
     * @param int $uidLocal
     * @return FileReference
     */
    public function setUidLocal(int $uidLocal): FileReference
    {
        $this->uidLocal = $uidLocal;
        return $this;
    }

    /**
     * Returns the tablenames
     *
     * @return string $tablenames
     */
    public function getTablenames(): string
    {
        return $this->tablenames;
    }

    /**
     * Sets the tablenames
     *
     * @param string $tablenames
     * @return FileReference
     */
    public function setTablenames(string $tablenames): FileReference
    {
        $this->tablenames = $tablenames;
        return $this;
    }
}
