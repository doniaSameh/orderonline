<?php
require_once("view/View.php");
include("./header.php");
class ViewCart extends View
{
    public function output()
    {
        echo '  <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
                    <h3 class="text-white">Cart List</h3>
                    <hr class="divider my-4" />
                </div>
                
            </div>
        </div>
    </header>
<section class="page-section" id="menu">
    <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <div class="sticky">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8"><b>Card</b></div>
                            <div class="col-md-4 text-right"><b>Total</b></div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}