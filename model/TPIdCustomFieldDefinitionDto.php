<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * The TPIdCustomFieldDefinitionDto model.
 */
class TPIdCustomFieldDefinitionDto {

    public static $dataTypes = array(
        "fieldName" => "string",
        "title" => "string",
        "comment" => "string",
        "editable" => "bool",
        "dataType" => "string",
        "validators" => "TPIdValidator[]",
        "options" => "array[]",
        "favouriteOptions" => "array[]",
        "optionsLink" => "int",
        "setName" => "string",
        "requiredByDefault" => "bool",
        "valuesCount" => "int",
        "archived" => "bool",
        "defaultSortOrder" => "int",
        "attribute" => "TPIdCustomFieldAttributeDto",
        "tooltip" => "TPIdTooltip",
        "parent" => "int",
        "hidden" => "bool",
    );
    /**
     * @var string $fieldName  
     */
    public $fieldName;
    /**
     * @var string $title  
     */
    public $title;
    /**
     * @var string $comment  
     */
    public $comment;
    /**
     * @var bool $editable  
     */
    public $editable;
    /**
     * @var string $dataType  
     */
    public $dataType;
    /**
     * @var TPIdValidator[] $validators  
     */
    public $validators;
    /**
     * @var array[] $options  
     */
    public $options;
    /**
     * @var array[] $favouriteOptions  
     */
    public $favouriteOptions;
    /**
     * @var int $optionsLink  
     */
    public $optionsLink;
    /**
     * @var string $setName  
     */
    public $setName;
    /**
     * @var bool $requiredByDefault  
     */
    public $requiredByDefault;
    /**
     * @var int $valuesCount  
     */
    public $valuesCount;
    /**
     * @var bool $archived  
     */
    public $archived;
    /**
     * @var int $defaultSortOrder  
     */
    public $defaultSortOrder;
    /**
     * @var TPIdCustomFieldAttributeDto $attribute  
     */
    public $attribute;
    /**
     * @var TPIdTooltip $tooltip  
     */
    public $tooltip;
    /**
     * @var int $parent  
     */
    public $parent;
    /**
     * @var bool $hidden  
     */
    public $hidden;

}
