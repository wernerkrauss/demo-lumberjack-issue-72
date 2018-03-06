<?php

namespace DemoIssue72\Pages;

use Page;
use SilverStripe\Forms\DatetimeField;

/**
 * Class \DemoIssue72\Pages\NewsPage2
 *
 * @property string $DateStart
 * @property string $DateEnd
 */
class NewsPage2 extends Page
{
    private static $table_name = 'NewsPage2';

    private static $db = [
        'DateStart' => 'DBDatetime',
        'DateEnd' => 'DBDatetime',
    ];

    private static $has_one = [
    ];

    private static $defaults = [
        'ShowInMenus' => false,
    ];

    private static $show_in_sitetree = false;

    private static $allowed_children = 'none';

    private static $default_parent = AktuellesHolder::class;

    private static $can_be_root = false;

}
