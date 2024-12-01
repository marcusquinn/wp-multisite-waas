<?php // phpcs:ignore - @generation-checksum RU-84-5545
/**
 * Country Class for Russia (RU).
 *
 * State/province count: 84
 * City count: 5545
 * City count per state/province:
 * - UA-40: 147 cities
 * - MOS: 332 cities
 * - KDA: 229 cities
 * - DA: 175 cities
 * - ALT: 153 cities
 * - LEN: 141 cities
 * - SVE: 138 cities
 * - NIZ: 127 cities
 * - STA: 120 cities
 * - BA: 111 cities
 * - KYA: 109 cities
 * - ROS: 109 cities
 * - TA: 105 cities
 * - PRI: 96 cities
 * - CHE: 94 cities
 * - VOR: 92 cities
 * - MOW: 92 cities
 * - KIR: 89 cities
 * - TVE: 89 cities
 * - SA: 86 cities
 * - CE: 85 cities
 * - PER: 83 cities
 * - BRY: 83 cities
 * - VGG: 82 cities
 * - ZAB: 75 cities
 * - KEM: 72 cities
 * - SAR: 71 cities
 * - ARK: 71 cities
 * - KLU: 70 cities
 * - VLA: 66 cities
 * - BU: 66 cities
 * - TUL: 64 cities
 * - KB: 64 cities
 * - SAM: 64 cities
 * - VLG: 63 cities
 * - IVA: 61 cities
 * - NVS: 59 cities
 * - SPE: 58 cities
 * - AMU: 58 cities
 * - BEL: 56 cities
 * - NGR: 54 cities
 * - ORE: 52 cities
 * - YAR: 52 cities
 * - KO: 51 cities
 * - CU: 49 cities
 * - RYA: 48 cities
 * - MO: 48 cities
 * - KR: 48 cities
 * - PNZ: 47 cities
 * - LIP: 47 cities
 * - TYU: 46 cities
 * - ULY: 45 cities
 * - KHM: 44 cities
 * - KOS: 44 cities
 * - KRS: 44 cities
 * - PSK: 44 cities
 * - MUR: 42 cities
 * - SAK: 42 cities
 * - AST: 40 cities
 * - KHA: 40 cities
 * - OMS: 38 cities
 * - KGD: 37 cities
 * - UD: 36 cities
 * - SMO: 36 cities
 * - TAM: 35 cities
 * - ME: 35 cities
 * - KC: 34 cities
 * - SE: 31 cities
 * - KGN: 31 cities
 * - AD: 30 cities
 * - TOM: 30 cities
 * - ORL: 27 cities
 * - KAM: 26 cities
 * - AL: 25 cities
 * - IN: 25 cities
 * - YAN: 24 cities
 * - KK: 22 cities
 * - MAG: 22 cities
 * - TY: 21 cities
 * - YEV: 18 cities
 * - KL: 18 cities
 * - CHU: 10 cities
 * - NEN: 2 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Russia (RU).
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
class Country_RU extends Country {

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
		'country_code' => 'RU',
		'currency'     => 'RUB',
		'phone_code'   => 7,
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

		return __('Russia', 'wp-ultimo-locations');

	} // end get_name;

	/**
	 * Returns the list of states for RU.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'ALT'   => __('Altai Krai', 'wp-ultimo-locations'),
			'AL'    => __('Altai Republic', 'wp-ultimo-locations'),
			'AMU'   => __('Amur Oblast', 'wp-ultimo-locations'),
			'ARK'   => __('Arkhangelsk', 'wp-ultimo-locations'),
			'AST'   => __('Astrakhan Oblast', 'wp-ultimo-locations'),
			'BEL'   => __('Belgorod Oblast', 'wp-ultimo-locations'),
			'BRY'   => __('Bryansk Oblast', 'wp-ultimo-locations'),
			'CE'    => __('Chechen Republic', 'wp-ultimo-locations'),
			'CHE'   => __('Chelyabinsk Oblast', 'wp-ultimo-locations'),
			'CHU'   => __('Chukotka Autonomous Okrug', 'wp-ultimo-locations'),
			'CU'    => __('Chuvash Republic', 'wp-ultimo-locations'),
			'IRK'   => __('Irkutsk', 'wp-ultimo-locations'),
			'IVA'   => __('Ivanovo Oblast', 'wp-ultimo-locations'),
			'YEV'   => __('Jewish Autonomous Oblast', 'wp-ultimo-locations'),
			'KB'    => __('Kabardino-Balkar Republic', 'wp-ultimo-locations'),
			'KGD'   => __('Kaliningrad', 'wp-ultimo-locations'),
			'KLU'   => __('Kaluga Oblast', 'wp-ultimo-locations'),
			'KAM'   => __('Kamchatka Krai', 'wp-ultimo-locations'),
			'KC'    => __('Karachay-Cherkess Republic', 'wp-ultimo-locations'),
			'KEM'   => __('Kemerovo Oblast', 'wp-ultimo-locations'),
			'KHA'   => __('Khabarovsk Krai', 'wp-ultimo-locations'),
			'KHM'   => __('Khanty-Mansi Autonomous Okrug', 'wp-ultimo-locations'),
			'KIR'   => __('Kirov Oblast', 'wp-ultimo-locations'),
			'KO'    => __('Komi Republic', 'wp-ultimo-locations'),
			'KOS'   => __('Kostroma Oblast', 'wp-ultimo-locations'),
			'KDA'   => __('Krasnodar Krai', 'wp-ultimo-locations'),
			'KYA'   => __('Krasnoyarsk Krai', 'wp-ultimo-locations'),
			'KGN'   => __('Kurgan Oblast', 'wp-ultimo-locations'),
			'KRS'   => __('Kursk Oblast', 'wp-ultimo-locations'),
			'LEN'   => __('Leningrad Oblast', 'wp-ultimo-locations'),
			'LIP'   => __('Lipetsk Oblast', 'wp-ultimo-locations'),
			'MAG'   => __('Magadan Oblast', 'wp-ultimo-locations'),
			'ME'    => __('Mari El Republic', 'wp-ultimo-locations'),
			'MOW'   => __('Moscow', 'wp-ultimo-locations'),
			'MOS'   => __('Moscow Oblast', 'wp-ultimo-locations'),
			'MUR'   => __('Murmansk Oblast', 'wp-ultimo-locations'),
			'NEN'   => __('Nenets Autonomous Okrug', 'wp-ultimo-locations'),
			'NIZ'   => __('Nizhny Novgorod Oblast', 'wp-ultimo-locations'),
			'NGR'   => __('Novgorod Oblast', 'wp-ultimo-locations'),
			'NVS'   => __('Novosibirsk', 'wp-ultimo-locations'),
			'OMS'   => __('Omsk Oblast', 'wp-ultimo-locations'),
			'ORE'   => __('Orenburg Oblast', 'wp-ultimo-locations'),
			'ORL'   => __('Oryol Oblast', 'wp-ultimo-locations'),
			'PNZ'   => __('Penza Oblast', 'wp-ultimo-locations'),
			'PER'   => __('Perm Krai', 'wp-ultimo-locations'),
			'PRI'   => __('Primorsky Krai', 'wp-ultimo-locations'),
			'PSK'   => __('Pskov Oblast', 'wp-ultimo-locations'),
			'AD'    => __('Republic of Adygea', 'wp-ultimo-locations'),
			'BA'    => __('Republic of Bashkortostan', 'wp-ultimo-locations'),
			'BU'    => __('Republic of Buryatia', 'wp-ultimo-locations'),
			'DA'    => __('Republic of Dagestan', 'wp-ultimo-locations'),
			'IN'    => __('Republic of Ingushetia', 'wp-ultimo-locations'),
			'KL'    => __('Republic of Kalmykia', 'wp-ultimo-locations'),
			'KR'    => __('Republic of Karelia', 'wp-ultimo-locations'),
			'KK'    => __('Republic of Khakassia', 'wp-ultimo-locations'),
			'MO'    => __('Republic of Mordovia', 'wp-ultimo-locations'),
			'SE'    => __('Republic of North Ossetia-Alania', 'wp-ultimo-locations'),
			'TA'    => __('Republic of Tatarstan', 'wp-ultimo-locations'),
			'ROS'   => __('Rostov Oblast', 'wp-ultimo-locations'),
			'RYA'   => __('Ryazan Oblast', 'wp-ultimo-locations'),
			'SPE'   => __('Saint Petersburg', 'wp-ultimo-locations'),
			'SA'    => __('Sakha Republic', 'wp-ultimo-locations'),
			'SAK'   => __('Sakhalin', 'wp-ultimo-locations'),
			'SAM'   => __('Samara Oblast', 'wp-ultimo-locations'),
			'SAR'   => __('Saratov Oblast', 'wp-ultimo-locations'),
			'UA-40' => __('Sevastopol', 'wp-ultimo-locations'),
			'SMO'   => __('Smolensk Oblast', 'wp-ultimo-locations'),
			'STA'   => __('Stavropol Krai', 'wp-ultimo-locations'),
			'SVE'   => __('Sverdlovsk', 'wp-ultimo-locations'),
			'TAM'   => __('Tambov Oblast', 'wp-ultimo-locations'),
			'TOM'   => __('Tomsk Oblast', 'wp-ultimo-locations'),
			'TUL'   => __('Tula Oblast', 'wp-ultimo-locations'),
			'TY'    => __('Tuva Republic', 'wp-ultimo-locations'),
			'TVE'   => __('Tver Oblast', 'wp-ultimo-locations'),
			'TYU'   => __('Tyumen Oblast', 'wp-ultimo-locations'),
			'UD'    => __('Udmurt Republic', 'wp-ultimo-locations'),
			'ULY'   => __('Ulyanovsk Oblast', 'wp-ultimo-locations'),
			'VLA'   => __('Vladimir Oblast', 'wp-ultimo-locations'),
			'VGG'   => __('Volgograd Oblast', 'wp-ultimo-locations'),
			'VLG'   => __('Vologda Oblast', 'wp-ultimo-locations'),
			'VOR'   => __('Voronezh Oblast', 'wp-ultimo-locations'),
			'YAN'   => __('Yamalo-Nenets Autonomous Okrug', 'wp-ultimo-locations'),
			'YAR'   => __('Yaroslavl Oblast', 'wp-ultimo-locations'),
			'ZAB'   => __('Zabaykalsky Krai', 'wp-ultimo-locations'),
		);

	} // end states;

} // end class Country_RU;
