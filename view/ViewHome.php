
<style>
  header.masthead {
    background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: contain;
    width:2000px;
    margin-top:-100px;
    margin-bottom:100px;
  }
</style>
<?php
require_once("view/View.php");
include("./header.php");
class ViewHome extends View
{
    public function output()
    {
       echo' 
       <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
                    <h3 class="text-white">Welcome to '.  $_SESSION['setting_name'].' </h3>
                    <hr class="divider my-4" />
                  

                </div>
                
            </div>
        </div>
    </header>
    
    ';
    }
}
