        <header class="bg-dark py-1" style="background-image: url('<?php echo esc_html($url[0]); ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php wp_title(); ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php bloginfo('name'); if(is_front_page()){ echo ' - '; bloginfo('description'); } ?></p>
                </div>
            </div>
        </header>