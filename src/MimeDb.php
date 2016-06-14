<?php namespace Sukohi\MimeDb;

class MimeDb {

	private $mime_data = [];

	public function getMimeData() {

		if(empty($this->mime_data)) {

			$json = file_get_contents(__DIR__ .'/json/db.json');
			$mimi_data = json_decode($json, true);

			foreach ($mimi_data as $mime_type => $mimi_values) {

				if(isset($mimi_values['extensions'])) {

					foreach ($mimi_values['extensions'] as $extension) {

						$this->mime_data[$extension] = $mime_type;

					}

				}

			}

		}

		return $this->mime_data;

	}

	public function getExtension($mime_type, $default = '') {

		$extensions = $this->getExtensions($mime_type);

		if(isset($extensions[0])) {

			return $extensions[0];

		}

		return $default;

	}

	public function getExtensions($mime_type, $default = []) {

		$extensions = [];

		foreach ($this->getMimeData() as $data_extension => $data_mime_type) {

			if($mime_type == $data_mime_type) {

				$extensions[] = $data_extension;

			}

		}

		if(empty($extensions)) {

			return $default;

		}

		return $extensions;

	}

	public function getMimeType($extension, $default = '') {

		$mime_data = $this->getMimeData();

		if(isset($mime_data[$extension])) {

			return $mime_data[$extension];

		}

		return $default;

	}

}