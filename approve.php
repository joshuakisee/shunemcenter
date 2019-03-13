<?php
if (isset($_POST['approve'])) {
 
  $transactionid=$_POST['demo'];
            
                 $sqll="UPDATE book_hall set Status='APPROVED' where  transactionID='$transactionid'";
                $query=mysqli_Query($db,$sqll);
                if($query){
                echo '<script type="text/javascript">
                        alert("Update successful");
                        </script>';
                }
                else{
                echo"<script>
                alert('Error Try Again')
                </script>";
                }
            
        

    
}
?>

<?php
if (isset($_POST['denay'])) {
 
  $transactionid=$_POST['demo'];
            
                 $sqll="UPDATE book_hall set Status='Denay' where  transactionID='$transactionid'";
                $query=mysqli_Query($db,$sqll);
                if($query){
                echo '<script type="text/javascript">
                        alert("Update successful");
                        </script>';
                }
                else{
                echo"<script>
                alert('Error Try Again')
                </script>";
                }
            
        

    
}
?>

<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post">
            
        <div class="modal-content">
            <div class="modal-header navbar-custom">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 align="left"><font color="#ffffff">Take Action</font></h4>
            </div>
            <div class="modal-body"> 
               
             <div class="table-responsive"> 
                
                 <label for="demoo">Booked By</label>
                 <input type="text" name="demoo" value="" id="demoo" readonly>
               
                    <label for="demoo">Transaction ID</label>
                    <input type="text" name="demo" value="" id="demo" readonly>

                    <input type="text" name="category" value="" id="category" hidden>
                       
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="denay" class="btn btn-primary">Reject</button>
                <button type="submit" name="approve" class="btn btn-primary">Approve</button>
            </div>
        </div>
        </form>
    </div>
</div>
