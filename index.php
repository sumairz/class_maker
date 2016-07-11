<?php
include "assets/includes/header.php";
?>

<h2>Class Template Maker</h2>
<div id="class_maker_form" class="container">
    <form method="post" action="class_maker_app/index.php">
       
       
       <div class="row">
           <div class="form-group col-lg-3">
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
           <div class="form-group col-lg-3">
               <label for="code">Select template</label> 
                <select class="form-control" name="template">
                    <option>Select a template...</option>
                    <option value='prototype'>prototype</option>
                </select>
            </div>
       </div>


        <div class="row">
            <div class="form-group col-lg-3">
                <label for="code">Author Name</label>
                <input type="text" class="form-control" name="author_name" id="author_name" />
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-lg-3">
                <label for="code">Class Name</label>
                <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Camel Case format" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-3 ">
                <label for="class_variables">Class Variables</label>
                <textarea class="form-control" rows="5" id="class_variables" name="class_variables" placeholder="See example code below to see how to enter variables"></textarea>              
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-lg-3 ">
                <label for="class_methods">Class Methods</label>
                <textarea class="form-control" rows="5" id="class_methods" name="class_methods" placeholder="See example code below to see how to enter method names"></textarea>              
            </div>
        </div>
        
        <div class="row">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</div>

<?php
include "assets/includes/footer.php";
?>