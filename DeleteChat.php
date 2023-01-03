<?php
    require_once "error.php";
    require_once "DatabaseConnection/Connections.php";


    if(isset($_GET['chat_id']) && isset($_GET['user_id']))
    {
        $connection = ConnectToDB();
        $user_id = $_GET['user_id'];
        $id = $_GET['chat_id'];
        $query = "update tbl_personal_chats set is_enabled = 'n', modified_by = $user_id where personal_chat_id = $id";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: OriginalChat.php");
    }
    else
        error("server error","homePage.php");
?>    if(Request["chat_id"] != null && Request["user_id"] != null)
{
    MySqlConnection connection = ConnectToDB();
    connection.Open();
    string user_id = Request["user_id"];
    string id = Request["chat_id"];
    string query = "update tbl_personal_chats set is_enabled = 'n', modified_by = "+user_id+" where personal_chat_id = "+id+"";
    MySqlCommand command = new MySqlCommand(query,connection);
    command.ExecuteNonQuery();
    CloseConnection(connection);
    Response.Redirect("OriginalChat.aspx");
}
else
    Response.Write("<script>alert('server error');document.location='homePage.aspx'</script>");

    
    
