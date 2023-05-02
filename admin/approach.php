<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Our Approach</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>ID</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM approach order by id desc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>

                                            <tr>

                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['description'] ?></td>

                                                <td style="display: inline-flex;">
                                                    <a href="approach_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-primary">Edit</a>
                                                </td>

                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>