<?php // phpcs:ignore - @generation-checksum IN-36-4242
/**
 * Country Class for India (IN).
 *
 * State/province count: 36
 * City count: 4242
 * City count per state/province:
 * - UP: 624 cities
 * - MH: 574 cities
 * - TN: 350 cities
 * - GJ: 311 cities
 * - MP: 275 cities
 * - WB: 260 cities
 * - KA: 242 cities
 * - RJ: 187 cities
 * - AP: 168 cities
 * - BR: 132 cities
 * - PB: 115 cities
 * - OR: 113 cities
 * - KL: 107 cities
 * - TG: 89 cities
 * - AS: 87 cities
 * - HR: 83 cities
 * - CT: 78 cities
 * - JH: 77 cities
 * - HP: 57 cities
 * - JK: 56 cities
 * - UT: 55 cities
 * - GA: 50 cities
 * - AR: 26 cities
 * - TR: 19 cities
 * - DL: 19 cities
 * - ML: 18 cities
 * - MZ: 15 cities
 * - MN: 13 cities
 * - SK: 12 cities
 * - NL: 10 cities
 * - DH: 7 cities
 * - AN: 4 cities
 * - PY: 4 cities
 * - LA: 2 cities
 * - LD: 2 cities
 * - CH: 1 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for India (IN).
 *
 * IMPORTANT:
 * This file is generated by build scripts, do not
 * change it directly or your changes will be LOST!
 *
 * @since 2.0.11
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_IN extends Country {

	use \WP_Ultimo\Traits\Singleton;

	/**
	 * General country attributes.
	 *
	 * This might be useful, might be not.
	 * In case of doubt, keep it.
	 *
	 * @since 2.0.11
	 * @var array
	 */
	protected $attributes = array(
		'country_code' => 'IN',
		'currency'     => 'INR',
		'phone_code'   => 91,
	);

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'unknown';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('India', 'wp-ultimo-locations');

	} // end get_name;

	/**
	 * Returns the list of states for IN.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'AN' => __('Andaman and Nicobar Islands', 'wp-ultimo-locations'),
			'AP' => __('Andhra Pradesh', 'wp-ultimo-locations'),
			'AR' => __('Arunachal Pradesh', 'wp-ultimo-locations'),
			'AS' => __('Assam', 'wp-ultimo-locations'),
			'BR' => __('Bihar', 'wp-ultimo-locations'),
			'CH' => __('Chandigarh', 'wp-ultimo-locations'),
			'CT' => __('Chhattisgarh', 'wp-ultimo-locations'),
			'DH' => __('Dadra and Nagar Haveli and Daman and Diu', 'wp-ultimo-locations'),
			'DL' => __('Delhi', 'wp-ultimo-locations'),
			'GA' => __('Goa', 'wp-ultimo-locations'),
			'GJ' => __('Gujarat', 'wp-ultimo-locations'),
			'HR' => __('Haryana', 'wp-ultimo-locations'),
			'HP' => __('Himachal Pradesh', 'wp-ultimo-locations'),
			'JK' => __('Jammu and Kashmir', 'wp-ultimo-locations'),
			'JH' => __('Jharkhand', 'wp-ultimo-locations'),
			'KA' => __('Karnataka', 'wp-ultimo-locations'),
			'KL' => __('Kerala', 'wp-ultimo-locations'),
			'LA' => __('Ladakh', 'wp-ultimo-locations'),
			'LD' => __('Lakshadweep', 'wp-ultimo-locations'),
			'MP' => __('Madhya Pradesh', 'wp-ultimo-locations'),
			'MH' => __('Maharashtra', 'wp-ultimo-locations'),
			'MN' => __('Manipur', 'wp-ultimo-locations'),
			'ML' => __('Meghalaya', 'wp-ultimo-locations'),
			'MZ' => __('Mizoram', 'wp-ultimo-locations'),
			'NL' => __('Nagaland', 'wp-ultimo-locations'),
			'OR' => __('Odisha', 'wp-ultimo-locations'),
			'PY' => __('Puducherry', 'wp-ultimo-locations'),
			'PB' => __('Punjab', 'wp-ultimo-locations'),
			'RJ' => __('Rajasthan', 'wp-ultimo-locations'),
			'SK' => __('Sikkim', 'wp-ultimo-locations'),
			'TN' => __('Tamil Nadu', 'wp-ultimo-locations'),
			'TG' => __('Telangana', 'wp-ultimo-locations'),
			'TR' => __('Tripura', 'wp-ultimo-locations'),
			'UP' => __('Uttar Pradesh', 'wp-ultimo-locations'),
			'UT' => __('Uttarakhand', 'wp-ultimo-locations'),
			'WB' => __('West Bengal', 'wp-ultimo-locations'),
		);

	} // end states;

} // end class Country_IN;
