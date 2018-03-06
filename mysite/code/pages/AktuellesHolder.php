<?php

namespace DemoIssue72\Pages;

use Page;
use SilverStripe\Core\Config\Config;
use SilverStripe\Lumberjack\Model\Lumberjack;
use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\Queries\SQLSelect;
use SilverStripe\View\ArrayData;

/**
 * @package blog
 */

/**
 * Blog holder to display summarised blog entries
 *
 * @mixin \SilverStripe\Lumberjack\Model\Lumberjack
 */
class AktuellesHolder extends Page
{
    private static $extensions = [
        Lumberjack::class,
    ];

    private static $table_name = 'AktuellesHolder';

    private static $singular_name = 'Aktuelles';
    private static $plural_name = 'Aktuelles';

    private static $icon = 'mysite/images/newsholder';

    private static $allowed_children = [
        AktuellesPage::class,
//        AktuellesHolder::class,
        NewsPage2::class
    ];

    private static $default_child = AktuellesPage::class;


//    public function getChildPages($limit = 3)
//    {
//        $childPageType = [AktuellesPage::class, NewsPage2::class];
//
//        return Page::get()
//            ->filter([
//                'ParentID' => $this->ID,
//                'ClassName' => $childPageType
//            ])
//            ->sort('Sort', 'ASC');
//    }
//
//    public function getExtraMenu()
//    {
//        return $this->getYears();
//    }
//
//    public function getYears()
//    {
//        $childrenIDs = $this->liveChildren(true)->column('ID');
//
//        $childrenWhereClause = '"ID" IN (' . implode(',', $childrenIDs) . ')';
//
//        $childrenClasses = $this->liveChildren(true)
//            ->distinct('ClassName')
//            ->column('ClassName');
//
//
//        $childrenClasses = array_unique($childrenClasses);
//
//        $newsPageClasses = [NewsPage2::class, AktuellesPage::class];
//
//        $collectedYears = [];
//
//        foreach ($newsPageClasses as $className) {
//            if (!in_array($className, $childrenClasses)) {
//                continue;
//            }
//            $table = Config::inst()->get($className, 'table_name');
//
//            $tableName = $className::create()->stageTable($table, 'Live');
//
//            $tableName = '"' . $tableName . '"';
//            $years = SQLSelect::create()
//                ->setSelect(['Year' => 'YEAR("DateStart")'])
//                ->addWhere($childrenWhereClause)
//                ->setOrderBy('Year', 'DESC')
//                ->setFrom($tableName)
//                ->setDistinct(true)
//                ->execute();
//
//            $collectedYears = array_unique(array_merge(array_filter($years->column('Year'))));
//        }
//
//        $yearsArrayWithObjects = array_map(function ($year) {
//            return ArrayData::create([
//                'Year' => $year,
//                'Title' => implode(', ', [$this->Title, $year]),
//                'MenuTitle' => $year,
//                'Link' => $this->Link($year)
//            ]);
//        }, $collectedYears);
//
//
//        return ArrayList::create($yearsArrayWithObjects);
//    }
}
