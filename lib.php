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
 * Auth handler for a protected Moodle instance exposed through Istio or something.
 *
 * @package    auth_jwt
 * @category   check
 * @copyright  2023 Trey Hayden <trey.hayden.ctr@adlnet.gov>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Add security check to make sure this isn't on in production.
 *
 * @return array check
 */
function auth_jwt_security_checks() {
    return [new auth_jwt\check\jwtauth()];
}

