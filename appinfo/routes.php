<?php

/**
 * @copyright 2018 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 201 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

return [
	'routes' => [
		[
			'name' => 'settings#getVerificationState',
			'url' => '/settings/{gateway}/verification',
			'verb' => 'GET'
		],
		[
			'name' => 'settings#startVerification',
			'url' => '/settings/{gateway}/verification/start',
			'verb' => 'POST'
		],
		[
			'name' => 'settings#finishVerification',
			'url' => '/settings/{gateway}/verification/finish',
			'verb' => 'POST'
		],
		[
			'name' => 'settings#revokeVerification',
			'url' => '/settings/{gateway}/verification',
			'verb' => 'DELETE'
		],
	]
];
