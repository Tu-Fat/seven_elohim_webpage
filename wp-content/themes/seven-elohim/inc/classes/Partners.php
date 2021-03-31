<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 16.04.18
 * Time: 19:09
 */

namespace SEVENELOHIM;


class Partners {

	/**
	 * Partners constructor.
	 */
	function __construct()
	{
	}

	/**
	 * Get all Partners from Backend
	 *
	 * @param null $args
	 *
	 * @return \WP_Query
	 */
	private function getAllPartnersData($args = null) {

		$partnerArgs = array(
			'post_type' => 'partners',
		);

		if ($args !== null && is_array($args)) {

			foreach ($args as $index => $arg) {
				$partnerArgs[$index] = $arg;
			}
		}


		$query =  new \WP_Query( $partnerArgs );

		return $query;

	}

	public function getAllPartners() {
		$partnerData = $this->getAllPartnersData(array('posts_per_page'=>-1));


		if ($partnerData->found_posts > 0) {

			$partners = array();
			foreach ( $partnerData->posts as $key => $singlePartner ) {
				$partners[] =  $this->renderSinglePartner($partnerData->posts[$key]);
			}
			return $partners;

		} else {
			return false;
		}
	}

	/**
	 * Get one single Partner.
	 *
	 * You get basic information (id, title, image, url), if you set the $extended flag to false.
	 * You get more information (basic + images, captions, partner-text), if you set the the $extended flag to true.
	 *
	 *
	 * @param $partner_id
	 * @return mixed
	 */
	public function getPartnerById($partner_id){

		$partnerData = $this->getAllPartnersData(array('p'=>$partner_id));

		if ($partnerData->found_posts > 0) {
			return $this->renderSinglePartner($partnerData->posts[0]);
		} else {
			return false;
		}
	}

	/**
	 * Renders a single partner in a nice format with all needed fields.
	 *
	 * If you need a extended version with text/content and images, then just set $extended flag to true
	 *
	 * @param $single_object
	 * @return mixed
	 */
	private function renderSinglePartner($single_object){

		$partner['id']    = $single_object->ID;
		$partner['title'] = $single_object->post_title;
		$partner['thumbnail'] = get_the_post_thumbnail_url($single_object->ID, 'medium');
		$partner['srcset'] = wp_get_attachment_image_srcset(get_post_thumbnail_id($single_object->ID));
		$partner['image'] = get_the_post_thumbnail_url($single_object->ID, '2000w');
		$partner['url']   = get_field('url', $single_object->ID);


		return $partner;
	}
}