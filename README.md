# MimeDb
A Larave package to convert mime type to extension and vice versa.  
(This package is for Laravel 5+.)  

* Note: This package is based on [jshttp/mime-db](https://github.com/jshttp/mime-db). Thank you, jshttp!

# Installation

Execute the following composer command.

    composer require sukohi/mime-db:2.*

Register the service provider & alias in app.php

    'providers' => [
        ...Others...,  
        Sukohi\MimeDb\MimeDbServiceProvider::class,
    ]
    
    'aliases' => [
        ...Others...,  
        'MimeDb' => Sukohi\MimeDb\Facades\MimeDb::class,
    ]

# Usage

***Extension***

    $mime_type = 'image/png';
    echo \MimeDb::getExtension($mime_type);    // png

    echo \MimeDb::getExtension($mime_type, 'default');    // with Default value

***Multiple Extensions***

    $mime_type = 'image/png';
    $extensions = \MimeDb::getExtensions($mime_type);    // [jpeg, jpg, jpe]
    
    $extensions = \MimeDb::getExtensions($mime_type, ['default']);    // with Default value

***Mime Type***

    $extension = 'mp4';
    echo \MimeDb::getMimeType($extension);   // video/mp4

    echo \MimeDb::getMimeType($extension, 'default');    // with Default value


# License

This package is licensed under the MIT License.

Copyright 2016 Sukohi Kuhoh