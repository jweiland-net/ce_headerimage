<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/ce_headerimage.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\CeHeaderimage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Slider
 */
class Slider extends AbstractEntity
{
    /**
     * Title
     *
     * @var string
     */
    protected $title = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * image
     *
     * @var \JWeiland\CeHeaderimage\Domain\Model\FileReference
     */
    protected $image;

    /**
     * Link
     *
     * @var string
     */
    protected $link = '';

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
     * @return Slider
     */
    public function setTitle(string $title): Slider
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return Slider
     */
    public function setDescription(string $description): Slider
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Returns the image
     *
     * @return FileReference $image
     */
    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param FileReference $image
     * @return Slider
     */
    public function setImage(FileReference $image): Slider
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return Slider
     */
    public function setLink(string $link): Slider
    {
        $this->link = $link;
        return $this;
    }
}
