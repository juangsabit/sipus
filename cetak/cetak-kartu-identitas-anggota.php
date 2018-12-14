<?php
include'../koneksi.php';
include'../fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$id_anggota=$_GET['id'];
$q_anggota=$con->query(
	"SELECT * FROM tbanggota
	WHERE idanggota='$id_anggota'"
);
$r_anggota=mysqli_fetch_array($q_anggota);

$tgl=date('Y/m/d');
$pdf->Image('../images/latar-kartu.png',5,5,100,56);
$pdf->Image('../images/latar-kartu.png',106,5,100,56);
$pdf->Image('../images/mtsr.png',10,9,10,10);
$pdf->Image('../images/'.$r_anggota['foto'],80,29,20,25);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'PERPUSTAAAN BUSTANUL ULUM',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'KETENTUAN',0,1,'C');
$pdf->setFont('Arial','B',7);
$pdf->Cell(90,5,'Gubukrubuh, Getas, Playen, Gunungkidul, DIY, 55861',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'- Kartu tanda anggota ini hanya digunakan untuk keperluan selama di perpustakaan.',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,20,100,20);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'KARTU TANDA ANGGOTA',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'- Pihak perpustakaan tidak menanggung segala kerusakan dan kehilangan kartu ini.',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,25,100,25);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'- Jika kartu tanda anggota mengalami kerusakan dan hilang siswa wajib mengurus ',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,25,100,25);
$pdf->setFont('Arial','B',10);
$pdf->Cell(90,5,'',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C');
$pdf->setFont('Arial','',7);
$pdf->Cell(90,5,'   kembali di bagian administrasi perpustakaan.',0,1,'L');
$pdf->SetLineWidth(0.2);
$pdf->Line(10,25,100,25);


$pdf->Ln(-4);

$pdf->setFont('Arial','',10);
$pdf->Cell(18,5,'ID Anggota',0,0,'L');
$pdf->Cell(76,5,': '.$r_anggota['idanggota'],0,0,'L');
$pdf->Cell(10,5,'',0,1,'C');
$pdf->setFont('Arial','',10);
$pdf->Cell(18,5,'Nama',0,0,'L');
$pdf->Cell(36,5,': '.$r_anggota['nama'],0,1,'L');
$pdf->Cell(18,5,'Kelas',0,0,'L');
$pdf->Cell(36,5,': '.$r_anggota['kelas'],0,1,'L');
$pdf->Cell(18,5,'Tgl lahir',0,0,'L');
$pdf->Cell(36,5,': '.$r_anggota['tanggal'],0,1,'L');
$pdf->Cell(18,5,'Alamat',0,0,'L');
$pdf->Cell(36,5,': '.$r_anggota['alamat'],0,1,'L');
$pdf->Ln(2);

$pdf->Output('cetak-kartu-identitas-anggota.pdf','I');
?>	