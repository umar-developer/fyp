<?php  include('includes/header.php');

$uid = $_SESSION['u_id'];

?>


<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">


                <div class="header text-left ">
                    <h3 class="font-weight-bold text-dark bg-warning p-4 mb-3">Complaint Here</h3>
                </div>
                <form action="complaint-process.php" method="post">
                    <div class="form-group">

                    <input type="hidden" value="<?php echo $uid ?>" class="form-control" name="uid">
                        <label for="" class="text-left font-weight-bold">Compose</label>
                        <textarea name="comp" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-warning btn-block font-weight-bold" name="submit">submit</button>
                </form>
            </div>


           <?php   $select = mysqli_query($con , "select * from complaint where u_id = $uid");
           
                
           
           
           ?>

            <div class="col-md-5 offset-md-1">
                <table class="table">
                <?php while($row = mysqli_fetch_array($select)){ ?>
               <tr>
               <?php if($row['status']==1){ ?>
                   <th>Pending </th>
                    <?php }elseif($row['status']==2){?>  
                        <th> Approved </th> 
                          <?php } ?>
               </tr>
                   <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>



