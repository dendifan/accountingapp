<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accounting App</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">
</head>

<body>
    <!--Preloader Start-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--Preloader end-->

    <!-- Start: Main wrapper -->
    <div id="main-wrapper">
       

      

        <!--Start: Page main heading -->
        <div class="container-fluid page-sub-head">
            <div class="d-flex flex-nowrap justify-content-between align-items-center">
                <div class="100%">
                    <h4 class="mb-0 text-black font-weight-bold">Project Name</h4>
                    <p class="text-black fs-12 mb-0">E simplu, alegi tipul venitului, introduce datele, platesti si descarci declaratia. </p>
                </div>
                <div class="ms-3">
                    <a href="#list" class="text-black mb-3" data-bs-toggle="tab">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--End: Page main heading -->

        <!--Start: Content body -->
        <div class="content-body content-area-scroll">
            <div class="container-fluid">
                <div class="project-nav">
                    <div class="card-action card-tabs card-tabs2 w-100">
                        <ul class="nav nav-tabs style-2 w-100" id="ListViewTabLink">
                            <li class="nav-item">
                                <a href="#navpills-1" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Personal Data </a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-2" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">Income Type</a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Information Verification </a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-4" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Document Release </a>
                            </li>
                        </ul>

                        <ul class="nav nav-tabs style-2 d-none" id="BoxedViewTabLink">
                            <li class="nav-item">
                                <a href="#boxed_navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All Projects <span class="badge badge-pill shadow-primary badge-primary">154</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#boxed_navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">On Progress <span class="badge badge-pill badge-info shadow-info">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#boxed_navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Pending <span class="badge badge-pill badge-warning shadow-warning">4</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#boxed_navpills-4" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Closed <span class="badge badge-pill badge-danger shadow-danger">12</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="list">
                        <div class="tab-content project-list-group" id="ListViewTabLink">
                            <div class="tab-pane fade" id="navpills-1">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="project-main2">
                                            <span class="arrow-up-back"></span>
                                            <span class="arrow-up"></span> personal data
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="navpills-2">
                                <div class="project-main2">
                                    <span class="arrow-up-back"></span>
                                    <span class="arrow-up"></span>

                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-sm-8 mb-3 d-flex justify-content-end align-items-center">
                                            <p class="mb-0 small">I don't have the old form, please add your personal data</p>
                                        </div>
                                        <div class="col-sm-4 mb-3 d-flex justify-content-end">
                                            <a class="btn btn-primary text-nowarp" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addProjectSidebar">Update Information</a>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="basic-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-9 col-lg-9 col-sm-8">
                                                    <div class="row form-group">
                                                        <label class="col-xl-3 col-lg-3 col-sm-3 col-form-label form2">Rented Space address</label>
                                                        <div class="col-xl-9 col-lg-9 col-sm-9 right-form2">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="Assana">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group align-items-inherit">
                                                        <label class="col-xl-3 col-lg-3 col-sm-3 col-form-label form2">National Id Data</label>
                                                        <div class="col-xl-9 col-lg-9 col-sm-9 right-form2">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="form-label">Contract no</label>
                                                                    <input type="text" name="contract_no" class="form-control">
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label">Rent value</label>
                                                                    <input type="text" name="rent_value" class="form-control">
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label">Currency</label>
                                                                    <select class="default-select form-control">
                                                                        <option>RON</option>
                                                                        <option>IND</option>
                                                                        <option>USD</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="form-label">Sign date</label>
                                                                    <select class="default-select form-control">
                                                                    <option>Day</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Month</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Year</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="form-label">Contract start date</label>
                                                                    <select class="default-select form-control">
                                                                        <option>Day</option>
                                                                        <option>Option</option>
                                                                        <option>Option</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Month</option>
                                                                        <option>Option</option>
                                                                        <option>Option</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Year</option>
                                                                        <option>Option</option>
                                                                        <option>Option</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="form-label">Contract end date</label>
                                                                    <select class="default-select form-control">
                                                                        <option>Day</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Month</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                                    <label class="form-label"></label>
                                                                    <select class="default-select form-control">
                                                                        <option>Year</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-sm-4">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-xl-9 col-lg-9 col-sm-6">
                                                    <div class="row form-group mb-4">
                                                        <div class="col-xl-3 col-lg-3 col-sm-3">
                                                            <button type="submit" class="btn btn-danger w-100">Add</button>
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9 col-sm-9 pl-lg-0">
                                                            <small>Add a new rented space</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group mb-0">
                                                        <div class="col-xl-3 col-lg-3 col-sm-3">
                                                            <button type="submit" class="btn btn-primary w-100">Save</button>
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9 col-sm-9 pl-lg-0">
                                                            <small>Required fields</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-sm-6">
                                                    <div class="white-box">
                                                        <h2>Price</h2>
                                                        <h3>Cost Final</h3>
                                                        <p>129 Ron</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navpills-3">
                                <div class="project-main2">
                                    <span class="arrow-up-back"></span>
                                    <span class="arrow-up"></span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        information tab
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navpills-4">
                                <div class="project-main2">
                                    <span class="arrow-up-back"></span>
                                    <span class="arrow-up"></span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        doc release tab
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="boxed">
                        <div class="tab-content" id="BoxedViewTabLink">
                            <div class="tab-pane fade show active" id="boxed_navpills-1">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-info">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-primary">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-warning">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-danger">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-info">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="boxed_navpills-2">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-info">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-info">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="boxed_navpills-3">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-warning">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-warning">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-warning">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-warning">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="boxed_navpills-4">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="card project-boxed">
                                            <div class="img-bx">
                                                <img src="images/big/img1.jpg" alt="" class="w-100 ">
                                                <span class="badge badge-danger">Progress</span>
                                            </div>
                                            <div class="card-header align-items-start">
                                                <div>
                                                    <p class="fs-14 mb-2 text-primary">#P-000441425</p>
                                                    <h6 class="fs-18 font-w500 mb-3">
                                                        <a href="javascript:void(0);" class="text-black user-name">Build Branding Persona for Etza.id</a>
                                                    </h6>
                                                    <div class="text-dark fs-14 text-nowrap">
                                                        <i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Created on Sep 8th, 2020
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 pb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Deadline</span> :
                                                        <span class="text-black ml-2">Monday, Sep 26th 2020</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Client</span> :
                                                        <span class="text-black ml-2">Kevin Sigh</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mb-0 title">Person in charge</span> :
                                                        <span class="text-black desc-text ml-2">Yuri Hanako</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary chat-btn d-flex align-items-center">
                <span>Chat</span> 
                <div class="chat-btn-icon">
                    <i class="fas fa-comment"></i>
                </div>
            </button>
        </div>
        <!-- End: Content body -->
    </div>
    <!-- End: Main wrapper -->

    <!-----End: Chat Box------>
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <div class="chatbox-close-btn">
                <i class="fas fa-times"></i>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Chat List</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="name-first-letter">A</li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Archie Parker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Alfie Mason</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">B</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Bashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Breddie Ronan</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Ceorge Carson</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">D</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Darry Parker</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Denry Hunter</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">J</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jack Ronan</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jacob Tucker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>James Logan</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Joshua Weston</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">O</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oliver Acker</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oscar Weston</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box d-none">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                            </a>
                            <div>
                                <h6 class="mb-1">Chat with Khelesh</h6>
                                <p class="mb-0 text-success">Online</p>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fas fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fas fa-users text-primary me-2"></i> Add to close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="alerts" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notications</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                            <ul class="contacts">
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">KK</div>
                                        <div class="user_info">
                                            <span>David Nester Birthday</span>
                                            <p class="text-primary">Today</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SOCIAL</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont success">RU</div>
                                        <div class="user_info">
                                            <span>Perfection Simplified</span>
                                            <p>Jame Smith commented on your status</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">AU</div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont info">MO</div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="card mb-sm-3 mb-md-0 note_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notes</h6>
                                <p class="mb-0">Add New Nots</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                            <ul class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>New order placed..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Youtube, a video-sharing website..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>john just buy your product..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Start: Chat Box---->

    <!-- Modal Start: Add Project -->
    <div class="modal fade" id="addProjectSidebar">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="text-black font-w500">Project Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Dadeline</label>
                            <div class="cal-icon"><input type="date" class="form-control"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Client Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End: Add Project -->

    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script>
        jQuery('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            var hrefTarget = jQuery(this).attr('href');
            if (hrefTarget == '#boxed') {
                jQuery('#BoxedViewTabLink').removeClass('d-none');
                jQuery('#ListViewTabLink').addClass('d-none');

            } else if (hrefTarget == '#list') {
                jQuery('#ListViewTabLink').removeClass('d-none');
                jQuery('#BoxedViewTabLink').addClass('d-none');
            }
        });
    </script>
</body>

</html>