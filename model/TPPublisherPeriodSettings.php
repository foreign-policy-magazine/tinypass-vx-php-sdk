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
 * The TPPublisherPeriodSettings model.
 */
class TPPublisherPeriodSettings {

    public static $dataTypes = array(
        "periodId" => "string",
        "titleEditable" => "bool",
        "sellDateEditable" => "bool",
        "beginDateEditable" => "bool",
        "endDateEditable" => "bool",
        "periodDeletable" => "bool",
        "dependentTerms" => "TPPublisherTerm[]",
    );
    /**
     * @var string $periodId  The period ID
     */
    public $periodId;
    /**
     * @var bool $titleEditable  Is name of period editable
     */
    public $titleEditable;
    /**
     * @var bool $sellDateEditable  Is sale date of period editable
     */
    public $sellDateEditable;
    /**
     * @var bool $beginDateEditable  Is begin date of period editable
     */
    public $beginDateEditable;
    /**
     * @var bool $endDateEditable  Is end date of period editable
     */
    public $endDateEditable;
    /**
     * @var bool $periodDeletable  Is period deletable
     */
    public $periodDeletable;
    /**
     * @var TPPublisherTerm[] $dependentTerms  
     */
    public $dependentTerms;

}
