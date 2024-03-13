
<?php
class student{
    private $id;
    private $name;

    private static $file_path="data.txt";

    function __construct($_id,$_name){
        $this->id=$_id;
        $this->name=$_name;

    }

    public function csv(){
        return $this->id."," .$this->name.PHP_EOL;
    }

    public function save(){
        $students=file(self::$file_path);
        file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
    }

    public static function display_students(){
        $students=file(self::$file_path);

        echo "<b>id | name</b><br/>";
        foreach($students as $student){
            list($id,$name)=explode(",",trim($student));
            echo"$id | $name<br/>";

        }
    }
}

?>