@extends('layouts.admin')
@section('main-page')
<div class="col_3">
    <div class="col-md-3 widget widget1" onclick="window.location.href = './admin/createWhyChooseUs';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
                <h5><strong>Legal Status</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href='./adminAboutPageEditor';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>At A Glance</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href='./adminServicePageEditor';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>Features</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href = './admin/createProduct';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
                <h5><strong>Projects</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div><br>
<div class="col_3">
    <div class="col-md-3 widget widget1" onclick="window.location.href='./adminGalleryImageTypePageEditor';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-money user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>Gallery Category</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href='./adminGalleryPageEditor';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-money user2 icon-rounded"></i>
            <div class="stats">
                <h5><strong>Gallery</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href='./admin/createClient';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>Partners</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1" onclick="window.location.href = './createNews';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
                <h5><strong>News</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12" style="padding: 0px; margin-top:20px;">
    <div class="col-md-3 widget widget1" onclick="window.location.href = './admin/ManageAppPrivacyPolicy';">
        <div class="r3_counter_box" style="cursor: pointer;">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
                <h5><strong>Policy</strong></h5>
                <span>Page Editor</span>
            </div>
        </div>
    </div>
</div>

@endsection