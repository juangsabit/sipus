<?php
include'../koneksi.php';
include'../fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$id_user=$_GET['id'];
$q_user=$con->query(
	"SELECT * FROM tbuser
	WHERE iduser='$id_user'"
);
$r_user=mysqli_fetch_array($q_user);

$tgl=date('Y/m/d');
$pdf->Image('../images/latar-kartu.png',5,5,100,56);
$pdf->Image('../images/latar-kartu.png',106,5,100,56);
$pdf->Image('../images/mtsr.png',10,9,10,10);
$pdf->Image('../imgpetugas/'.$r_user['foto'],80,29,20,25);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'PERPUSTAAAN BUSTANUL ULUM',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'KETENTUAN',0,1,'C');
$pdf->setFont('Arial','B',7);
$pdf->Cell(90,5,'Gubukrubuh, Getas, Playen, Gunungkidul, DIY, 55861',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'- Kartu tanda petugas ini hanya digunakan untuk keperluan selama di perpustakaan.',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,20,100,20);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'KARTU IDENTITAS PETUGAS',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'- Semua petugas harus mentaati peraturan perpustakaan',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,25,100,25);
$pdf->Ln(6);

$pdf->setFont('Arial','',10);
$pdf->Cell(19,5,'ID Petugas',0,0,'L');
$pdf->Cell(76,5,': '.$r_user['iduser'],0,0,'L');
$pdf->Cell(10,5,'',0,1,'C');
$pdf->setFont('Arial','',10);
$pdf->Cell(19,5,'Nama',0,0,'L');
$pdf->Cell(36,5,': '.$r_user['username'],0,1,'L');
$pdf->Cell(19,5,'Alamat',0,0,'L');
$pdf->Cell(36,5,': '.$r_user['alamat'],0,1,'L');
$pdf->Ln(2);

$pdf->Output('cetak-kartu-identitas-user.pdf','I');
?>	