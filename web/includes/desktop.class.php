<?phpclass Desktop{    var $conection;    var $db;        function Desktop() {        $this->conection = mysql_connect("localhost", "root", "");        $this->db = mysql_select_db("webdesktop", $this->conection);    }        function ClearCookiesTable($date){        $q = "DELETE FROM cookies WHERE date_end<'".$date."' ";        $result = mysql_query($q, $this->conection);        mysql_free_result($result);         mysql_close($conection);    }        function loadNotepad($post){        $q = "SELECT id, title, content FROM notepad ";        $q.= "WHERE user_id='".$post['user_id']."' AND show_panel='1' ";        $q.= "ORDER BY id DESC LIMIT 5";                        $result = mysql_query($q, $this->conection);        while ($row = mysql_fetch_array($result)) {            $row['content'] = strip_tags($row['content']);            $items[] = $row;        }        return $items;        mysql_free_result($result);        mysql_close($conection);    }        function deleteNotepadItem($post){        $q = "DELETE FROM notepad ";        $q.= "WHERE id='".$post['itemId']."' ";                $result = mysql_query($q, $this->conection);        mysql_free_result($result);        mysql_close($conection);    }        function loadNotepadEditForm($post){        $q = "SELECT id, title, content FROM notepad ";        $q.= "WHERE id='".$post['itemId']."' ";                $result = mysql_query($q, $this->conection);        if ($row = mysql_fetch_array($result)) {            //dump($row);            return $row;        }        mysql_free_result($result);        mysql_close($conection);    }        function addNote($post){        if ((!empty($post['title']))){            $q = "INSERT INTO notepad ";            $q.= "SET title='".$post['title']."', content='".$post['content']."', ";            $q.= "show_panel='1', user_id='".$post['user_id']."' ";                    $result = mysql_query($q, $this->conection);                mysql_free_result($result);             mysql_close($conection);        }else{            echo "Error!!! Title should been completed";            die();        }    }        function loadUserFiles($post){        $fileType = $post['fileType'];        $q = "SELECT * FROM files ";        $q.= "WHERE user_id='".$post['userId']."' AND category='".$fileType."' GROUP BY name ORDER BY date_add ";        //var_dump($q);                $result = mysql_query($q, $this->conection);        while ($row = mysql_fetch_array($result)) {            $items[] =  $row;        }        //dump($items);die("the end");        return $items;        mysql_free_result($result);        mysql_close($conection);    }        function removeFile($post){        $q = "DELETE FROM files ";        $q.= "WHERE id='".$post['fileId']."' ";                $result = mysql_query($q, $this->conection);        mysql_free_result($result);        mysql_close($conection);                $filePath = dirname( __FILE__ ).DIRECTORY_SEPARATOR.'../../uploads/'.$post['userId']."/".$post['fileCategory']."/".$post['fileName'];                                                                            unlink($filePath);    }    }