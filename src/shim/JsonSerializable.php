<?php

if (!interface_exists('JsonSerializable')) {

	/**
	 * Polyfill for JsonSerializable
	 */
	interface JsonSerializable {

		public function jsonSerialize();
	}

}