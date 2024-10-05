<?php
// class things {
//    public $name ;

//    function person()  {
//     return $this->name;

//    }

//    function animals()  {
//     return $this->name;

//    }

//    function birds()  {
//     return $this->name;

//    }
// }
// $po = new things();
// $po->name='Dua';
// echo "How are you " .$po->person() .' <br>';

// $po = new things();
// $po->name='Cat';
// echo "Hello  " .$po->animals() .' <br>';


// $po = new things();
// $po->name='Chakor';
// echo "Hello  " .$po->birds() .' <br> <br><br>';



// class Myclass{
//    public $name ;

//    function things()  {
//     return $this->name;

//    }

// }
// $po = new Myclass();
// $po->name='Dua';
// echo "How are you " .$po->things() .' <br>';

// $po = new Myclass();
// $po->name='Cat';
// echo "Hello  " .$po->things() .' <br>';


// $po = new Myclass();
// $po->name='Chakor';
// echo "Hello  " .$po->things() .' <br>';


// class computer {
//       public $software,$hardware ;

//       function software()  {
//     $this->software;
//     return $this->software;

//       }

//       function hardware()  {
//          $this->hardware;
//          return $this->hardware;

//       }


//    }
//    $po = new computer();
//    $po->software='Duolingo';
//    echo "this is software " .$po->software() .' <br>';

//    $ho = new computer();
//    $ho->hardware='Computer';
//    echo "this is hardware " .$ho->hardware() .' <br>';


// class calculatore{
//    public $a,$b,$c ;

//    function sum()  {
//     $this->c=$this->a+$this->b;
//     return $this->c;

//    }
//    function sub()  {
//       $this->c=$this->a-$this->b;
//       return $this->c;

//      }
//      function div()  {
//       $this->c=$this->a/$this->b;
//       return $this->c;

//      }
//      function mul()  {
//       $this->c=$this->a*$this->b;
//       return $this->c;

//      }
// }
// $sumo = new calculatore();
// $sumo->a=10;
// $sumo->b=10;

// echo "Sum = " .$sumo->sum() .' <br>';


// $subo = new calculatore();
// $subo->a=20;
// $subo->b=10;

// echo "Sub = " .$subo->sub() .' <br>';

// $divo = new calculatore();
// $divo->a=20;
// $divo->b=10;

// echo "Div = " .$divo->div() .' <br>';

// $mulo = new calculatore();
// $mulo->a=20;
// $mulo->b=10;

// echo "Multi = " .$mulo->mul() .' <br>';
// $po = new calculatore();

// $po = new calculatore();
// $po->name='Cat';
// echo "Hello  " .$po->things() .' <br>';


// $po = new calculatore();
// $po->name='Chakor';
// echo "Hello  " .$po->things() .' <br>';
// class student {
//    public $stuname,$stubatch ;

//    function __construct($stuname,$stubatch)  {
//       $this->stuname=$stuname;
//       $this->stubatch=$stubatch;


//    }

//    function stuinfo()  {
//       echo "Student Name " .$this->stuname .'<br>';
//       echo "Student Batch Code " .$this->stubatch .'<br>';


//    }


// }

// $objstu =new student(' Ali ',' 2310f ');
// $objstu->stuinfo();




// class studetails extends student {
//        public $fav =' Black ',$subj1='Math' , $subj2='English';
//        function stuinfo()  {
//          echo "Student Name " .$this->stuname .'<br>';
//          echo "Student Batch Code " .$this->stubatch .'<br>';
//          echo "Student Color " .$this->fav .'<br><br><br>';

//       }

//       function subject()  {
//          echo "<h3 style='color:brown'>This is New Function</h3> ";
//          echo "Student Subject One " .$this->subj1 .'<br>';
//          echo "Student Subject Two " .$this->subj2 .'<br>';


//       }

// }

// $objstu2 =new studetails(' Dua ',' 2310f ');
// $objstu2->stuinfo();
// $objstu2->subject();

//  echo "<h3 style='color:brown'>Multi </h3> ";

//  class stugirls extends studetails {
//    public $fav =' Black ',$subj1='Math' , $subj2='English',$fee=5500,$ov=4000;
//    function stuinfo()  {
//      echo "Student Name " .$this->stuname .'<br>';
//      echo "Student Batch Code " .$this->stubatch .'<br>';
//      echo "Student Color " .$this->fav .'<br>';
//      echo "Student Fee " .$this->totalfee=$this->fee+$this->ov .'<br>';


//   }

// }
// $objstu2 =new stugirls(' Dua ',' 2310f ');
// $objstu2->stuinfo();
// $objstu2->subject();

class student
{
    private $stuname, $stubatch, $stuid;


    private  function stuid()
    {
        echo $this->stubatch = 1 . '<br>';
        echo $this->stubatch = 2 . '<br>';
        echo $this->stubatch = 3 . '<br>';
        echo $this->stubatch = 4 . '<br>';
        echo $this->stubatch = 5 . '<br>';
        echo $this->stubatch = 6 . '<br>';
    }
    function getid()
    {
        $this->stuid();
    }

    private  function stuname()
    {
        echo $this->stuname = 'Ali' . '<br>';
        echo $this->stuname = 'Dua' . '<br>';
        echo $this->stuname = 'Kinza' . '<br>';
        echo $this->stuname = 'Khushboo' . '<br>';

        echo $this->stuname = 'Sumaima' . '<br>';
        echo $this->stuname = 'Fatima' . '<br>';
    }
    function getname()
    {
        $this->stuname();
    }

    private  function stubatch()
    {

        echo $this->stubatch = '2310f' . '<br>';
        echo $this->stubatch = '2310f' . '<br>';
        echo $this->stubatch = '2310f' . '<br>';
        echo $this->stubatch = '2310f' . '<br>';
        echo $this->stubatch = '2310f' . '<br>';
        echo $this->stubatch = '2310f' . '<br>';
    }
    function getbatch()
    {
        $this->stubatch();
    }
}


echo "<h2 class='text-center'>protected  Function </h2><br>";

class car
{
    protected $name;
    function name()
    {
        echo "<h2 class='text-center'> Employee Name ";

        echo $this->name = ' Ali' . '<br>';
        echo "</h2><br>";
    }
}
$obj = new car();
$obj->name();


class employee
{
    public $name;
    private $id;
    protected $salary;

    function __construct($empname)
    {
        $this->name = $empname;
    }
    function empname()
    {
        echo "Employee Name " . $this->name . '<br>';
    }

    private  function empid()
    {
        echo "<h2 class='text-center'> Employee Id ";
        echo $this->id = ' 1' . '<br>';
        echo "</h2><br>";
    }
    function getid()
    {
        $this->empid();
    }

    protected  function empsalary()
    {
        echo "<h2 class='text-center'> Employee Salary  ";
        echo $this->salary = '1000' . '<br>';
        echo "</h2><br>";
    }
    function getsalary()
    {
        $this->empsalary();
    }
}

class getallemp extends employee {}

$object1 = new getallemp('li');
$object1->getid();


$object1->empname();

$object1->getsalary();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<style>
    table,
    th,
    tr,
    td {
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="div text-center">
            <h3>Student Details</h3>
        </div>
        <div
            class="table-responsive">
            <table
                class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Batch Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><?php
                                        $objstu = new student();
                                        $objstu->getid();
                                        ?></td>
                        <td scope="row"><?php
                                        $objstu2 = new student();
                                        $objstu2->getname();
                                        ?>
                        </td>
                        <td scope="row"><?php
                                        $objstu3 = new student();
                                        $objstu3->getbatch();
                                        ?></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>



    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>