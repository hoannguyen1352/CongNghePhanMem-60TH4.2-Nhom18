<?php
include_once('./assets/layouts/header.php');
?>
<div id="main">
    <div class="container">
    <form class="form-inline">
        <div class="form-group">
        <h1 class="" style="text-align:left"></br>Customers</h1>
        <a name="" id="" class="btn btn-primary ml-3 mt-5" href="index.php?controller=customers&action=create" role="button">Add <i class="fas fa-plus"></i></a>
        </div>
    </form>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(isset($data))
            {
                foreach($data as $customers)
                {
                    echo '<tr>';
                    echo '<td>'.$customers['id'].'</td>';
                    echo '<td>'.$customers['name'].'</td>';
                    echo '<td>'.$customers['phone'].'</td>';
                    echo '<td>'.$customers['total'].'</td>';
                    echo '<td><a href="./index.php?controller=customers&action=update&id='.$customers['id'].'" role="button"><i class="fas fa-pen ml-3"></i></a></td>';
                    echo '</tr>';
                }
            }
            ?>               
            </tbody>
        </table>
    </div>
</div>