<?php
return [

    /**
     * With field to check when the user can prompt. Ex: email, id
     */
    'field_to_check' => 'email',

    /**
     * Which field to update. Ex: password
     */
    'field_to_update' => 'password',

    /**
     * Should the password be encrypted? Default value: hash. Possible values: plain
     */
    'hash' => 'hash',

    /**
     * Which is the authenticable model? If null, we get it from the auth configuration
     */
    'model' => null,

    /**
     * Express optional password validation using Laravel Validation syntax
     */
    'validation' => null
];
