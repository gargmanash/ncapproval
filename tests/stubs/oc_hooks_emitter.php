<?php

/**
 * SPDX-FileCopyrightText: 2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OC\Hooks {
	class Emitter {
		public function emit(string $class, string $value, array $option) {
		}
		/** Closure $closure */
		public function listen(string $class, string $value, $closure) {
		}
	}
}

namespace OCA\Files\Event {
	class LoadAdditionalScriptsEvent extends \OCP\EventDispatcher\Event {
	}

	class LoadSidebar extends \OCP\EventDispatcher\Event {
	}
}
