<?php
        if(is_admin())
        {
            Display_Admin_Page();
        }
    
     function Display_Admin_Page(){
        global $shortcode_tags;

        ?>
        <div class="wrap">
            <div id="icon-options-general" class="icon32"><br></div>
            <h2>Available Shortcodes</h2>
            <div class="section panel">
                <p>Use this shortcode for display language section.</p>
            <table class="widefat importers">
                <tr><th><strong>Shortcodes</strong></th></tr>
                <tr><td>For use in a theme template (usually header.php)</td><td><?php echo "&lt;?php echo do_shortcode('[Language-Header]'); ?&gt;"; ?></td></tr>
        <?php

            foreach($shortcode_tags as $code => $function)
            {
                if($code =='Language-Header'){
                    ?>
                    <tr><td>For use in a post or page.</td><td>[<?php echo $code; ?>]</td></tr>
                   
                <?php
                }
            }
            
        ?>

            </table>
            </div>
        </div>
        <?php
    }

