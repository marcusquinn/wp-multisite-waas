<?php // phpcs:ignore - @generation-checksum BR-27-5640
/**
 * Country Class for Brazil (BR).
 *
 * State/province count: 27
 * City count: 5640
 * City count per state/province:
 * - MG: 856 cities
 * - SP: 653 cities
 * - RS: 501 cities
 * - BA: 421 cities
 * - PR: 400 cities
 * - SC: 314 cities
 * - GO: 246 cities
 * - PI: 225 cities
 * - PB: 223 cities
 * - MA: 219 cities
 * - PE: 193 cities
 * - CE: 187 cities
 * - RN: 169 cities
 * - PA: 147 cities
 * - MT: 143 cities
 * - TO: 139 cities
 * - AL: 102 cities
 * - RJ: 94 cities
 * - MS: 82 cities
 * - ES: 79 cities
 * - SE: 75 cities
 * - AM: 62 cities
 * - RO: 56 cities
 * - AC: 22 cities
 * - AP: 16 cities
 * - RR: 14 cities
 * - DF: 2 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Brazil (BR).
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
class Country_BR extends Country {

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
	protected $attributes = [
		'country_code' => 'BR',
		'currency'     => 'BRL',
		'phone_code'   => 55,
	];

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'state';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('Brazil', 'wp-multisite-waas');
	}

	/**
	 * Returns the list of states for BR.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return [
			'AC' => __('Acre', 'wp-multisite-waas'),
			'AL' => __('Alagoas', 'wp-multisite-waas'),
			'AP' => __('Amapá', 'wp-multisite-waas'),
			'AM' => __('Amazonas', 'wp-multisite-waas'),
			'BA' => __('Bahia', 'wp-multisite-waas'),
			'CE' => __('Ceará', 'wp-multisite-waas'),
			'DF' => __('Distrito Federal', 'wp-multisite-waas'),
			'ES' => __('Espírito Santo', 'wp-multisite-waas'),
			'GO' => __('Goiás', 'wp-multisite-waas'),
			'MA' => __('Maranhão', 'wp-multisite-waas'),
			'MT' => __('Mato Grosso', 'wp-multisite-waas'),
			'MS' => __('Mato Grosso do Sul', 'wp-multisite-waas'),
			'MG' => __('Minas Gerais', 'wp-multisite-waas'),
			'PR' => __('Paraná', 'wp-multisite-waas'),
			'PB' => __('Paraíba', 'wp-multisite-waas'),
			'PA' => __('Pará', 'wp-multisite-waas'),
			'PE' => __('Pernambuco', 'wp-multisite-waas'),
			'PI' => __('Piauí', 'wp-multisite-waas'),
			'RN' => __('Rio Grande do Norte', 'wp-multisite-waas'),
			'RS' => __('Rio Grande do Sul', 'wp-multisite-waas'),
			'RJ' => __('Rio de Janeiro', 'wp-multisite-waas'),
			'RO' => __('Rondônia', 'wp-multisite-waas'),
			'RR' => __('Roraima', 'wp-multisite-waas'),
			'SC' => __('Santa Catarina', 'wp-multisite-waas'),
			'SE' => __('Sergipe', 'wp-multisite-waas'),
			'SP' => __('São Paulo', 'wp-multisite-waas'),
			'TO' => __('Tocantins', 'wp-multisite-waas'),
		];
	}
}
