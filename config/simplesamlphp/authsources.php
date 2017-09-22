<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
    ),

    'test-sp' => array(
        'saml:SP',
        'entityID' => getenv('SIMPLESAMLPHP_SP_ENTITY_ID'),
        'idp' => getenv('SIMPLESAMLPHP_IDP_METADATA_URL'),
    ),

);
