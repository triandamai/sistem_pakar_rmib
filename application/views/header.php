<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul;?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" />
  </head>
  <style>
    #modal-kotak{
	margin:5% 30% 30% 30%;
	width: 500px;	
	height: 200px;
	position: absolute;
	position:fixed;
	z-index:1002;
	display: none;
	background: white;	
}
#atas{
	font-size: 15pt;
	padding: 20px;	
	height: 80%;
}
#bawah{
	background: #fff;
}
 

#bg{
	opacity:.80;
	position: absolute;
	display: none;
	position: fixed;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: #000;
	z-index:1001;
	opacity: 0.8;
}

  </style>
  <body>