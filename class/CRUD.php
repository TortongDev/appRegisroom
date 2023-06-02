<?php
    class CRUD extends Connection{
        public $processStatus;
        public  function __construct($processStatus,$sql,$values){
            $this->sql              = $sql;
            $this->values           = $values;
            $this->processStatus    = $processStatus;
            $this->openConnection();
        }
        public function run()
        {
            switch ($this->processStatus) {
                case 'insert':
                    try {
                        $insert = parent::$db->prepare($this->sql);
                        $insert->execute($this->values);
                    } catch (PDOException $err) {
                        echo "Insert : ".$err->getMessage();
                    }
                break;
                case 'update':
                    try {
                        $update = parent::$db->prepare($this->sql);
                        $update->execute($this->values);
                    } catch (PDOException $err) {
                        echo "Insert : ".$err->getMessage();
                    }
                break;
                case 'delete':
                    try {
                        $delete = parent::$db->prepare($this->sql);
                        $indeletesert->execute($this->values);
                    } catch (PDOException $err) {
                        echo "Insert : ".$err->getMessage();
                    }
                break;
                case 'select':
                    try {
                        $select = parent::$db->prepare($this->sql);
                        $select->execute($this->values);
                        return $select->fetch();
                    } catch (PDOException $err) {
                        echo "Insert : ".$err->getMessage();
                    }
                break;
                
                default:
                        # code...
                break;
                }
        }
        public function __destruct(){
            $this->closeConnection();
        }
    }

?>