<?php
 include "style.php";
    spl_autoload_register(function($class){
        include "../class/".$class.".php";
    });
?>



<body>
            <h1>CRUD with PDO - Template & Database Design</h1> <hr>
            <h3><a href="index.php">Create New</a></h3>
            
    <div class="container">
      
    <section class="mainleft">
    <?php
//-----------------------PHP READ DATA CONTENT CODE----------------------\\
$user = new student;
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $dep  = $_POST['dep'];
    $age  = $_POST['age'];

    $user->setName($name);
    $user->setDep($dep);
    $user->setAge($age);

    if($user->insert()){
        echo "<span class='insert'> Data Inserted Successfully... </span>";
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dep  = $_POST['dep'];
    $age  = $_POST['age'];

    $user->setName($name);
    $user->setDep($dep);
    $user->setAge($age);

    if($user->update($id)){
        echo "<span class='insert'> Data Updated Successfully... </span>";
    }
}
//----------------------------------------------------------------------\\
?>
<?php
if (isset($_GET['action']) && $_GET['action']=='delete' ){
    $id = $_GET['id'];
    if($user->delete($id)){
        //------------
    }
}
?>

<?php
if (isset($_GET['action']) && $_GET['action']=='update' ){
    $id = $_GET['id'];
    $result = $user->readById($id);

?>
        <form action="" method="POST">
      
            <table>
            <input type="hidden" name="id" value="<?php echo $result['id'] ; ?>" />

                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" value="<?php echo $result['name'] ; ?>" required /></td>
                </tr>
                <tr>
                    <td>Department :</td>
                    <td><input type="text" name="dep" value="<?php echo $result['dep'] ; ?>" required /></td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td><input type="text" name="age" value="<?php echo $result['age'] ; ?>" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="submit" /></td>
                </tr>
            </table>
        </form>

<?php } else{ ?>
    <form action="" method="POST">
            <table>
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" placeholder="Enter your name.." required /></td>
                </tr>
                <tr>
                    <td>Department :</td>
                    <td><input type="text" name="dep" placeholder="Enter your Dept.." required /></td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td><input type="text" name="age" placeholder="Enter your age.." required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="create" value="submit" /></td>
                </tr>
            </table>
        </form>

<?php } ?>

    </section>

    <section class="mainright">
        <table class="tblone">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Depertment</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
<?php
$i=0;
 foreach ($user->readAll() as $key => $value) {
    $i++;
?>
            <tr>
               <td><?php echo $i; ?></td>
               <td><?php echo $value['name'];?></td>
               <td><?php echo $value['dep'];?></td>
               <td><?php echo $value['age'];?></td>
               <td>

               <?php echo "<a href='index.php?action=update&id=".$value['id']."'>Edit</a>"; ?> ||
               <?php echo "<a href='index.php?action=delete&id=".$value['id']."' onclick='return confirm(\"Are you sure delete data...?\")'>Delete</a>"; ?>
               </td>
            </tr>
 <?php } ?>
        </table>
    </section>
</div>
<hr>
<h3>Design and developed by Rakib</h3>

</body>

