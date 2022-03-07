<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Question behaviour type for immediate feedback behaviour.
 *
 * @package    qbehaviour_immediatefeedbackstudentfb
 * @copyright  2022 Jakob Heinemann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$addons = [
    "qbehaviour_immediatefeedbackstudentfb" => [
        "handlers" => [ // Different places where the add-on will display content.
            'immediatefeedbackstudentfb' => [ // Handler unique name (can be anything).
                'displaydata' => [
                    'title' => 'immediatefeedbackstudentfb question behaviour',
                    'icon' => '',
                    'class' => '',
                ],
                'delegate' => 'CoreQuestionBehaviourDelegate', // Delegate (where to display the link to the add-on).
                'method' => 'mobile_get_immediatefeedbackstudentfb',
                'offlinefunctions' => [
                    'mobile_get_immediatefeedbackstudentfb' => [],
                ],
                'styles' => [
                    'url' => '/question/behaviour/immediatefeedbackstudentfb/mobile/styles_app.css',
                    'version' => '1.00'
                ],
            ]
        ],
        'lang' => [
            ['pluginname', 'qbehaviour_immediatefeedback_studentfb'], // matching value in  lang/en/qtype_YOURQTYPENAME
        ],
        'dependencies' => [
            'qbehaviour_immediatefeedback',
        ],

    ]
];