<?php
include_once('PDF_MC_Table.php');
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');
// Creaci�n del objeto de la clase heredada
$pdf=new PDF_MC_Table();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$datos[]=$_GET['id'];
$tempo = new BaseMysql();
$sql1="select m.id AS idm,p.id AS idp,concat_ws('-',p.paterno,p.materno,p.nombre) AS persona,c.id AS idc,c.descripcion AS curso,m.n1 AS n1,m.n2 AS n2,m.n3 AS n3,m.n4 AS n4,(m.n1 + m.n2 + m.n3 + m.n4) / 4 AS promedio,if((m.n1 + m.n2 + m.n3 + m.n4) / 4 > 13,'APROBADO','DESAPROBADO') AS condicion from ((matricula m join personas p on(m.persona_id = p.id)) join cursos c on(m.curso_id = c.id)) WHERE c.id=?";
$cabeza[]=array('IDM','IDP','NOMBRE','IDC','CURSO','N1','N2','N3','N4','PROMEDIO','CONDICION');
$rpta = $tempo->consultar($sql1,$datos,"1");

$pdf->SetWidths(array(9,9,35,9,30,12,12,12,12,22,25));

foreach($cabeza as $persona2){
   
}
$pdf->Row($persona2);

$i = 0;

foreach($rpta as $k=> $persona){
    foreach ($persona as $key => $value) {
         $data[$i] = $value;
         $i++;
         
    }
    $i = 0;
    
    
    $pdf->Row($data);
}


$pdf->Output();
?>

