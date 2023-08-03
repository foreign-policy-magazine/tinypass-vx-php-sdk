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
 * The TPPublisherExternalAPIField model.
 */
class TPPublisherExternalAPIField {

    public static $dataTypes = array(
        "fieldName" => "string",
        "fieldTitle" => "string",
        "description" => "string",
        "mandatory" => "bool",
        "hidden" => "bool",
        "defaultValue" => "string",
        "order" => "int",
        "type" => "string",
        "editable" => "string",
    );
    /**
     * @var string $fieldName  The name of the field to be used to submit to the external system
     */
    public $fieldName;
    /**
     * @var string $fieldTitle  The title of the field to be displayed to the user
     */
    public $fieldTitle;
    /**
     * @var string $description  The field description, some information about what information should be entered
     */
    public $description;
    /**
     * @var bool $mandatory  Whether the field is required
     */
    public $mandatory;
    /**
     * @var bool $hidden  Whether the field will be submitted hiddenly from the user, default value is required
     */
    public $hidden;
    /**
     * @var string $defaultValue  Default value for the field. It will be pre-entered on the form
     */
    public $defaultValue;
    /**
     * @var int $order  Field order in the list
     */
    public $order;
    /**
     * @var string $type  Field type
     */
    public $type;
    /**
     * @var string $editable  Whether the object is editable
     */
    public $editable;

}
