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

<h1> Schedule Content</h1>
<div class="wrap">
    <form method="post">
            <label for="date">Date: </label>
            <input type="date" name="date" id="date"  required/>

            <label for="occasion">Occasion: </label>
            <input type="text" name="occasion" id="occasion" required />

            <label for="post_title">Post Title: </label>
            <input type="text" name="post_title" id="post_title" required />


            <?php submit_button( 'Schedule Post' ); ?>
    </form>
</div>