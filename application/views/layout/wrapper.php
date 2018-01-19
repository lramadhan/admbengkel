<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('layout/head'); ?>
</head>
<body>
<?php $this->load->view('layout/navbar'); ?>  

<?php $this->load->view('layout/sidebar'); ?>
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active"><?php echo ucfirst($this->uri->segment(1)); ?></li>
      </ol>
    </div>
<?php $this->load->view($konten); ?>    
  </div>

<?php $this->load->view('layout/script'); ?>
    
</body>
</html>