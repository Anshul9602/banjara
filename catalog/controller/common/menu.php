<?php
class ControllerCommonMenu extends Controller
{
	public function index()
	{
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(59);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {

					$childrens_data = array();

					$children1 = $this->model_catalog_category->getCategories($child['category_id']);

					foreach ($children1 as $child1) {

						// echo "<pre>";
						// print_r($child1);
						// echo "</pre>";
						$filter_data = array(
							'filter_category_id'  => $child1['category_id'],
							'filter_sub_category' => true
						);

						$childrens_data[] = array(
							'name'  => $child1['name'],
							'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child1['category_id'])
						);
					}

					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);
					$category_info = $this->model_catalog_category->getCategory($child['category_id']);
					$image = $category_info['image'];
					$children_data[] = array(

						'name'  => $child['name'],

						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
						'childrens' => $childrens_data,
						'image' => $this->model_tool_image->resize1($image, '250', '250')
					);
				}
				// echo "<pre>";
				// print_r($category['name']);
				// echo "</pre>";
				// Level 1

				if ("Shop" == $category['name']) {
					$href = $this->url->link('common/shop');
				} elseif ("Collection" == $category['name']) {
					$href = $this->url->link('common/collection');
				} elseif ("Wholesale" == $category['name']) {
					$href = $this->url->link('common/wholesale');
				} else {
					$href = $this->url->link('product/category', 'path=' . $category['category_id']);
				}
 // Get the main category image

				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $href
				);
			}
		}
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		return $this->load->view('common/menu', $data);
	}
}
