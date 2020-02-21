<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

/**
 * Type of the field.<dl class="fields-list"><dt>varchar</dt><dd>Text (up to 255
 * characters)</dd><dt>varchar_auto</dt><dd>Autocomplete text (up to 255
 * characters)</dd><dt>text</dt><dd>Long text (up to 65k characters)</dd><dt>double</dt><dd>Numeric
 * value</dd><dt>monetary</dt><dd>Monetary field (has a numeric value and a currency
 * value)</dd><dt>date</dt><dd>Date (format YYYY-MM-DD)</dd><dt>set</dt><dd>Options field with a
 * possibility of having multiple chosen options</dd><dt>enum</dt><dd>Options field with a single
 * possible chosen option</dd><dt>user</dt><dd>User field (contains a user ID of another Pipedrive
 * user)</dd><dt>org</dt><dd>Organization field (contains an organization ID which is stored on the
 * same account)</dd><dt>people</dt><dd>Person field (contains a person ID which is stored on the same
 * account)</dd><dt>phone</dt><dd>Phone field (up to 255 numbers and/or
 * characters)</dd><dt>time</dt><dd>Time field (format HH:MM:SS)</dd><dt>timerange</dt><dd>Time-range
 * field (has a start time and end time value, both HH:MM:SS)</dd><dt>daterange</dt><dd>Date-range
 * field (has a start date and end date value, both YYYY-MM-DD)</dd></dl>
 */
class FieldType1Enum
{
    /**
     * TODO: Write general description for this element
     */
    const VARCHAR = "varchar";

    /**
     * TODO: Write general description for this element
     */
    const VARCHAR_AUTO = "varchar_auto";

    /**
     * TODO: Write general description for this element
     */
    const TEXT = "text";

    /**
     * TODO: Write general description for this element
     */
    const DOUBLE = "double";

    /**
     * TODO: Write general description for this element
     */
    const MONETARY = "monetary";

    /**
     * TODO: Write general description for this element
     */
    const DATE = "date";

    /**
     * TODO: Write general description for this element
     */
    const SET = "set";

    /**
     * TODO: Write general description for this element
     */
    const ENUM = "enum";

    /**
     * TODO: Write general description for this element
     */
    const USER = "user";

    /**
     * TODO: Write general description for this element
     */
    const ORG = "org";

    /**
     * TODO: Write general description for this element
     */
    const PEOPLE = "people";

    /**
     * TODO: Write general description for this element
     */
    const PHONE = "phone";

    /**
     * TODO: Write general description for this element
     */
    const TIME = "time";

    /**
     * TODO: Write general description for this element
     */
    const TIMERANGE = "timerange";

    /**
     * TODO: Write general description for this element
     */
    const DATERANGE = "daterange";
}