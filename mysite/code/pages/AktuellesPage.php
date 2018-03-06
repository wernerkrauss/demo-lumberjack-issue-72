<?php

namespace DemoIssue72\Pages;

use DatePickerField;
use ImageField;
use Page;
use SilverStripe\Forms\DatetimeField;

/**
 * Class \DemoIssue72\Pages\AktuellesPage
 *
 * @property string $URL
 * @property string $DateStart
 */
class AktuellesPage extends Page
{

    private static $singular_name = 'Aktueller Beitrag';
    private static $plural_name = 'Aktuelles Beitr&auml;ge';
    private static $icon = 'mysite/images/news';
    private static $table_name = 'AktuellesPage';
    private static $db = [
        'URL' => 'Varchar',
        'DateStart' => 'DBDatetime'
    ];
    private static $has_one = [
    ];
    private static $defaults = [
        'ShowInMenus' => false,
    ];
    private static $allowed_children = 'none';
    private static $default_parent = AktuellesHolder::class;
    private static $show_in_sitetree = false;
    private static $can_be_root = false;
    public $folderRoot = 'aktuelles';




}
