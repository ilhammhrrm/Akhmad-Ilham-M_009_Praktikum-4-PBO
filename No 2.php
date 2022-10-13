<?php 
    class RerataNilai 
    {
        protected $value, $value2;
        public function __construct($value, $value2)
        {
            $this->value = $value;
            $this->value2 = $value2;
        }
    
        public function average($value3 = 0)
        {
            if ($value3 == 0) 
            {
                $str = $this->value . ' + ' . $this->value2 . ' / 2 = ';
                return $str . ($this->value += $this->value2 ) / 2;
    
            } 
            else 
            {
                $str ='(' . $this->value . ' + ' . $this->value2 . ' + ' . $this->value2 . ') / 3 = ';
                return $str . ($this->value += $this->value2 += $value3 ) / 3;
            }
        }
    }
    
    class RerataNilai2 extends RerataNilai
    {
        public function __construct($value, $value2)
        {
            parent::__construct($value, $value2);
        }
    
        public function average($value3 = 0)
        {
            return parent::average($value3);
        }
    }    
?>

<html lang="id">
<head>
    <title>Praktikum 4</title>
</head>
    <body>
        <div class="container">
        <style>
        .container {
            margin: auto;
            text-align: center;
            width: 650px;
            height: 150px;
            border-style: groove;
        }
        </style>
        <h2>Soal No 2</h2>
            <div class="form">
                <form action="" method="post">
                        <input type="number" name="input1">
                        <input type="number" name="input2">
                        <input type="number" name="input3"></br></br>
                        <button type="submit" name="submit">Submit</button>

                    <?php 
                            if (isset($_POST['submit']))    {
                                    if (!$_POST['input3'])  {
                                        $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                                        echo $value1->average(0);
                                    } else  {
                                        $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                                        echo $value1->average($_POST['input3']);
                                        }
                                }
                        ?>
                </form>
            </div>
        </div>
    </body>
</html>