<?php
include "assets/includes/header.php";
?>

<div class="container">
    <form method="post" action="class_maker_app/index.php">
        <div class="row">
            <div class="col-md-4 info_grid">
                <h3>Class Template Information</h3>
                <hr>
                <div class="row">
                    <div class="form-group col-lg-8">
                        <label for="code">Select Language</label> 
                            <select class="form-control" name="language">
                                <option>Select a language...</option>
                                <option value='javascript'>JavaScript</option>
                                <option value='php'>PHP</option>
                                <option value='java'>Java</option>
                            </select>
                        </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-lg-8">
                        <label for="code">Select template</label> 
                            <select class="form-control" name="template">
                                <option>Select a template...</option>
                                <option value='prototype'>prototype</option>
                            </select>
                        </div>
                </div>

                    <div class="row">
                        <div class="form-group col-lg-8">
                            <label for="code">Author Name</label>
                            <input type="text" class="form-control" name="author_name" id="author_name" placeholder="Author Name"/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-lg-8">
                            <label for="code">Class Name</label>
                            <input type="text" class="form-control" name="class_name" id="class_name" placeholder="e.g. FooBar" />
                        </div>
                    </div>
            </div><!-- End info_grid -->


            <div class="col-md-4 attr_grid">
                <h3>Class Attributes</h3>
                <hr>
                <div class="row">
                    <div class="form-group col-lg-8 ">
                        <label for="class_variables">Class Variables</label>
                        <textarea class="form-control" rows="5" id="class_variables" name="class_variables" placeholder="See example code below to see how to enter variables"></textarea>              
                    </div>
                </div>
            </div><!-- End attr_grid -->


            <div class="col-md-4 methods_grid">
                <h3>Class Methods</h3>
                <hr>
                <div class="row">
                    <div class="form-group col-lg-8 ">
                        <label for="class_methods">Class Methods</label>
                        <textarea class="form-control" rows="5" id="class_methods" name="class_methods" placeholder="See example code below to see how to enter method names"></textarea>              
                    </div>
                </div>
                
            </div><!-- End methods_grid -->

            <div class="col-md-10 button_grid col-md-offset-1">
                <button type="submit" class="btn btn-lg btn-block btn-primary"><span class="glyphicon glyphicon-file"></span>Create Template</button>
            </div><!-- End button_grid -->

        </div> <!-- End row -->
    </form>
</div> <!-- End Container -->

<?php
include "assets/includes/footer.php";
?>