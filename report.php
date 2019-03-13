<form method="post">
<table class="table table-responsive" width="100%">
                        <thead bgcolor="#190bef">
                            <tr>
                                <td>Product Category</td>
                                <td>Client Name</td>
                                <td>Client Phone</td>
                                <td>Date</td>
                                <td>Transaction ID</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                     <tbody>
 <?php 
 include('config.php');
       // $result=("SELECT * FROM sells");

$result = "SELECT * FROM book_hall";

        $result=mysqli_Query($db,$result);
        ?>

         
       <?php
        while($res=mysqli_fetch_array($result))
        {
            ?>   
                        <tr>
                            <td><?php echo $res['product_name'];?></td>
                           
                            <td><?php echo $res['name'];?></td>

                            <td><?php echo $res['phone'];?></td>

                            <td><?php echo $res['date'];?></td>

                            <td><?php echo $res['transactionID'];?></td>

                            <td><?php echo $res['Status'];?></td>

                   
        <?php
    }
    ?>
     </tbody>
 </table>
 </form>


<?php
include('approve.php');
?>
 
<script type="text/javascript">
$("input[type='button']").click(function(){
var x=(this.value);
var demo = document.getElementById('demo');
demo.value=x;

var y=(this.id);
var z=(this.name);

var demoo = document.getElementById('demoo');
demoo.value=y;
var category = document.getElementById('category');
category.value=z;

});
</script>