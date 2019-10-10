<section class="content-header">
    <h1>
        Slider
        <small>Listado de slides</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Slider</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
    <h3 class="box-title"></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>Imagen</th>
    <th>Titulo</th>
    <th>Subtitulo</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    if ($sliders) {

        foreach ($sliders as $s) {
            ?>
            <tr>
                <td><?php echo $s->username;?></td>
                <td><?php echo $s->email;?></td>
                <td><?php echo $s->ip_address;?></td>
                <td>
                    <p>
                        <!-- <button type="button" class="btn bg-purple margin">.btn.bg-purple</button>
                        <button type="button" class="btn bg-navy margin">.btn.bg-navy</button> -->
                        <a href="<?php echo base_url()?>Users/change/<?php echo $s->id;?>"><button type="button" class="btn bg-orange margin">Change Password</button></a>
                        <a href="<?php echo base_url()?>Users/edit/<?php echo $s->id;?>"><button type="button" class="btn bg-olive margin">Edit</button></a>
                        <a href="<?php echo base_url()?>Users/delete/<?php echo $s->id;?>"><button type="button" class="btn bg-red margin">Delete</button></a>
                    </p>
                </td>
            </tr>
<?php
        }
    }
?>
</tbody>
</table>

<p>
    <a href="<?php echo base_url();?>Users/add"><button type="button" class="btn bg-maroon btn-flat margin">Add User</button></a>
</p>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->