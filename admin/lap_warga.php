<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../logo/logo.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'RW 021',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (021)7785433',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Kp Sugutamu RT 05 RW 021 no.30 Kelurahan Mekarjaya Kecamatan Sukamajaya',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Kode Pos: 16411',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Warga",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Warga', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'RT', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Jenis Iuran', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Denda', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Jumlah Bayar', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Tanggal', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from bayar");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_warga'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['rt'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['jenis_iuran'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['denda'], 1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['jumlah_bayar'], 1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['tanggal_bayar'], 1, 1, 'C');

	$no++;
}
$pdf->Cell(45,5,"Mengetahui",0,0,'C');
$pdf->ln(0.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,5,"Jakarta ".date("d-m-Y"),0,0,'C');
$pdf->ln(3);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,5,"(                              )",0,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Output("laporan_buku.pdf","I");

?>

