<div class="container">


    <?php

    foreach ($portfolios as $key => $value) {

        echo '
                
                    <div class="col-md-3 portfolio-wrapper">
                        <form action="' . site_url('Admin/Update') . '" method="post" enctype="multipart/form-data">
                        <input type="text" name="portfolioId" value="' . $value["id"] . '">
            <img src="' . site_url($value['logo']) . '" alt="">
            <div class="form-group">
                <label for="exampleInputFile">Change image</label>
                <input type="file" name="logo">
                <p></p>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name"
                           value="' . $value["name"] . '">
                </div>
                <div class="form-group">
                    <input type="text"  class="form-control" name="link" placeholder="Link"
                           value="' . $value["link"] . '">
                </div>
                <div class="form-group">
                    <div class="col-md-5 no-padding">
                        <label>Responsive:
                            <input type="checkbox" name="responsive" placeholder="Link">
                        </label>
                    </div>
                    <div class="col-md-5 no-padding">
                        <label>Mobile:
                            <input type="checkbox" name="mobile" placeholder="Link">
                        </label>
                    </div>
                </div>
                <a class="btn btn-danger full-button" href="' . site_url("Admin/deletePortfolio/" . $value["id"]) . '">Delete</a>
                <button type="submit" class="btn btn-primary full-button" >Update</button>
            </div>
                </form>

    </div>
                
            ';


    }

    ?>


