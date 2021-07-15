<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
// return [
//     'debug' => true,
//     // Required to make the button work. You can generate a Deployment Hook in Project Settings -> Git Integration in Vercel's Dashboard
//     // 'f-mahler.kirby-vercel.deployurl' => '<deployUrl>',

//     // To show the last deployment in the field, you need to add these settings
//     // 'f-mahler.kirby-vercel.token' => '<token>',
//     // 'f-mahler.kirby-vercel.projectid' => '<projectId>',

//     // // Automatically deploy when triggering one of the following hooks. See Kirby documentation for possible options
//     // 'f-mahler.kirby-vercel.hooks' => [
//     //     'site.update:after',
//     //     'page.update:after'
//     // ]
//  ];



 return [
    'debug' => true,
    'email' => [
      'transport' => [
        'type' => 'smtp',
        'host' => 'localhost',
        'port' => 1025,
        'security' => false
      ]
    ],
  ];