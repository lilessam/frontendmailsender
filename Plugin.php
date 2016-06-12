<?php    namespace Lilessam\Frontendmailsender;
use Backend;
use Controller;
use System\Classes\PluginBase;
use Event;
class Plugin extends PluginBase
{
    /**
    * This plugin requires Rainlab.User Plugin
    * */
    /**
     * This declares basic information about plugin and its author
     * */
    public function pluginDetails()
    {
        return [
            'name'          => 'Frontend Mail Sender',
            'description'   => 'Provides a control for sending mails to specific frontend users group',
            'author'        => 'LilEssam',
            'icon'          => 'icon-twitch'
        ];
    }

    /**
     * This method registers this plugin permission
     * The admin can set this permission to a specific user or a whole group that will access the plugin
     * */
    public function registerPermissions()
    {
        return [
            'lilessam.frontendmailsender.access' => [
                'label'     => 'Access to frontend mail sender plugin',
                'tab'       => 'Mail Sender'
            ],
        ];
    }

    /**
     * This method declares the settings of backend url and label in OctoberCMS control panel menu
     * */
    public function registerNavigation()
    {
        return [
            'mailsender' => [
                'label'       => 'lilessam.frontendmailsender::lang.plugin.name',
                'url'         => Backend::url('lilessam/frontendmailsender/frontendmailsender'),
                'icon'        => 'icon-twitch',
                'permissions' => ['lilessam.frontendmailsender.access'],
                'order'       => 30,
            ]
        ];
    }

}
