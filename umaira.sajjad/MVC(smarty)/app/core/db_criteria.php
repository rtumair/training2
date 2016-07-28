<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

class db_criteria extends db {


    public function create($user_Values)
    {
        $query = "INSERT INTO user (user_id, user_name, password, user_email) VALUES (NULL, ?, ?, ?)";

        $stmt = mysqli_prepare($this->db_conn, $query);

        if ( !$stmt ) {
            echo('mysqli error: '.mysqli_error($this->db_conn));
        }
       // var_dump($user_Values);

        mysqli_stmt_bind_param($stmt, "sss", $user_Values['username'],$user_Values['password'],
                        $user_Values['email']);

        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        $is_successful = 0;
        
        if($affected_rows == 1)
        {
            $is_successful = 1;
        } else 
        {
            $is_successful = 0;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($this->db_conn);
        
        return $is_successful;
    }
    public function delete($user_id)
    {
        $query = "DELETE FROM user WHERE user_id = $user_id";
        $is_successful = 0;
        if (mysqli_query($this->db_conn, $query)) {
            $is_successful = 1;
            mysqli_close($this->db_conn);
        } else {
//            echo "Error deleting record: " . mysqli_error($dbc);
            $is_successful = 0;
        }
        return $is_successful;
    }

    public function update($row_val, $user_values)
    {
        // echo $row_val;
        $username = $user_values['username'];
        $userpass = $user_values['password'];
        $useremail = $user_values['email'];
        $query = "UPDATE user SET  user_name = '$username',
                    password = '$userpass', user_email = '$useremail'
                      WHERE user_id = '$row_val'";

        $is_successful = 0;
        if (mysqli_query($this->db_conn, $query))
        {
            $is_successful = 1;
            mysqli_close($this->db_conn);
        } else
        {
           echo "Error updateing record: " . mysqli_error($this->db_conn);
            $is_successful = 0;
        }
        return $is_successful;
    }

    public function viewAll() 
    {
        // view the whole table of users
        $query = "SELECT user_id, user_name, user_email FROM user";
        $response = @mysqli_query($this->db_conn, $query);
        $table_data_array = array();

        if ($response) {
            while ($row = mysqli_fetch_array($response)) {
                array_push($table_data_array, $row);
            }

        } else {
            echo "Couldn't issue database query<br />";
            echo mysqli_error($this->db_conn);
        }
       // var_dump($table_data_array);
        mysqli_close($this->db_conn);

        return $table_data_array;

    }

}