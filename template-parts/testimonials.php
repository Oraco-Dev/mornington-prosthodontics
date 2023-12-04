<?php

?>

<div id="testimonial-container">
    <?php
    // Define the custom field names
    $customFieldNames = array('testimonial1', 'testimonial2', 'testimonial3');

    // Loop through custom fields and display testimonials
    foreach ($customFieldNames as $index => $fieldName) {
        // Retrieve testimonial value from custom field
        $testimonial = get_post_meta(get_the_ID(), $fieldName, true);

        // Output testimonial as a div
        echo '<div id="' . esc_attr($fieldName) . '" class="testimonial"><p>' . esc_html($testimonial) . '</p></div>';
    }
    ?>

    <button id="prevTestimonialButton" style="display: none;"><img
            src="http://morningtonpros.local/wp-content/uploads/2023/12/icons8-chevron-50-1.png" /></button>
    <button id="nextTestimonialButton" style="display: none;"><img
            src="http://morningtonpros.local/wp-content/uploads/2023/12/icons8-chevron-50.png" /></button>
</div>