<?phpclass Login{    var $conection;    var $db;        function Login() {        $this->conection = mysql_connect("localhost", "root", "");        $this->db = mysql_select_db("webdesktop", $this->conection);    }          function Log($post){        if ((!empty($post['password'])) || (!empty($post['nickname']))){            $password = md5($post['password']);            $q = "SELECT id, count(id) AS count, login FROM users ";            $q.= "WHERE login='" . $post['nickname'] . "' AND password='" . $password . "' ";            $result = mysql_query($q, $this->conection);            if ($row = mysql_fetch_array($result)) {                if ($row['count'] == 1) {                    return $row;                }            }            mysql_free_result($result);             mysql_close($conection);        }    }        function saveCookie($post){        if ((!empty($post['guid'])) or (!empty($post['wlogin'])) or (!empty($post['user_id'])) or (!empty($post['user_ip'])) ){            $q = "INSERT INTO cookies ";            $q.= "SET name='".$post['wlogin']."', gid='".$post['guid']."', ";            $q.= "user_ip='".$post['user_ip']."', user_id='".$post['user_id']."', ";            $q.= "date_add=CURDATE(), date_end=CURDATE()+'".$post['time']."' ";                    $result = mysql_query($q, $this->conection);                mysql_free_result($result);             mysql_close($conection);        }else{            echo "Error!!! Cookie not been saved!";            die();        }    }        function loginByCookie($post){        //dump($post);die();        $q = "SELECT count(c.id) AS count, c.gid, c.user_id, u.login, u.id FROM cookies AS c ";        $q.= "INNER JOIN users AS u ";        $q.= "ON c.user_id=u.id ";        $q.= "WHERE c.name='".$post['cookieName']."' AND c.gid='".$post['cookieVal']."' ";        $result = mysql_query($q, $this->conection);        if ($row = mysql_fetch_array($result)) {            if ($row['count'] == 1) {                return $row;            }        }            mysql_free_result($result);             mysql_close($conection);    }        }?>