<?php
if (isset($_POST['book'])) {
 //Our custom function.
    function generatePIN($digits = 4){
        $i = 0; //counter
        $pin = ""; //our default pin is blank.
        while($i < $digits){
            //generate a random number between 0 and 9.
            $pin .= mt_rand(0, 9);
            $i++;
        }
        return $pin;
    }
     
    //If I want a 4-digit PIN code.
    $pin = generatePIN();
    
   

    $product_id=$_POST['demo'];
    $product_name=$_POST['category'];
    $Amount=$_POST['demoo'];
    $Caleder=$_POST['date'];
    $f_name=$_POST['f_name'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
            
            
                 $sql="INSERT into book_hall(transactionID,Amount,name,phone,email,date,Status,product_id,product_name)
                values('$pin','$Amount','$f_name','$Phone','$Email','$Caleder','pending','$product_id','$product_name')";
                $query=mysqli_Query($db,$sql);
                if($query){
                echo '<script type="text/javascript">
                  
                        alert("\u2022Open Mpesa menu in your Phone"+"\\n"+"\u2022go to Lipa na M-PESA"+"\\n"+"\u2022Pay Bill"+"\\n"+"\u2022Enter your Trasaction ID as Business no"+"\\n"+"\u2022Then Amount.");
                        </script>';
                echo "Transaction ID: $pin";
                }
                else{
                echo"<script>
                alert('no record added')
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
                <h4 align="left"><font color="#ffffff">Book And PayOnline</font></h4>
            </div>
            <div class="modal-body"> 
               
             <div class="table-responsive"> 
                
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                  <?php
                                    include('date.php');
                                 ?>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="f_name">Full Name</label>
                            <input type="text" class="form-control" name="f_name" required  placeholder="Client Name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Phone">Phone Number</label>
                            <input type="number" class="form-control" name="Phone" required  placeholder="0705118708">
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Email">Email Address</label>
                            <input type="Email" class="form-control" name="Email" required  placeholder="example@example.com">
                        </div>
                    </div>
                </div>  

                 <label for="demoo">Cost</label>
                 <input type="text" name="demoo" value="" id="demoo" readonly>
               
                    <input type="text" name="demo" value="" id="demo" hidden>
                    <input type="text" name="category" value="" id="category" hidden>
                       
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="book" class="btn btn-primary">Book</button>
            </div>
        </div>
        </form>
    </div>
</div>
