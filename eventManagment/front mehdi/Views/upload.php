<?php
$file=$_FILES['image'];
$filename=$_FILES['image']['name'];
$filetmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['size'];
$fileerror=$_FILES['image']['error'];
$filetype=$_FILES['image']['type'];
$fileext= explode('.',$filename);
$fileactualext=strtolower(end($fileext));
$allowed =array('jpg','jpeg','png','pdf') ;
if(in_array($fileactualext,$allowed))
{
if($fileerror===0)
{
    if($filesize<50000)
    {
$filenamenew=uniqid('',true).".".$fileactualext;
$filedest='up1/'.$filenamenew;
move_uploaded_file($filetmpname,$filedest);

    }
    else{
        echo"Your file is big";
    
    }
}
else{
    echo "error";
}
}
else{
    echo"You cannot";

}
?>
  