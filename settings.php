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
 * Settings for wbformat_singleactivity
 *
 * @package    wbformat_singleactivity
 * @copyright  2012 Marina Glancy
 * @copyright  2023 G J Barnard
 *               {@link https://moodle.org/user/profile.php?id=442195}
 *               {@link https://gjbarnard.co.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
require_once($CFG->dirroot. '/course/format/wbsingleactivity/settingslib.php');

if ($ADMIN->fulltree) {
    $settings->add(new format_wbsingleactivity_admin_setting_activitytype('format_wbsingleactivity/activitytype',
        new lang_string('defactivitytype', 'format_wbsingleactivity'),
        new lang_string('defactivitytypedesc', 'format_wbsingleactivity'),
        'forum', null)
    );
}
