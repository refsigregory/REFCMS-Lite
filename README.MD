# REFCMS-Lite
Simple CodeIgniter Based Framework for Rapid &amp; Small Project (Developed for Personal Purpose)

Based with: CodeIgniter 3 & Bootstrap 3

# Feature Build-in
- `application` moved to `app-backend`, `application/views` move to `app-frontend`
- Auth Pre-Functions
- Clean URL (no index.php)
- Login & Register Template
- Dashboard Template
- DOMPDF
- DataTables

# Installation
- Edit config from `/app-backend/config/config.php`  and `/app-backend/config/databases.php`
- Run `composer install` or Extract `vendor.zip`
- Open Project from Browsers. Ex: `http://localhost/Projects/REFCMS-Lite/`
- Start with `/app-backend/controllers/Starter.php`

# Documentation
## Controller Template
```
$head['title'] = "Starter Page";
$this->load->view('_templates/header', $head);

$this->load->view('_templates/sidemenu');

$data['page'] = 'starter';
$data['name'] = $this->config->item("site_name");
$this->load->view('_templates/content', $data);

$foot['name'] = $data['name'];
$this->load->view('_templates/footer', $foot);

```
## Views Template
```
<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Page Title</b>
          	
          </div> 
          <div class="panel-body">  
            Page Content
		  </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

```

## DataTable Template
```
<?php $no = 1; ?>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>E</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php if($data != ""): ?>
<?php foreach ($data as $row): ?>
<tr>
    <td><?=$row->X;?></td>
    <td><?=$row->X;?></td>
    <td><?=$row->X;?></td>
    <td><?=$row->X;?></td>
    <td><?=$row->X;?></td>
    <td>
        <button class="btn btn-primary"></button>
    </td>
</tr>
<?php
$no++;
endforeach;
?>
<?php endif;?>
</tbody>
</table>

```

Javascript:
```
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
    function Tanya()
    {
        var tanya = confirm("Anda yakin Menghapus ini?");
        if(tanya == true)
            {
                return true;
            }else {
                return false;
            }
    }
</script>
```

## Report Usage
```
$this->load->library('pdf');

$this->pdf->setPaper('A4', 'potrait');
$this->pdf->filename = "laporan.pdf";
$this->pdf->load_view('report_pdf', $data);
```


# Changelog

## v1.0.1
 - Fix base code from v1.0.0 (not released version)
 - Update PDF Library
 - Add vendor.zip (composer libarry)