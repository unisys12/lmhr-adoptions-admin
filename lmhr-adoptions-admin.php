<?php

/*
Plugin Name: LMHR Adoptions Admin
Plugin URI: https://github.com/unisys12/lmhr-adoptions-admin.git
Description: Wordpress plugin to view and manage adoption applications
Author: Phillip Jackson
Author URI: https://github.com/unisys12/
License: GPL2
Version: 0.0.1
*/

/*  Copyright 2014-2018 Phillip Jackson

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}
class Lmhr_Applications extends WP_LIST_TABLE
{
    function get_columns()
    {
        $columns = array(
            'name'      => 'Adoptors Name',
            'address'   => 'Address',
            'cell'      => 'Cell',
            'email'     => 'Email',
            'contact_window' => 'Best Time to Contact',
            'employment_status' => 'Employment Status'
        );
        return $columns;
    }

    function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = array();
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $this->example_data;;
    }

    var $example_data = array(
        array('id' => '5', 'name' => 'Test User', 'age' => '25', 'address' => '18 CR 626, Corinth, MS; 38834', 'cell' => '555-555-5555', 'work' => '555-555-5555', 'email' => 'test@example.test', 'contact_window' => '3pm - 7pm W F', 'employment_status' => 'unemployed', 'occupation' => 'Stay at Home Mom', 'employeer_name' => '', 'work_schedule' => '', 'own_or_rent' => '0', 'landlord_name' => NULL, 'landlord_phone' => NULL, 'fence_desc' => '', 'number_in_household' => '0', 'adult_age_list' => '', 'child_age_list' => '', 'allergies' => '', 'alone_precautions' => '', 'sleeping_arrangments' => '', 'time_together' => '', 'time_alone' => '', 'pet_members' => '', 'spayed' => '', 'euthanasia' => '', 'exercise' => '', 'obedience_classes' => '0', 'veterinarian' => '0', 'vet_name' => NULL, 'vet_number' => NULL, 'vet_city' => NULL, 'vet_state' => NULL, 'puppy_name' => 'Rover'),
        array('id' => '7', 'name' => 'unisys12', 'age' => '127', 'address' => '41 Baker St, St Louis, MO; 55555', 'cell' => '555-555-5555', 'work' => '555-555-5555', 'email' => 'test@ex.test', 'contact_window' => '3pm - 7pm M W F', 'employment_status' => 'full', 'occupation' => 'Tester', 'employeer_name' => 'Testing Inc', 'work_schedule' => 'M-F 8am - 6pm', 'own_or_rent' => '0', 'landlord_name' => NULL, 'landlord_phone' => NULL, 'fence_desc' => '', 'number_in_household' => '0', 'adult_age_list' => '', 'child_age_list' => '', 'allergies' => '', 'alone_precautions' => '', 'sleeping_arrangments' => '', 'time_together' => '', 'time_alone' => '', 'pet_members' => '', 'spayed' => '', 'euthanasia' => '', 'exercise' => '', 'obedience_classes' => '0', 'veterinarian' => '0', 'vet_name' => NULL, 'vet_number' => NULL, 'vet_city' => NULL, 'vet_state' => NULL, 'puppy_name' => 'Rover<script alert(\\\'Hello\\\'); </script>'),
        array('id' => '10', 'name' => 'Test', 'age' => '21', 'address' => '18 asdonwoner, aognegor. owegoe', 'cell' => '555-555-5555', 'work' => '555-555-5555', 'email' => 'test@ex.test', 'contact_window' => '3pm - 7pm MWF', 'employment_status' => 'full', 'occupation' => 'tester', 'employeer_name' => 'test', 'work_schedule' => 'M-F 8-5', 'own_or_rent' => '0', 'landlord_name' => NULL, 'landlord_phone' => NULL, 'fence_desc' => '', 'number_in_household' => '0', 'adult_age_list' => '', 'child_age_list' => '', 'allergies' => '', 'alone_precautions' => '', 'sleeping_arrangments' => '', 'time_together' => '', 'time_alone' => '', 'pet_members' => '', 'spayed' => '', 'euthanasia' => '', 'exercise' => '', 'obedience_classes' => '0', 'veterinarian' => '0', 'vet_name' => NULL, 'vet_number' => NULL, 'vet_city' => NULL, 'vet_state' => NULL, 'puppy_name' => 'Rover'),
        array(
            'id' => '11', 'name' => 'Phillip Jackson', 'age' => '46', 'address' => '18 CR 626, Corinth, MS, 38834', 'cell' => '662-284-6587', 'work' => '662-287-8829', 'email' => 'unisys12@gmail.com', 'contact_window' => '3pm - 7pm M-F', 'employment_status' => 'full', 'occupation' => 'Copier Tech', 'employeer_name' => 'Rayco Inc', 'work_schedule' => 'M-F 8am to 5pm', 'own_or_rent' => '1', 'landlord_name' => '', 'landlord_phone' => '', 'fence_desc' => 'Yes, Wood fence with a hog wire fence along the back section.', 'number_in_household' => '3', 'adult_age_list' => '46, 44, 21', 'child_age_list' => '', 'allergies' => 'No', 'alone_precautions' => 'Yes.', 'sleeping_arrangments' => 'In our bedroom', 'time_together' => 'In our backyard or inside with us.', 'time_alone' => '4-8 hrs a day through the week. Someone is always home on the weekends.', 'pet_members' => '', 'spayed' => '', 'euthanasia' => '', 'exercise' => 'Two to three walks a day, weather permitting.', 'obedience_classes' => '1', 'veterinarian' => '1', 'vet_name' => 'Vetmeds', 'vet_number' => '555-555-5555', 'vet_city' => 'Corinth', 'vet_state' => 'MS', 'puppy_name' => 'Scoobs'
        )
    );

    function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'id':
                return $item['id'];
            case 'name':
                return $item['name'];
            case 'age':
            case 'address':
                return $item['address'];
            case 'cell':
                return $item['cell'];
            case 'work':
            case 'email':
                return $item['email'];
            case 'contact_window':
                return $item['contact_window'];
            case 'employment_status':
                return $item['employment_status'];
            case 'occupation':
            case 'employer_name':
            case 'work_schedule':
            case 'own_or_rent':
            case 'landlord_name':
            case 'landlord_phone':
            case 'fence_desc':
            case 'number_in_household':
            case 'adult_age_list':
            case 'child_age_list':
            case 'allergies':
            case 'alone_precautions':
            case 'sleeping_arrangments':
            case 'time_together':
            case 'time_alone':
            case 'pet_members':
            case 'spayed':
            case 'euthanasia':
            case 'obedience_classes':
            case 'veterinarian':
            case 'vet_name':
            case 'vet_number':
            case 'vet_city':
            case 'vet_state':
            case 'puppy_name':
            default:
                return print_r($item, true); //Show the whole array for troubleshooting purposes 
        }
    }
}

function my_add_menu_items()
{
    add_menu_page('LMHR Applications Admin', 'LMHR Applications Admin', 'activate_plugins', 'my_list_test', 'my_render_list_page');
}
add_action('admin_menu', 'my_add_menu_items');

function my_render_list_page()
{
    $lmhr_current_apps = new Lmhr_Applications();
    echo '<div class="wrap"><h2>LMHR Adoption Applications</h2>';
    $lmhr_current_apps->prepare_items();
    $lmhr_current_apps->display();
    echo '</div>';
}
