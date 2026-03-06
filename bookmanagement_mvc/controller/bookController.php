<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);

class bookController extends baseController
{

        public function index()
        {


                $this->registry->template->welcome = '';
                /*** load the index template ***/
                $this->registry->template->show('index');
        }
        public function booklist()
        {
                $obj = new bookregister();

                $getbooklist = $obj->getbooklist($this->registry->db);
                // print_r($getuserlist );exit;
                $this->registry->template->booklist = $getbooklist;
                $this->registry->template->show('book_listing');



        }
        public function addbooklist()
        {
                $obj = new bookregister();

                $getbooklist = $obj->getbooklist($this->registry->db);
                //        print_r($createuserlist );
                //        exit;
                $this->registry->template->booklist = $getbooklist;
                $this->registry->template->show('book_insert');
        }
        public function book_record()
        {
                $obj = new bookregister();
                $db = $this->registry->db;

                $bookName = $_POST['bookName'];
                $author = $_POST['author'];
                $publishedYear = $_POST['publishedYear'];
                $copies = $_POST['copies'];
                $cost = $_POST['cost'];
                $description = $_POST['description'];

                $stmt = $db->prepare("SELECT COUNT(*) AS Record FROM bookstore WHERE bookName = '" . $bookName . "' AND 	publishedYear = '" . $publishedYear . "' ");
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result['Record'] > 0) {
                        echo $this->response("false"," book with same published year already exists");

                        exit();
                }

                $sql = "INSERT INTO `bookstore` (`bookName`,`author`,`publishedYear`, `copies`, `cost`, `description`) VALUES ('$bookName','$author', '$publishedYear', '$copies', '$cost', '$description')";
                $insertqry = $obj->insertBook($sql, $db);

                if ($insertqry) {
                        echo $this->response("true"," book added successfully");
                } else {
                        echo $this->response("false"," cannot add book");
                }

        }

        public function editbooklist()
        {
                $obj = new bookregister();
                $db = $this->registry->db;
                $slno = $_GET['Slno'];
                $updateQry = "SELECT `Slno`,`bookNumber`,`bookName`,`author`, `publishedYear`, `copies`, `cost`, `description`  FROM `bookstore` WHERE `Slno`= $slno";
                $editqry = $obj->editbook($updateQry, $db);
                $bookupdate = $editqry->fetchALL(PDO::FETCH_ASSOC);
              
                $this->registry->template->bookupdate = JSON_encode($bookupdate);
                $this->registry->template->show('book_edit');
        }


        public function book_update()
        {
             
                $obj = new bookregister();
                $db = $this->registry->db;

                $slno =$_POST["u_Slno"];
                $u_bookNumber = $_POST["u_bookNumber"];
                $u_bookname = $_POST['u_bookname'];
                $u_author = $_POST['u_author'];
                $u_year = $_POST['u_year'];
                $u_copies = $_POST['u_copies'];
                $u_cost = $_POST['u_cost'];
                $u_description = $_POST['u_description'];

                
                $updatebook ="UPDATE `bookstore` SET `bookName`='$u_bookname',`author`='$u_author',`publishedYear`='$u_year',`copies`='$u_copies',`cost`='$u_cost',`description`= '$u_description' WHERE `Slno`='$slno'";


                $updateqry = $obj->updateBook($updatebook, $db);

                if ($updateqry) {
                        echo $this->response("true"," book updated successfully");
                } else {
                        echo $this->response("false"," cannot add book");
                }



        }

        public function deletebook()
        {
                $obj = new bookregister();
                $db = $this->registry->db;
                $slno = $_GET['Slno'];
                $delquery = "delete from bookstore where Slno=$slno";
                $deleteqry = $obj->deletebook($delquery, $db);
                //$this->registry->template->show('book_listing');
               // $this->registry->template->delbook = $deleteqry;
                //$this->registry->template->show('book_delete');
                echo $this->response("true", "deleted successfully");
        }
        
        function response($status, $message)
        {

                return json_encode(array("status" => $status, "message" => $message));

        }


}
?>