<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/**
 * 1. Define the field in the database and backend.
 * We use a simple text field for the subline.
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['subline'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['subline'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50 clr', 'maxlength' => 255],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['subline_position'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['subline_position'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['above', 'below'],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['subline_position_ref'],
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(16) NOT NULL default 'below'",
];


/**
 * 2. Add the field to the palette.
 * We inject the 'subline' field directly after the 'headline' field
 * in the 'headline' content element palette.
 */
PaletteManipulator::create()
    ->addField('subline', 'headline', PaletteManipulator::POSITION_AFTER)
    ->addField('subline_position', 'subline', PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('headline', 'tl_content');