@extends('app')
@include('partials.header')
@section('template_title')
    Login
@endsection

@section('content')

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Products</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-diamond"></i> <span class="nav-label">Featured</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Settings</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">CTA</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Scroller</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-desktop"></i> <span class="nav-label">Banner</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-table"></i> <span class="nav-label">Social Media</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-picture-o"></i> <span class="nav-label">Stats</span> </a>
                </li>
                  <li>
                    <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Editor</span> </a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                  <!--   <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form> -->
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
         <!-- <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
               
            </div> -->
        <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>TITLE</th>
                                    <th>LOCATION</th>
                                    <th>TYPE</th>
                                    <th>PRICE</th>
                                    <th>DESCRIPTION</th>
                                    <th>EXIT STRATEGY</th>
                                    <th>YIELD</th>
                                    <th>LAUNCH DATE</th>
                                    <th>COMPLETION DATE</th>
                                    <th>COUNTRY</th>
                                    <th>BROCHURE UPLOAD</th>
                                    <th>MAIN IMAGE</th>
                                    <th>IMAGE</th>
                                    <th>CONTACT NAME</th>
                                    <th>CONTACT NUMBER</th>
                                    <th>CONTACT EMAIL</th>
                                    <th>COMPANY NAME</th>
                                    <th>WEBSITE ADDRESS</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                             
                            
                                </tbody>
                               <!--  <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot> -->
                            </table>
                            <div class="table-button">
                                <ul>
                                    <li><button type="button" id="add" class="btn btn-primary dim">Add</button></li>
                                    <li> <button type="button" class="btn btn-info  dim">Type</button></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD YOUR PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form>
                        <div class="row paddingBottom">
                        <div class="form-inner">
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" id="product-single" placeholder="Product Type" required>
                            <i class="fa fa-angle-down check_list_product" aria-hidden="true"></i>
                                <ul class="product-type">
                                    <li>Product #1</li>
                                    <li>Product #2</li>
                                    <li>Product #3</li>
                                    <li>Product #4</li>
                                    <li>Product #5</li>
                                    <li>Product #6</li>
                                </ul>
                                
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" placeholder="Location" required> 
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" id="country-single" placeholder="Country" required>
                            <i class="fa fa-angle-down check_list_country" aria-hidden="true"></i> 
                                <ul class="country-type">
                                    <li>Afrikaans</li>
                                    <li>Albanian</li>
                                    <li>Amharic</li>
                                    <li>Arabic</li>
                                    <li>Armenian</li>
                                    <li>Azerbaijani</li>
                                    <li>Basque</li>
                                    <li>Belarusian</li>
                                    <li>Bengali</li>
                                    <li>Bosnian</li>
                                    <li>Bulgarian</li>
                                    <li>Catalan</li>
                                    <li>Cebuano</li>
                                    <li>Chichewa</li>
                                    <li>Chinese</li>
                                    <li>Corsican</li>
                                    <li>Croatian</li>
                                    <li>Czech</li>
                                    <li>Danish</li>
                                    <li>Dutch</li>

                                </ul> 
                            </div>
                        </div>
                            </div>
                        <div class="row paddingBottom">
                            <div class="form-inner">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" id="price-single" placeholder="Price Range" required>
                                <i class="fa fa-angle-down check_list_price" aria-hidden="true"></i>
                                    <ul class="price-range">
                                        <li>$0 to $10,000</li>
                                        <li>$10,000 to $20,000</li>
                                        <li>$20,000 to $30,000</li>
                                        <li>$30,000 to $40,000</li>
                                        <li>$40,000 to $50,000</li>
                                        <li>$50,000 to $60,000</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" placeholder="Yield" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" placeholder="Exit Strategy" required>
                                </div>
                            </div>
                        </div>
                        <div class="row paddingBottom">
                            <div class="form-inner">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" id="completion_date" placeholder="Completion Date" required>
                                        
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" id="launch_date" placeholder="Launch Date" required>
                            
                                </div>
                                <div class="col-sm-4">
                                    <!-- <div id="borderBottom">
                                        <div class="col-sm-7">
                                        <h3 class="upload-images">Upload Brochure *</h3>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row paddingBottom">
                            <div class="form-inner">
                                <div class="col-sm-12">
                                     <textarea class="form-control txetara" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-inner">
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" placeholder="Contact Name" required="">
                            </div>
                            <div class="col-sm-4">
                                <input id="phone" type="tel" class="form-control black" placeholder="Contact Number" required="">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" placeholder=" Contact Email" required="">
                            </div>
                        </div>
                        
                        <div class="row paddingBottom">
                            <div class="form-inner">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" placeholder="Company Name" required="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" placeholder="Website Address" required="">
                                </div>
                                <div class="col-sm-4">

                                </div>
                            </div>
                        </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection