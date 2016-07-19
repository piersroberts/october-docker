<?php
namespace BuzzwordCompliant\Musiclists;
use Backend;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'MusicLists',
            'author' => 'Piers Roberts',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'BuzzwordCompliant\Musiclists\Components\Album' => 'album',
            'BuzzwordCompliant\Musiclists\Components\Artist' => 'artist',
            'BuzzwordCompliant\Musiclists\Components\Publication' => 'publication',
            'BuzzwordCompliant\Musiclists\Components\AlbumList' => 'albumList',
            'BuzzwordCompliant\Musiclists\Components\AlbumLists' => 'albumLists'
        ];
    }

    public function registerNavigation()
    {
        return [
            'musiclists' => [
                'label'       => 'MusicLists',
                'url'         => Backend::url('buzzwordcompliant/musiclists/lists'),
                'icon'        => 'icon-music',
                'iconSvg'     => '/plugins/buzzwordcompliant/musiclists/assets/cd.svg',
                'permissions' => ['buzzwordcompliant.musiclists.*'],
                'order'       => 500,

                'sideMenu' => [
                    'lists' => [
                        'label'       => 'Lists',
                        'icon'        => 'icon-list-ol',
                        'url'         => Backend::url('buzzwordcompliant/musiclists/lists'),
                        'permissions' => ['buzzwordcompliant.musiclists.lists']
                    ],
                    'artists' => [
                        'label'       => 'Artists',
                        'icon'        => 'icon-group',
                        'url'         => Backend::url('buzzwordcompliant/musiclists/artists'),
                        'permissions' => ['buzzwordcompliant.musiclists.artists']
                    ],
                    'albums' => [
                        'label'       => 'Albums',
                        'icon'        => 'icon-dot-circle-o',
                        'url'         => Backend::url('buzzwordcompliant/musiclists/albums'),
                        'permissions' => ['buzzwordcompliant.musiclists.albums']
                    ],
                    'publications' => [
                        'label'       => 'Publications',
                        'icon'        => 'icon-newspaper-o',
                        'url'         => Backend::url('buzzwordcompliant/musiclists/publications'),
                        'permissions' => ['buzzwordcompliant.musiclists.publications']
                    ]
                ]
            ]
        ];
    }
}

