<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //no unaauthorized acess
 //require('assets/fpdf/fpdf.php');
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'schoolwebdb');

class StudentStatementPdf extends FPDF {
    var $CI;
     public function  __construct()
    {
        
        parent::__construct();
               parent::__construct();
               $this->CI= get_instance();
                //$this->load->model('commonModel');
          
    }
  
  
	   // Page header
function Header()
{
      // Logo
        //$this->Image('',85,6,30);
        // Arial bold 15
        $this->SetFont('Times','B',15);
        // Move to the right
        $this->Cell(70);
        // Title
        // $this->Ln(1);
        $this->Cell(40,60,'St Martin School',0,0,'C');
       //  $this->Ln(5);
        //empty cell

       // $this->Cell(200,70,'',1,'C');
        $this->Ln(10);
        $this->Cell(180,60,'Student Statement',0,0,'C');
        $this->Ln(10);
       
         $this->Ln(30);
        $this->Cell(30,5,"".$this->CI->session->userdata('firstname')."",0,0,'L');
        //$this->Cell(50,5,"".$this->CI->session->userdata('firstname')."",0,0,'L');
         $this->Cell(30,5,""."".$this->CI->session->userdata('lastname').""."",0,0,'L');
        // $this->Cell(40,5,""."".$this->CI->session->userdata('lastname').""."",0,1,'L');
       // $this->Cell(30,5,'Programme',1,1,'L');
          //$this->Ln(5);
       // $this->Cell(180,5,"".$this->CI->session->userdata('programme')."",0,0,'C');
    
       /* $this->Cell(30,5,'Programme',1,0,'L');
        $this->Cell(80,5,'Bachelor of science in IT',1,0,'L');
        $this->Cell(30,5,'Academic Year',1,0,'L');
        $this->Cell(30,5,'2017/2018',1,0,'L');
        $this->Cell(20,5,'Semester',1,1,'L');*/
        // Line break
        $this->Ln(10);

         // Colors, line width and bold font
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');

        $this->cell(30,7,'DATE',1,0,'',true);
        $this->cell(40,7,'DESCRIPTION',1,0,'',true);
       // $this->cell(40,7,'Last Name',1,0,'',true);
        $this->cell(60,7,'Debit',1,0,'',true);
        $this->cell(60,7,'Credit',1,1,'',true);

}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($data);$i++)
        $this->Cell($w[$i],7,$data[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
function examcard(){
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    $this->cell(60,5,'DATE',1,0,'',true);
    $this->cell(80,5,'DESCRIPTION',1,0,'',true);
    //$this->cell(60,5,'Last Name',1,0,'',true);
    $this->cell(80,5,'Debit',1,0,'',true);
    $this->cell(80,5,'Credit',1,0,'',true);
   


}


// Page footer
function Footer()
{
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}



// Instanciation of inherited class
$this->Myfpdf=new StudentStatementPdf();
$this->Myfpdf->AliasNbPages();
$this->Myfpdf->AddPage();
//$this->Myfpdf->examcard($unit);
$this->Myfpdf->SetFont('Times','',12);
$myq="SELECT INVOICEAMOUNT,DATE,AMOUNTPAID,DESCRIPTION  FROM student s join student_finance sf ON s.STUDENT_REGNO=
sf.REGNO WHERE REGNO=50 ";
$query=mysqli_query($conn,$myq) or die(mysqli_error($conn));
while($data=mysqli_fetch_array($query)){
   // print_r($data);
      $this->Myfpdf->cell(30,7,$data['DATE'],1,0);
       $this->Myfpdf->cell(40,7,$data['DESCRIPTION'],1,0);
       $this->Myfpdf->cell(60,7,$data['INVOICEAMOUNT'],1,0);
       $this->Myfpdf->cell(60,7,$data['AMOUNTPAID'],1,1);
       //$this->Myfpdf->cell(50,7,$data['PHONENUMBER'],1,1);

}

//foreach ($student as $data ) {
    # code...
      // $this->Myfpdf->cell(60,7,$data['REGNO'],1,0);
      /* $this->Myfpdf->cell(60,7,$data['FIRSTNAME'],1,0);
       $this->Myfpdf->cell(60,7,$data['LASTNAME'],1,0);
       $this->Myfpdf->cell(60,7,$data['GENDER'],1,0);
       $this->Myfpdf->cell(60,7,$data['PHONENUMBER'],1,1);/*/
//}




//for($i=1;$i<=40;$i++)
  //  $this->Myfpdf->Cell(0,10,'Printing line number '.$i,0,1);
$this->Myfpdf->Output();



  
   



?>