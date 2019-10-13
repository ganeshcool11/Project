<!DOCTYPE html>
<html>
<head>
<title>
    all new courses to enhance your knowledge and programming skills
  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="system programming course,php course,java development course,wordpress development,php project development,jsp project,android tutorials,postgresql,mysql"/>
<meta name="keywords" content="php website,php projects,java projects,java website,iot projects,android projects,jsp projects,internship projects,company in nashik for internship,placement in IT"/>
 <?php include("head.php");?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin:2%;
  text-align: center;
  font-family: arial;
 display: inline-block;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


</style>
</head>
<body>
  <?php include("header.php");?>
  <?php include("menu.php");?>
<Br>
<center><i><u><h1>YOUR COURSES</h1></u></i></center><br>

<?php

        $q=mysqli_query($con,"select * from addcourse");
        while($r=mysqli_fetch_array($q))
        {
        extract($r);
?>


<div class="card">
  <section class="animated zoomInLeft">
  <img src="admin/uploads/<?php echo $cimage; ?>" alt="<?php echo $cimage;?>" width="200px" height="200px" >
  <h2><?php echo $cname ;?></h2>
  <p class="price"><?php echo $cfees?></p>
  
  <p><a href="details.php?id=<?php echo $cid; ?>"><button><?php echo $cduration?></button></p></a>
  </section>
</div>


<?php

}
?>




<?php include("footer.php");?>
</body>
</html>
