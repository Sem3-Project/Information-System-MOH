<?php
require('fpdf181/fpdf.php');


class myPDF_Child extends FPDF{
    // $pageWidth = 210;
    // $pageHeight = 297;
    public function _construct(){
        // $mother=new myPDF($orientation='P', $unit='mm', $size='A4','Record');
        $prototype=new myPDF($orientation='P', $unit='mm', $size='A4','Record');
        $baby=clone $prototype;
        // $this->type = $baby->get_type();
        // return ($baby);
        // $this->SetFont('Arial','B',20);
        // // $this->Cell(0,10,'Child',0,0,'C');
        // // $this->Ln();
        // $this->Cell(0,10,'Record',0,0,'C');
        // $this->Ln(30);
        
    }

    function set_type($type){
        $this->type = $type;
    }
    function get_type(){
        return $this->type;
    }
    function header(){
        $this->Rect(5, 5, 200, 287, 'D');
        // $margin = 10;
        // $this->Rect( $margin, $margin , $pageWidth - $margin , $pageHeight - margin);
        $this->SetFont('Arial','',6);
        $this->Cell(0,10,'MOH, Gampaha',0,0,'L');
        $this->Ln(10);
        
    }


    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'page'.$this->PageNo(),0,0,'C');
    }

//------------------------------Following part should be change according to the form--------------------------------
    function ViewTable($db,$id){
        
        $this->SetFont('Arial','B',20);
        $this->Cell(0,10,'Office of the Medical Officer of health',0,0,'C');
        $this->Ln();
        $this->Cell(0,10,'Gampaha',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','B',18);
        // $this->Cell(0,10,'Pregnancy',0,0,'C');
        $this->Ln();
        $child=new myPDF_Child($orientation='P', $unit='mm', $size='A4','Baby Record');
        $child->set_type('Baby Record');
        $ty=$child->get_type();
        $this->Cell(0,10,$ty,0,0,'C');
        $this->Ln(30);
        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `childdata` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);


        // //------------------------------Basic Details.1st page in pregnancy Report------------------------------------

        $this->Cell(20,10,'ID:',0,0,'L');
        $this->Cell(30,10,$detail->id,1,0,'C');
        $this->Ln(20);

      
        //-------------------Child Details------------------
        $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Child Details',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `childdata1` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);

        $this->SetFont('Times','B',12);
        $this->Cell(32,10,'MOH Division',1,0,'C');
        $this->Cell(32,10,$detail->doctor,1,0,'C');
        $this->Cell(32,10,'PHM Division',1,0,'C');
        $this->Cell(32,10,$detail->moh,1,0,'C');
        $this->Cell(32,10,'NIC',1,0,'C');
        $this->Cell(32,10,$detail->idnum,1,0,'C');
        $this->Ln();
        $this->Cell(40,10,'Child Name',1,0,'C');
        $this->Cell(88,10,$detail->childname,1,0,'C');
        $this->Cell(32,10,'Reg.NO',1,0,'C');
        $this->Cell(32,10,$detail->regno,1,0,'C');
        $this->Ln();
        $this->Cell(48,10,'Child Birthdate',1,0,'C');
        $this->Cell(48,10,$detail->childname,1,0,'C');
        $this->Cell(48,10,'Registation Date',1,0,'C');
        $this->Cell(48,10,$detail->regno,1,0,'C');
        $this->Ln();
        $this->Cell(40,10,'Mother Name',1,0,'C');
        $this->Cell(88,10,$detail->momname,1,0,'C');
        $this->Cell(32,10,'Mother Age',1,0,'C');
        $this->Cell(32,10,$detail->momage,1,0,'C');
        $this->Ln(20);

        //------------------Infant protection------------------
       /* $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Infant Protection',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `childdata1` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);

        $this->Cell(24,10,'Apgar Score',1,0,'C');
        $this->Cell(22,10,$detail->num1,1,0,'C');
        $this->Cell(29,10,'Birth Weight(kg)',1,0,'C');
        $this->Cell(21,10,$detail->weight1,1,0,'C');
        $this->Cell(24,10,'CRL(cm)',1,0,'C');
        $this->Cell(24,10,$detail->headperi,1,0,'C');
        $this->Cell(24,10,'Birth Height',1,0,'C');
        $this->Cell(24,10,$detail->length,1,0,'C');
        $this->Ln(20);*/


        //-------------------Infant Record----------------------
        $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Infant Record',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `childdata2` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);
        $this->Cell(53,10,'',1,0,'C');
        $this->Cell(62,10,'Within 1st 10 days',1,0,'C');
        $this->Cell(38,10,'Days 11-28',1,0,'C');
        $this->Cell(38,10,'Around 42 days',1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'',1,0,'C');
        $this->Cell(31,10,$detail->dat1,1,0,'C');
        $this->Cell(31,10,$detail->dat2,1,0,'C');
        $this->Cell(38,10,$detail->dat3,1,0,'C');
        $this->Cell(38,10,$detail->dat4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Color of Skin',1,0,'C');
        $this->Cell(31,10,$detail->scolor1,1,0,'C');
        $this->Cell(31,10,$detail->scolor2,1,0,'C');
        $this->Cell(38,10,$detail->scolor3,1,0,'C');
        $this->Cell(38,10,$detail->scolor4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Eyes',1,0,'C');
        $this->Cell(31,10,$detail->eye1,1,0,'C');
        $this->Cell(31,10,$detail->eye2,1,0,'C');
        $this->Cell(38,10,$detail->eye3,1,0,'C');
        $this->Cell(38,10,$detail->eye4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Duration of Lactation',1,0,'C');
        $this->Cell(31,10,$detail->sc1,1,0,'C');
        $this->Cell(31,10,$detail->sc2,1,0,'C');
        $this->Cell(38,10,$detail->sc3,1,0,'C');
        $this->Cell(38,10,$detail->sc4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Position of Lactation',1,0,'C');
        $this->Cell(31,10,$detail->m1,1,0,'C');
        $this->Cell(31,10,$detail->m2,1,0,'C');
        $this->Cell(38,10,$detail->m3,1,0,'C');
        $this->Cell(38,10,$detail->m4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Connection of Lactation',1,0,'C');
        $this->Cell(31,10,$detail->rel1,1,0,'C');
        $this->Cell(31,10,$detail->rel2,1,0,'C');
        $this->Cell(38,10,$detail->rel3,1,0,'C');
        $this->Cell(38,10,$detail->rel4,1,0,'C');
        $this->Ln();
        $this->Cell(53,10,'Others',1,0,'C');
        $this->Cell(31,10,$detail->other1,1,0,'C');
        $this->Cell(31,10,$detail->other2,1,0,'C');
        $this->Cell(38,10,$detail->other3,1,0,'C');
        $this->Cell(38,10,$detail->other4,1,0,'C');
        $this->Ln(20);


        
        //---------Clinic Dates-------------
       /* $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Clinic Dates',0,0,'C');
        $this->Ln(20);
        $this->Cell(30,10,$detail->date1,1,0,'C');
        $this->Cell(30,10,$detail->date2,1,0,'C');
        $this->Cell(30,10,$detail->date3,1,0,'C');
        $this->Cell(30,10,$detail->date4,1,0,'C');
        $this->Cell(30,10,$detail->date5,1,0,'C');
        $this->Ln();
        $this->Cell(30,10,$detail->date6,1,0,'C');
        $this->Cell(30,10,$detail->date7,1,0,'C');
        $this->Cell(30,10,$detail->date8,1,0,'C');
        $this->Cell(30,10,$detail->date9,1,0,'C');
        $this->Cell(30,10,$detail->date10,1,0,'C');
        $this->Ln();
        $this->Cell(30,10,$detail->date11,1,0,'C');
        $this->Cell(30,10,$detail->date12,1,0,'C');
        $this->Cell(30,10,$detail->date13,1,0,'C');
        $this->Cell(30,10,$detail->date14,1,0,'C');
        $this->Cell(30,10,$detail->date15,1,0,'C');
        $this->Ln();
        $this->Cell(30,10,$detail->date16,1,0,'C');
        $this->Cell(30,10,$detail->date17,1,0,'C');
        $this->Cell(30,10,$detail->date18,1,0,'C');
        $this->Cell(30,10,$detail->date19,1,0,'C');
        $this->Cell(30,10,$detail->date20,1,0,'C');
        $this->Ln();*/
        



        //--------------Child Health Record I-------------------

        $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Child Health Record I',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `table5` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);

        $this->SetFont('Times','B',12);
        $this->Cell(47,10,'Age of Child',1,0,'C');
        $this->Cell(29,10,'Month 1',1,0,'C');
        $this->Cell(29,10,'Month 2',1,0,'C');
        $this->Cell(29,10,'Month 4',1,0,'C');
        $this->Cell(29,10,'Month 6',1,0,'C');
        $this->Cell(29,10,'Month 9',1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Clinic Attendance',1,0,'C');
        $this->Cell(29,10,$detail->day1,1,0,'C');
        $this->Cell(29,10,$detail->day2,1,0,'C');
        $this->Cell(29,10,$detail->day3,1,0,'C');
        $this->Cell(29,10,$detail->day4,1,0,'C');
        $this->Cell(29,10,$detail->day5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Congenital Deformities',1,0,'C');
        $this->Cell(29,10,$detail->attack1,1,0,'C');
        $this->Cell(29,10,$detail->attack2,1,0,'C');
        $this->Cell(29,10,$detail->attack3,1,0,'C');
        $this->Cell(29,10,$detail->attack4,1,0,'C');
        $this->Cell(29,10,$detail->attack5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Eye (Cataract / Squint)',1,0,'C');
        $this->Cell(29,10,$detail->eye1,1,0,'C');
        $this->Cell(29,10,$detail->eye2,1,0,'C');
        $this->Cell(29,10,$detail->eye3,1,0,'C');
        $this->Cell(29,10,$detail->eye4,1,0,'C');
        $this->Cell(29,10,$detail->eye5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Vision of left eye',1,0,'C');
        $this->Cell(29,10,$detail->left1,1,0,'C');
        $this->Cell(29,10,$detail->left2,1,0,'C');
        $this->Cell(29,10,$detail->left3,1,0,'C');
        $this->Cell(29,10,$detail->left4,1,0,'C');
        $this->Cell(29,10,$detail->left5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Vision of right eye',1,0,'C');
        $this->Cell(29,10,$detail->right1,1,0,'C');
        $this->Cell(29,10,$detail->right2,1,0,'C');
        $this->Cell(29,10,$detail->right3,1,0,'C');
        $this->Cell(29,10,$detail->right4,1,0,'C');
        $this->Cell(29,10,$detail->right5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Hearing of left ear',1,0,'C');
        $this->Cell(29,10,$detail->hleft1,1,0,'C');
        $this->Cell(29,10,$detail->hleft2,1,0,'C');
        $this->Cell(29,10,$detail->hleft3,1,0,'C');
        $this->Cell(29,10,$detail->hleft4,1,0,'C');
        $this->Cell(29,10,$detail->hleft5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Hearing of right ear',1,0,'C');
        $this->Cell(29,10,$detail->hright1,1,0,'C');
        $this->Cell(29,10,$detail->hright2,1,0,'C');
        $this->Cell(29,10,$detail->hright3,1,0,'C');
        $this->Cell(29,10,$detail->hright4,1,0,'C');
        $this->Cell(29,10,$detail->hright5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Dental Deformity',1,0,'C');
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,$detail->tooth1,1,0,'C');
        $this->Cell(29,10,$detail->tooth2,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Dental Problems',1,0,'C');
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,'',1,0,'C',black);
        $this->Cell(29,10,$detail->fault1,1,0,'C');
        $this->Cell(29,10,$detail->fault2,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Weight',1,0,'C');
        $this->Cell(29,10,$detail->weight1,1,0,'C');
        $this->Cell(29,10,$detail->weight2,1,0,'C');
        $this->Cell(29,10,$detail->weight3,1,0,'C');
        $this->Cell(29,10,$detail->weight4,1,0,'C');
        $this->Cell(29,10,$detail->weight5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Height',1,0,'C');
        $this->Cell(29,10,$detail->height1,1,0,'C');
        $this->Cell(29,10,$detail->height2,1,0,'C');
        $this->Cell(29,10,$detail->height3,1,0,'C');
        $this->Cell(29,10,$detail->height4,1,0,'C');
        $this->Cell(29,10,$detail->height5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Development',1,0,'C');
        $this->Cell(29,10,$detail->develop1,1,0,'C');
        $this->Cell(29,10,$detail->develop2,1,0,'C');
        $this->Cell(29,10,$detail->develop3,1,0,'C');
        $this->Cell(29,10,$detail->develop4,1,0,'C');
        $this->Cell(29,10,$detail->develop5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Heart Problems',1,0,'C');
        $this->Cell(29,10,$detail->heart1,1,0,'C');
        $this->Cell(29,10,$detail->heart2,1,0,'C');
        $this->Cell(29,10,$detail->heart3,1,0,'C');
        $this->Cell(29,10,$detail->heart4,1,0,'C');
        $this->Cell(29,10,$detail->heart5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Hip Joint',1,0,'C');
        $this->Cell(29,10,$detail->joint1,1,0,'C');
        $this->Cell(29,10,$detail->joint2,1,0,'C');
        $this->Cell(29,10,$detail->joint3,1,0,'C');
        $this->Cell(29,10,$detail->joint4,1,0,'C');
        $this->Cell(29,10,$detail->joint5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Mecellaneous Conditions',1,0,'C');
        $this->Cell(29,10,$detail->disease1,1,0,'C');
        $this->Cell(29,10,$detail->disease2,1,0,'C');
        $this->Cell(29,10,$detail->disease3,1,0,'C');
        $this->Cell(29,10,$detail->disease4,1,0,'C');
        $this->Cell(29,10,$detail->disease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->adisease0,1,0,'C');
        $this->Cell(29,10,$detail->adisease1,1,0,'C');
        $this->Cell(29,10,$detail->adisease2,1,0,'C');
        $this->Cell(29,10,$detail->adisease3,1,0,'C');
        $this->Cell(29,10,$detail->adisease4,1,0,'C');
        $this->Cell(29,10,$detail->adisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->bdisease0,1,0,'C');
        $this->Cell(29,10,$detail->bdisease1,1,0,'C');
        $this->Cell(29,10,$detail->bdisease2,1,0,'C');
        $this->Cell(29,10,$detail->bdisease3,1,0,'C');
        $this->Cell(29,10,$detail->bdisease4,1,0,'C');
        $this->Cell(29,10,$detail->bdisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->cdisease0,1,0,'C');
        $this->Cell(29,10,$detail->cdisease1,1,0,'C');
        $this->Cell(29,10,$detail->cdisease2,1,0,'C');
        $this->Cell(29,10,$detail->cdisease3,1,0,'C');
        $this->Cell(29,10,$detail->cdisease4,1,0,'C');
        $this->Cell(29,10,$detail->cdisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->ddisease0,1,0,'C');
        $this->Cell(29,10,$detail->ddisease1,1,0,'C');
        $this->Cell(29,10,$detail->ddisease2,1,0,'C');
        $this->Cell(29,10,$detail->ddisease3,1,0,'C');
        $this->Cell(29,10,$detail->ddisease4,1,0,'C');
        $this->Cell(29,10,$detail->ddisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->edisease0,1,0,'C');
        $this->Cell(29,10,$detail->edisease1,1,0,'C');
        $this->Cell(29,10,$detail->edisease2,1,0,'C');
        $this->Cell(29,10,$detail->edisease3,1,0,'C');
        $this->Cell(29,10,$detail->edisease4,1,0,'C');
        $this->Cell(29,10,$detail->edisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,$detail->fdisease0,1,0,'C');
        $this->Cell(29,10,$detail->fdisease1,1,0,'C');
        $this->Cell(29,10,$detail->fdisease2,1,0,'C');
        $this->Cell(29,10,$detail->fdisease3,1,0,'C');
        $this->Cell(29,10,$detail->fdisease4,1,0,'C');
        $this->Cell(29,10,$detail->fdisease5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Name of Examiner',1,0,'C');
        $this->Cell(29,10,$detail->name1,1,0,'C');
        $this->Cell(29,10,$detail->name2,1,0,'C');
        $this->Cell(29,10,$detail->name3,1,0,'C');
        $this->Cell(29,10,$detail->name4,1,0,'C');
        $this->Cell(29,10,$detail->name5,1,0,'C');
        $this->Ln();
        $this->Cell(47,10,'Post of Examiner',1,0,'C');
        $this->Cell(29,10,$detail->position1,1,0,'C');
        $this->Cell(29,10,$detail->position2,1,0,'C');
        $this->Cell(29,10,$detail->position3,1,0,'C');
        $this->Cell(29,10,$detail->position4,1,0,'C');
        $this->Cell(29,10,$detail->position5,1,0,'C');
        $this->Ln(20);

        //--------------Child Health Record II-------------------

        $this->SetFont('Arial','B',16);
        $this->Cell(200,8,'Child Health Record II',0,0,'C');
        $this->Ln(20);

        $this->SetFont('Times','',12);
        $stmt=$db->query("SELECT * FROM `table6` WHERE id='$id'");
        $detail=$stmt->fetch(PDO::FETCH_OBJ);

        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'Age of Child',1,0,'C');
        $this->Cell(35,10,'Month 18',1,0,'C');
        $this->Cell(35,10,'Year 3',1,0,'C');
        $this->Cell(35,10,'Year 4',1,0,'C');
        $this->Cell(35,10,'Year 5',1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Clinic Attendance',1,0,'C');
        $this->Cell(35,10,$detail->day6,1,0,'C');
        $this->Cell(35,10,$detail->day7,1,0,'C');
        $this->Cell(35,10,$detail->day8,1,0,'C');
        $this->Cell(35,10,$detail->day9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Congenital Deformities',1,0,'C');
        $this->Cell(35,10,$detail->attack6,1,0,'C');
        $this->Cell(35,10,$detail->attack7,1,0,'C');
        $this->Cell(35,10,$detail->attack8,1,0,'C');
        $this->Cell(35,10,$detail->attack9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Eye (Cataract / Squint)',1,0,'C');
        $this->Cell(35,10,$detail->eye6,1,0,'C');
        $this->Cell(35,10,$detail->eye7,1,0,'C');
        $this->Cell(35,10,$detail->eye8,1,0,'C');
        $this->Cell(35,10,$detail->eye9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Vision of left eye',1,0,'C');
        $this->Cell(35,10,$detail->left6,1,0,'C');
        $this->Cell(35,10,$detail->left7,1,0,'C');
        $this->Cell(35,10,$detail->left8,1,0,'C');
        $this->Cell(35,10,$detail->left9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Vision of right eye',1,0,'C');
        $this->Cell(35,10,$detail->right6,1,0,'C');
        $this->Cell(35,10,$detail->right7,1,0,'C');
        $this->Cell(35,10,$detail->right8,1,0,'C');
        $this->Cell(35,10,$detail->right9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Night Blindness',1,0,'C');
        $this->Cell(35,10,'',1,0,'C',black);
        $this->Cell(35,10,$detail->blind1,1,0,'C');
        $this->Cell(35,10,$detail->blind2,1,0,'C');
        $this->Cell(35,10,$detail->blind3,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Bito Spots',1,0,'C');
        $this->Cell(35,10,'',1,0,'C',black);
        $this->Cell(35,10,$detail->bito1,1,0,'C');
        $this->Cell(35,10,$detail->bito2,1,0,'C');
        $this->Cell(35,10,$detail->bito3,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Hearing of left ear',1,0,'C');
        $this->Cell(35,10,$detail->hleft6,1,0,'C');
        $this->Cell(35,10,$detail->hleft7,1,0,'C');
        $this->Cell(35,10,$detail->hleft8,1,0,'C');
        $this->Cell(35,10,$detail->hleft9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Hearing of right ear',1,0,'C');
        $this->Cell(35,10,$detail->hright6,1,0,'C');
        $this->Cell(35,10,$detail->hright7,1,0,'C');
        $this->Cell(35,10,$detail->hright8,1,0,'C');
        $this->Cell(35,10,$detail->hright9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Dental Deformity',1,0,'C');
        $this->Cell(35,10,$detail->tooth3,1,0,'C');
        $this->Cell(35,10,$detail->tooth4,1,0,'C');
        $this->Cell(35,10,$detail->tooth5,1,0,'C');
        $this->Cell(35,10,$detail->tooth6,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Dental Problems',1,0,'C');
        $this->Cell(35,10,$detail->fault3,1,0,'C');
        $this->Cell(35,10,$detail->fault4,1,0,'C');
        $this->Cell(35,10,$detail->fault5,1,0,'C');
        $this->Cell(35,10,$detail->fault6,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Weight',1,0,'C');
        $this->Cell(35,10,$detail->weight6,1,0,'C');
        $this->Cell(35,10,$detail->weight7,1,0,'C');
        $this->Cell(35,10,$detail->weight8,1,0,'C');
        $this->Cell(35,10,$detail->weight9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Height',1,0,'C');
        $this->Cell(35,10,$detail->height6,1,0,'C');
        $this->Cell(35,10,$detail->height7,1,0,'C');
        $this->Cell(35,10,$detail->height8,1,0,'C');
        $this->Cell(35,10,$detail->height9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Development',1,0,'C');
        $this->Cell(35,10,$detail->develop6,1,0,'C');
        $this->Cell(35,10,$detail->develop7,1,0,'C');
        $this->Cell(35,10,$detail->develop8,1,0,'C');
        $this->Cell(35,10,$detail->develop9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Heart Problems',1,0,'C');
        $this->Cell(35,60,$detail->heart6,1,0,'C');
        $this->Cell(35,10,$detail->heart7,1,0,'C');
        $this->Cell(35,10,$detail->heart8,1,0,'C');
        $this->Cell(35,10,$detail->heart9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Hip Joint',1,0,'C');
        $this->Cell(35,10,$detail->joint6,1,0,'C');
        $this->Cell(35,10,$detail->joint7,1,0,'C');
        $this->Cell(35,10,$detail->joint8,1,0,'C');
        $this->Cell(35,10,$detail->joint9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Mecellaneous Conditions',1,0,'C');
        $this->Cell(35,10,$detail->disease6,1,0,'C');
        $this->Cell(35,10,$detail->disease7,1,0,'C');
        $this->Cell(35,10,$detail->disease8,1,0,'C');
        $this->Cell(35,10,$detail->disease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->adisease6,1,0,'C');
        $this->Cell(35,10,$detail->adisease7,1,0,'C');
        $this->Cell(35,10,$detail->adisease8,1,0,'C');
        $this->Cell(35,10,$detail->adisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->bdisease6,1,0,'C');
        $this->Cell(35,10,$detail->bdisease7,1,0,'C');
        $this->Cell(35,10,$detail->bdisease8,1,0,'C');
        $this->Cell(35,10,$detail->bdisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->cdisease6,1,0,'C');
        $this->Cell(35,10,$detail->cdisease7,1,0,'C');
        $this->Cell(35,10,$detail->cdisease8,1,0,'C');
        $this->Cell(35,10,$detail->cdisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->ddisease6,1,0,'C');
        $this->Cell(35,10,$detail->ddisease7,1,0,'C');
        $this->Cell(35,10,$detail->ddisease8,1,0,'C');
        $this->Cell(35,10,$detail->ddisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->edisease6,1,0,'C');
        $this->Cell(35,10,$detail->edisease7,1,0,'C');
        $this->Cell(35,10,$detail->edisease8,1,0,'C');
        $this->Cell(35,10,$detail->edisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'',1,0,'C');
        $this->Cell(35,10,$detail->fdisease6,1,0,'C');
        $this->Cell(35,10,$detail->fdisease7,1,0,'C');
        $this->Cell(35,10,$detail->fdisease8,1,0,'C');
        $this->Cell(35,10,$detail->fdisease9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Name of Examiner',1,0,'C');
        $this->Cell(35,10,$detail->name6,1,0,'C');
        $this->Cell(35,10,$detail->name7,1,0,'C');
        $this->Cell(35,10,$detail->name8,1,0,'C');
        $this->Cell(35,10,$detail->name9,1,0,'C');
        $this->Ln();
        $this->Cell(50,10,'Post of Examiner',1,0,'C');
        $this->Cell(35,10,$detail->position6,1,0,'C');
        $this->Cell(35,10,$detail->position7,1,0,'C');
        $this->Cell(35,10,$detail->position8,1,0,'C');
        $this->Cell(35,10,$detail->position9,1,0,'C');
        $this->Ln(20);
        

        $this->Cell(100,10,'Signature:',0,0,'R');
        $this->Cell(50,10,'.................................',0,0,'R');
        $this->Ln(20);
        $this->Cell(100,10,'Date:',0,0,'R');
        $this->Cell(50,10,'.................................',0,0,'R');
        $this->Ln(20);
        
        
        


    }
}



?>
