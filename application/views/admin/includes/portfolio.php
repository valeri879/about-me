<div class="container">


    <?php

    foreach ($portfolios as $key => $value) {

        $html = '
                
                    <div class="col-md-3 portfolio-wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <img src="' . site_url($value['logo']) . '" alt="">
            <div class="form-group">
                <label for="exampleInputFile">Change image</label>
                <input type="file" id="exampleInputFile">
                <p></p>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name"
                           value="' . $value["name"] . '">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Link"
                           value="' . $value["link"] . '">
                </div>
                <div class="form-group">
                    <div class="col-md-5 no-padding">
                        <label>Responsive:
                            <input type="checkbox" placeholder="Link">
                        </label>
                    </div>
                    <div class="col-md-5 no-padding">
                        <label>Mobile:
                            <input type="checkbox" placeholder="Link">
                        </label>
                    </div>
                </div>
                <button type="button" class="btn btn-danger full-button">Delete</button>
                <button type="button" class="btn btn-primary full-button">Update</button>
            </div>
        </form>
    </div>
                
            ';

        echo $html;

    }

    ?>


    <!--    <div class="col-md-3 portfolio-wrapper">
            <form action="" method="post">
                <img src="http://localhost/about-me/assets/img/logos/myauto.png" alt="">
                <div class="form-group">
                    <label for="exampleInputFile">Change image</label>
                    <input type="file" id="exampleInputFile">
                    <p></p>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name"
                               value="Myauto.ge">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Link"
                               value="http://www.myauto.ge/">
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 no-padding">
                            <label>Responsive:
                                <input type="checkbox" placeholder="Link">
                            </label>
                        </div>
                        <div class="col-md-5 no-padding">
                            <label>Mobile:
                                <input type="checkbox" placeholder="Link">
                            </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger full-button">Delete</button>
                    <button type="button" class="btn btn-primary full-button">Update</button>
                </div>
            </form>
        </div>-->

    <!--basic mark up-->
    <!--<div class="col-md-3 portfolio-wrapper">
        <img src="http://localhost/about-me/assets/img/logos/myauto.png" alt="">
        <div class="form-group">
            <label for="exampleInputFile">Change image</label>
            <input type="file" id="exampleInputFile">
            <p></p>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name" value="Myauto.ge">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Link"
                       value="http://www.myauto.ge/">
            </div>
            <div class="form-group">
                <div class="col-md-5 no-padding">
                    <label>Responsive:
                        <input type="checkbox" placeholder="Link">
                    </label>
                </div>
                <div class="col-md-5 no-padding">
                    <label>Mobile:
                        <input type="checkbox" placeholder="Link">
                    </label>
                </div>
            </div>
            <button type="button" class="btn btn-danger full-button">Delete</button>
            <button type="button" class="btn btn-primary full-button">Update</button>
        </div>
    </div>-->
