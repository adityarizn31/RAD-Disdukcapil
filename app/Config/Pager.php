<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Templates
     * --------------------------------------------------------------------------
     *
     * Pagination links are rendered out using views to configure their
     * appearance. This array contains aliases and the view names to
     * use when rendering the links.
     *
     * Within each view, the Pager object will be available as $pager,
     * and the desired group as $pagerGroup;
     *
     * @var array<string, string>
     */
    public $templates = [
        'default_full'   => 'CodeIgniter\Pager\Views\default_full',
        'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
        'default_head'   => 'CodeIgniter\Pager\Views\default_head',
        'kk_pagination' => 'App\Views\Pagers\kk_pagination',
        'ktp_pagination' => 'App\Views\Pagers\ktp_pagination',
        'kia_pagination' => 'App\Views\Pagers\kia_pagination',
        'aktakelahiran_pagination' => 'App\Views\Pagers\aktakelahiran_pagination',
        'aktakematian_pagination' => 'App\Views\Pagers\aktakematian_pagination',
        'perbaikandata_pagination' => 'App\Views\Pagers\perbaikandata_pagination',
        'pengaduanupdate_pagination' => 'App\Views\Pagers\pengaduanupdate_pagination',
        'perbaikannik_pagination' => 'App\Views\Pagers\perbaikannik_pagination'
    ];

    /**
     * --------------------------------------------------------------------------
     * Items Per Page
     * --------------------------------------------------------------------------
     *
     * The default number of results shown in a single page.
     *
     * @var int
     */
    public $perPage = 20;
}
