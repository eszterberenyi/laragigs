<?php
	namespace App\Models;

	use PhpOption\None;

	class Listing {
		public static function getAll(): array
		{
			return [
					[
						'id' => 1,
						'title' => 'gig 1',
						'description' => 'best opportunity ever'
					],
					[
						'id' => 2,
						'title' => 'gig 2',
						'description' => 'also best opportunity ever'
					],
				];
		}

		public static function find($id): array
		{
			$found = null;
			$listings = self::getAll();
			foreach ($listings as $listing) {
				if ($listing['id'] == $id) {
					$found = $listing;
				}
		}
			return $found;
		}
	}
