<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM team where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image          = $row['image'];
        $name           = $row['name'];
        $designation    = $row['designation'];
        $facebook       = $row['facebook'];
        $twitter        = $row['twitter'];
        $instagram      = $row['instagram'];
        $linkedin       = $row['linkedin'];
    }
}
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: Our Services</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="team_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" name="choosefile" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Name" value="<?php echo $name ?>" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Designation</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Designation" value="<?php echo $designation ?>" name="designation">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Facebook</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your Facebook Link Here" value="<?php echo $facebook ?>" name="facebook">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Twitter</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your Twitter Link Here" value="<?php echo $twitter ?>" name="twitter">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Instagram</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your Instagram Link Here" value="<?php echo $instagram ?>" name="instagram">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>LinkedIn</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Your LinkedIn Link Here" value="<?php echo $linkedin ?>" name="linkedin">
                                </div>
                            </div>


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>