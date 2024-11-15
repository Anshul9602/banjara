<?php
class ControllerCommonCollection extends Controller
{
	public function index()
	{
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}


		//banner-top
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner(9);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1700', '650')
				);
			}
		}


		//side banner

		$data['banner_side'] = array();

		$results = $this->model_design_banner->getBanner(10);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banner_side'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '410', '610')
				);
			}
		}
		//banner-midd
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['mid_banners'] = array();

		$results1 = $this->model_design_banner->getBanner(11);

		foreach ($results1 as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['mid_banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1250', '610')
				);
			}
		}


		

		

		//shop by room
		$this->load->model('catalog/category');



		$data['collection'] = array();

		$room_categories = $this->model_catalog_category->getCategories(60);

		foreach ($room_categories as $category) {

			// Level 2
			$category_info = $this->model_catalog_category->getCategory($category['category_id']);
			if ($category_info) {
				if ($category_info['image']) {
					$image = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
			}

			if ("TRADITIONAL SAGA" == $category['name']) {
				$href = 'index.php?route=product/category&path=60_63_151';
			} elseif ("LUXE SAGA" == $category['name']) {
				$href = 'index.php?route=product/category&path=60_61_149';
			} elseif ("MODERN SAGA" == $category['name']) {
				$href = $this->url->link('common/wholesale');
			} else {
				$href = $this->url->link('product/category', 'path=' . $category['category_id']);
			}
			// Level 1
			$data['collection'][] = array(
				'thumb' =>  $image,
				'name'     => $category['name'],

				'column'   => $category['column'] ? $category['column'] : 1,
				'href'     => $href
			);
		}
	

		
	
		

	

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/collection', $data));
	}
}

