<?php
/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Eugene Venter <eugene@catalyst.net.nz>
 * @package enrol_auto
 */

namespace enrol_auto\task;

/**
 * Send a course 'welcome' email to users.
 */
class course_welcome_email extends \core\task\adhoc_task {

    public function execute() {
        $data = $this->get_custom_data();

        $autoplugin = enrol_get_plugin('auto');
        $autoplugin->email_welcome_message($data->instance, $data->user);
    }
}
