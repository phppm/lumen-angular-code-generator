<?php

namespace biliboobrian\lumenAngularCodeGenerator\Model\Traits;

use biliboobrian\lumenAngularCodeGenerator\Model\DocBlockModel;

/**
 * Trait DocBlockTrait
 * @package biliboobrian\lumenAngularCodeGenerator\Model\Traits
 */
trait DocBlockTrait
{
    /**
     * @var DocBlockModel
     */
    protected $docBlock;

    /**
     * @return DocBlockModel
     */
    public function getDocBlock()
    {
        return $this->docBlock;
    }

    /**
     * @param DocBlockModel $docBlock
     *
     * @return $this
     */
    public function setDocBlock($docBlock)
    {
        $this->docBlock = $docBlock;

        return $this;
    }
}
