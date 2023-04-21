<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://avinash.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Content_calender
 * @subpackage Content_calender/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h2> Schedule Content</h2>
<div class="wrap">
    <form method="post">
            <label for="date">Date: </label>
            <input type="date" name="date" id="date"  required/>

            <label for="occasion">Occasion: </label>
            <input type="text" name="occasion" id="occasion" required />

            <label for="post_title">Post Title: </label>
            <input type="text" name="post_title" id="post_title" required />

            <label for="author">Author: </label>
            <select name="author" id="author" required>
                <?php
                $users = get_users(array(
                        'fields' => array('ID', 'display_name')
                ));
                foreach ($users as $user) {
                    echo '<option value="'. $user->ID . '">' . $user->display_name . '</option>';
                }
                ?>
            </select>

            <label for="reviewer">Reviewer: </label>
            <select name="reviewer" id="reviewer" required>
                <?php
                $users = get_users(array(
                        'fields' => array('ID', 'display_name')
                ));
                foreach ($users as $user) {
                    echo '<option value="'. $user->ID . '">' . $user->display_name . '</option>';
                }
                ?>
            </select>

            <?php submit_button( 'Schedule Post' ); ?>
    </form>
</div>