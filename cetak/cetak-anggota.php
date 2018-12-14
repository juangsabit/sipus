<?php
include'../koneksi.php';
include'../fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$tgl=date('Y/m/d');
$pdf->setFont('Arial','B',12);
$pdf->Image('../images/mtsr.png',10,8,20,19);
$pdf->Cell(187,6,'MTSN 1 GUNUNG KIDUL',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,6,'Gubukrubuh, Getas, Playen, Gunungkidul, DIY, 55861',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(10,28,200,28);
$pdf->setFont('Arial','B',10);
$pdf->Cell(187,6,'Laporan Data Anggota',0,1,'C');
$pdf->Ln(1);	
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,4,'Tanggal Cetak '.$tgl,0,1,'C');

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(8,6,'No',1,0,'L',1);
$pdf->Cell(20,6,'ID Anggota',1,0,'L',1);
$pdf->Cell(50,6,'Nama',1,0,'L',1);
$pdf->Cell(20,6,'Kelas',1,0,'L',1);
$pdf->Cell(25,6,'Jenis Kelamin',1,0,'L',1);
$pdf->Cell(25,6,'Tanggal lahir',1,0,'L',1);
$pdf->Cell(37,6,'Alamat',1,1,'L',1);

$nomor=0;
$sql=$con->query("SELECT * FROM tbanggota");
while($data=mysqli_fetch_array($sql)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(8,4,$nomor,1,0,'L');
	$pdf->Cell(20,4,$data['idanggota'],1,0,'L');
	$pdf->Cell(50,4,$data['nama'],1,0,'L');
	$pdf->Cell(20,4,$data['kelas'],1,0,'L');
	$pdf->Cell(25,4,$data['jeniskelamin'],1,0,'L');
	$pdf->Cell(25,4,$data['tanggal'],1,0,'L');
	$pdf->Cell(37,4,$data['alamat'],1,1,'L');
}
$pdf->Output('cetak-anggota.pdf','I');
?>			