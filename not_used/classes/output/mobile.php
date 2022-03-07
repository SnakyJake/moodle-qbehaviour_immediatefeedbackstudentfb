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
 * Mobile output class for qbehaviour_immediatefeedbackstudentfb
 *
 * @package    qbehaviour_immediatefeedbackstudentfb
 * @copyright  2022 Jakob Heinemann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_immediatefeedbackstudentfb\output;



defined('MOODLE_INTERNAL') || die();

/**
 * Mobile output class for qbehaviour_immediatefeedbackstudentfb
 *
 * @package    qbehaviour_immediatefeedbackstudentfb
 * @copyright  2022 Jakob Heinemann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile {

    /**
     * Returns the immediatefeedbackstudentfb question behaviour for the quiz in the mobile app.
     *
     * @return void
     */
    public static function mobile_get_immediatefeedbackstudentfb($args) {
        global $CFG;
        $args = (object) $args;
        
        return [
            
            'templates' => [
                [
                    'id' => 'main',
                    'html' => file_get_contents($CFG->dirroot."/question/behaviour/immediatefeedbackstudentfb/mobile/mobile.html")
                    ]
            ],
           
            'javascript' => file_get_contents($CFG->dirroot . '/question/behaviour/immediatefeedbackstudentfb/mobile/mobile.js')
        ];
    }
}