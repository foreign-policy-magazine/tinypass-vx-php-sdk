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
 * The TPPublisherExport model.
 */
class TPPublisherExport {

    public static $dataTypes = array(
        "exportId" => "string",
        "exportName" => "string",
        "exportCreated" => "string",
        "exportCompleted" => "string",
        "exportPercentage" => "int",
        "exportRecords" => "int",
        "exportStatus" => "string",
        "reportType" => "string",
        "exportUpdated" => "string",
        "exportRepeatable" => "bool",
        "filterData" => "string",
    );
    /**
     * @var string $exportId  The ID of the downloadable report (can be retrieved with <a href=\"https://docs.piano.io/api?endpoint=get~2F~2Fpublisher~2Fexport~2Flist\">/publisher/export/list</a>)
     */
    public $exportId;
    /**
     * @var string $exportName  The downloadable report name
     */
    public $exportName;
    /**
     * @var string $exportCreated  Time stamp of the downloadable report creation
     */
    public $exportCreated;
    /**
     * @var string $exportCompleted  Time stamp of the downloadable report completion
     */
    public $exportCompleted;
    /**
     * @var int $exportPercentage  The percentage of the downloadable report completion
     */
    public $exportPercentage;
    /**
     * @var int $exportRecords  The number of records in the downloadable report
     */
    public $exportRecords;
    /**
     * @var string $exportStatus  Downloadable report completion status
     */
    public $exportStatus;
    /**
     * @var string $reportType  The report type
     */
    public $reportType;
    /**
     * @var string $exportUpdated  The time stamp of the last update for the downloadable report
     */
    public $exportUpdated;
    /**
     * @var bool $exportRepeatable  Whether report generation can be restarted (click \"Run again\" in Dashboard or use <a href = \"https://docs.piano.io/api?endpoint=get~2F~2Fpublisher~2Fexport~2Frun\">/publisher/export/run</a>)
     */
    public $exportRepeatable;
    /**
     * @var string $filterData  Filter data
     */
    public $filterData;

}
