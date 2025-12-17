<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <?php
        function ToKhmerNum($number){
            $english = ['0','1','2','3','4','5','6','7','8','9'];
            $khmer = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];

            return str_replace($english, $khmer, $number);
        }

        $date = date("l");
        $dateNum = ToKhmerNum(date("d"));
        $monthNum = date("n");
        $year = ToKhmerNum(date("Y"));

        $KhmerMonth = [
            1 => "មករា",
            2 => "កុម្ភៈ",
            3 => "មីនា",
            4 => "មេសា",
            5 => "ឧសភា",
            6 => "មិថុនា",
            7 => "កក្កដា",
            8 => "សីហា",
            9 => "កញ្ញា",
            10 => "តុលា",
            11 => "វិច្ឆិកា",
            12 => "ធ្នូ",

        ];
        $month = $KhmerMonth[$monthNum];

        
        switch($date)
        {
            case"Monday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃច័ន្ទ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            case"Tuesday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃអង្គារ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            case"Wednesday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃពុធ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            case"Thursday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃព្រហស្បតិ៍ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            case"Friday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃសុក្រ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            case"Saturday";
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃសៅរ៍ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            default:
                echo"<h1 class='text-light m-1 p-1 bg-primary boder rounded-5 text-center'> ថ្ងៃអាទិត្យ ទី $dateNum ខែ $month ឆ្នាំ $year</h1>";
                break;
            
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>