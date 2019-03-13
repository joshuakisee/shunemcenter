<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style type="text/css">
.tab-pane{
  height:40px;
  overflow-y:scroll;
  width:100%;
}
</style>


<div class="row">
  <div class="col-sm-12">
    <?php
    include('header.php');
    ?>
  </div>
</div>
</head>
<body>
    <br/><br/>
    <div class="container">
            <form method="POST" >
                        <div class="form-group">
                           <!-- select all announcements from db -->

<!-- <table style="width: 99%;padding-top:30px;" border="0" cellspacing="0" cellpadding="0">
 -->

<?php 
 include('config.php');
        $result=("SELECT * FROM Recreational");
        $result=mysqli_Query($db,$result);
        $count = 0;
        while($res=mysqli_fetch_array($result))
        {
            if($count==3) //three images per row
            {
               $count = 0;
            }
            if($count==0)
               print "<div class='row'>";
            print "<div class='col-sm-4'>";
            ?>
                <!--my card goes her--> 
                <p><u>Event Name:<?php echo $res['Event_name'];?></u></p>                   
                    <img src="uploads/<?php echo $res['image'];?>" width="100%" height="280"/>
 
                     <table class="table table-responsive" width="100%">
                         <tr>
                    <td colspan="2">
                        <div class="row">           
                                <div class="panel-body">
                                    <b>Description:</b>
                                        <div class="tab-pane active" id="test">
                                           <?php echo $res['description'];?>
                                        </div>
                                    
                                </div>
                        </div>
                    </td></tr>

                    <tr>
                    <td>Event Cost:</td><td><?php echo $res['Event_cost'];?></td>
                    </tr>
                    </table>
                

                    <label for="<?php echo $res['Event_cost'];?>">Book</label>
                    <input type="button" value="<?php $v=$res['R_id']; echo $v;?>" name="Recreational" 
                    id="<?php echo $res['Event_cost'];?>" data-toggle="modal" data-target="#comment" hidden>
                    
                    <br/>
                    

                <?php
            $count++;
            print "</div>";

        }
        if($count>0)
           print "</div>";
        ?>
 
</div>
</form>

<?php
include('comments.php');
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

</div>
</body>
</html>

