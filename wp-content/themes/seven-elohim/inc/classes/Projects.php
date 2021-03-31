<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 11.03.18
 * Time: 16:02
 */

namespace SEVENELOHIM;


/**
 * Class Projects
 *
 * All the Projects related Stuff. You have to do something with the Projects? Chances are high,
 * that you will find it here.
 *
 * @package SEVENELOHIM
 */
class Projects
{

    /**
     * Projects constructor.
     */
    function __construct()
    {
    }

	/**
	 * Get all Projects from Backend
	 *
	 * @param null $args
	 *
	 * @return \WP_Query
	 */
    private function getAllProjectsData($args = null) {

        $projectArgs = array(
            'post_type' => 'projects'
        );

        if ($args !== null && is_array($args)) {

            foreach ($args as $index => $arg) {
                $projectArgs[$index] = $arg;
            }
        }


        $query =  new \WP_Query( $projectArgs );

        return $query;

    }

    /**
     * Get all the Project IDs, which you want to laod.
     *
     * @return array
     */
    public function getAllFrontpageProjectsIds(){
        $allProjects = $this->getAllProjectsData();
        $allProjects = $allProjects->posts;

        $projectIds = array();
        foreach ($allProjects as $index => $allProject) {
            $projectIds[] = $allProject->ID;
        }

        return $projectIds;
    }

    /**
     * Get one single Project.
     *
     * You get basic information (id, title, image, url), if you set the $extended flag to false.
     * You get more information (basic + images, captions, project-text), if you set the the $extended flag to true.
     *
     * @param $project_id
     * @param bool $extended
     * @return mixed
     */
    public function getProjectById($project_id, $extended = false){

        $projectData = $this->getAllProjectsData(array('p'=>$project_id));

        if ($projectData->found_posts > 0) {
            return $this->renderSingleProject($projectData->posts[0], $extended);
        } else {
            return false;
        }
    }


    /**
     * Get all projects in a category
     *
     * If $category_id equals to -1, then all projects will be returned.
     *
     * @param int $category_id
     * @param bool $extended
     * @return array
     */
    public function getProjectsByCategory($category_id = -1, $extended = false){

        if ($category_id >= 0){

            $args = array(
              'cat' => $category_id,
            	'post_type' => 'projects'
            );

        } else {
            $args = array();
        }

        $projectData = $this->getAllProjectsData($args);

        $projects = array();
        if($projectData->found_posts >= 0) {
            foreach ($projectData->posts as $index => $projectSingle) {
                $projects[] = $this->renderSingleProject($projectSingle, $extended);
            }
        }

        return $projects;

    }

    /**
     * Renders a single project in a nice format with all needed fields.
     *
     * If you need a extended version with text/content and images, then just set $extended flag to true
     *
     * @param $single_object
     * @param bool $extended
     * @return mixed
     */
    private function renderSingleProject($single_object, $extended = false){

        $project['id'] = $single_object->ID;
        $project['title'] = $single_object->post_title;
        $project['slug'] = $single_object->post_name;
        $project['image'] = get_the_post_thumbnail_url($single_object->ID, '2000w');
        $project['image_medium'] = get_the_post_thumbnail_url($single_object->ID, 'medium');
        $project['image_srcset'] = wp_get_attachment_image_srcset(get_post_thumbnail_id($single_object->ID));
        $project['url'] = get_the_permalink($single_object->ID);

        if ($extended) {
            $project['text'] = get_post_field('post_content', $single_object->ID);

            $images = get_field('project_images', $single_object->ID);

            $processedImages = array();
            if(is_array($images)){
                foreach ($images as $key => $image) {
                    $processedImages[$key]['image_max'] = wp_get_attachment_image_src($image['project_image'], '2000w');
                    $processedImages[$key]['image_max'] = $processedImages[$key]['image_max'][0];

                    $processedImages[$key]['image_medium'] = wp_get_attachment_image_src($image['project_image'], 'medium');
                    $processedImages[$key]['image_medium'] = $processedImages[$key]['image_medium'][0];

                    $processedImages[$key]['image_srcset'] = wp_get_attachment_image_srcset($image['project_image']);

                    $processedImages[$key]['caption'] = $image['project_image_description'];
                }
            } else {
                $processedImages = false;
            }
            $project['images'] = $processedImages;
        }

        return $project;
    }

    /**
     * Get all Categories for the Projects
     *
     * @return array|int|\WP_Error
     */
    public function getProjectCategories(){

        $taxonomy = 'category';
        $terms = get_terms($taxonomy);

        return $terms;
    }



}