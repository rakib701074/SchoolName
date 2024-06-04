




if(isset($_POST['DeleteUserbtn']))
{
    $userid = $_POST['delete_id'];

    $query = "DELETE FROM students WHERE id='$userid' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "User Deleted Successfully";
        header("Location: table.blade.php");
    }
    else
    {
        $_SESSION['status'] = "User Deleting Failed";
        header("Location: table.blade.php");
    }
}