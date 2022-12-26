<?php
require_once("view/View.php");
include("./header.php");
class ViewSignup extends View
{
    public function output()
    {
        echo '<div class="container-fluid">
        <form action="" id="signup-frm">
            <div class="form-group">
                <label for="" class="control-label">Firstname</label>
                <input type="text" name="first_name" required="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Email</label>
                <input type="text" name="last_name" required="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Contact</label>
                <input type="text" name="mobile" required="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Address</label>
                <textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="" class="control-label">Email</label>
                <input type="email" name="email" required="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Password</label>
                <input type="password" name="password" required="" class="form-control">
            </div>
            <button class="button btn btn-info btn-sm">Create</button>
        </form>
    </div>';
    }
}