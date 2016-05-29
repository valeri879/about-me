<div class="portfolio contents">

    <h1 class="portfolio-type"></h1>

    <!-- Swiper -->
    <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper">

            <?php
            foreach ($portfolios as $key => $value) {

//                print_r($value);

                $html = '<div class="swiper-slide swiper-slide-active" ><a href = "' . $value["link"] . '" >
                        <img src = "' . site_url($value["logo"]) . '" alt = "Logo" ><span > myauto . ge</span ></a >
                    <div class="icons-container" >';

                if ($value["desktop"]) {
                    $html .= '<i class="fa fa-desktop" ></i >';
                }
                if ($value["tablet"]) {
                    $html .= '<i class="fa fa-laptop" ></i >';
                }
                if ($value["mobile"]) {
                    $html .= '<i class="fa fa-tablet" ></i >';
                }

                $html .= '</div >
                </div >';

                echo $html;
            } ?>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"><span
                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                class="swiper-pagination-bullet"></span></div>
    </div>
    <div class="clear"></div>
</div>