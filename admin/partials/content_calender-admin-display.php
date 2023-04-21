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



<div class="wrap view-schedule">
<h2> View Schedule</h2>
   <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Occasion</th>
            <th>Post Title</th>
            <th>Author</th>
            <th>Reviewer</th>

        </tr>
    </thead>
    <tbody>
          
                <?php 
                global $wpdb;
                $table_name = $wpdb->prefix. 'calendar';

                $results = $wpdb->get_results("SELECT * FROM $table_name WHERE date >= DATE(NOW()) ORDER BY date");
                foreach ($results as $result){
                ?>
                <tr>
                <td><?php echo $result->id ?></td>
                <td><?php echo $result->date ?></td>
                <td><?php echo $result->occasion ?></td>
                <td><?php echo $result->post_title ?></td>
                <td><?php echo get_userdata($result->author)->user_login ?></td>
                <td><?php echo get_userdata($result->reviewer)->user_login ?></td>
                </tr>
                <?php } ?>
           
    </tbody>
   </table>
</div>