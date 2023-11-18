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
 * format.php - course format featuring single activity included from view.php
 *
 * if we are not redirected before this point this means we want to
 * either manage orphaned activities - i.e. display section 1,
 * or the activity is not setup, does not have url or is not accessible at the
 * moment
 *
 * @package    format_wbsingleactivity
 * @copyright  2012 Marina Glancy
 * @copyright  2023 G J Barnard
 *               {@link https://moodle.org/user/profile.php?id=442195}
 *               {@link https://gjbarnard.co.uk}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$courserenderer = $PAGE->get_renderer('format_wbsingleactivity');
echo $courserenderer->display($course, $section != 0);
