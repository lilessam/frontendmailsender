<?php
return [
    'plugin' => [
        'name' => 'Frontend Mail Sender'
        ],
    'backend' => [
        'title' => 'Frontend Users Mail Sender',
        ],
    'controller' => [
        'groups'        => 'Select a group',
        'subject'       => 'Message subject',
        'typesubject'   => 'Type the message subject here',
        'message'       => 'Type the message',
        'type'          => 'Type your message here',
        'submit'        => 'Send Message Now',
        ],
    'sent'      => 'Message has been sent successfully to ',
    'users'     => ' users',
    'nousers'   => 'There\'s no users in this group',
    'callout'   => [
        'title'   => 'Frontend users mail sender',
        'body'    => 'This plugin allows you to send a mail to a specific frontend group',
        ],
    'test' => [
        'text'              => 'You can send a test mail through this form',
        'email'             => 'Type your email here',
        'send_mail'         => 'Send Test Mail',
        'email_placeholder' => 'email@email.com',
        'sent'              => 'Message has been sent successfully',
        ],
    'error_nodata' => 'All fields are required',
    ];
