<?php
	$png = file_get_contents("assets/img/disnaker2.png");
	$pngbase64 = base64_encode($png);

	$gbr = $pdf['qr_code'];
	$bar = file_get_contents("assets/img/$gbr");
	$barcode = base64_encode($bar);

	$fot = $pdf['foto'];
	$barfot = file_get_contents("uploads/$fot");
	$foto = base64_encode($barfot);
?>
<style>
	.tab {
    display: inline-block;
    margin-left: 90px;
	margin-bottom : 50px;

	}
</style>
<center><img src='data:image;base64,<?= $pngbase64;?>' style="width: 100px; height: 100px;"></center>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta name="generator" content="Aspose.Words for .NET 21.11.0" />
		<title>surat</title>
		<style type="text/css">
			body {
				font-family: "Times New Roman";
				font-size: 12pt;
			}
			h1,
			h2,
			p {
				margin: 0pt;
			}
			li,
			table {
				margin-top: 0pt;
				margin-bottom: 0pt;
			}
			h1 {
				margin-left: 17.1pt;
				text-indent: -17.1pt;
				page-break-after: avoid;
				font-family: "Book Antiqua";
				font-size: 10pt;
				font-weight: bold;
			}
			h2 {
				page-break-after: avoid;
				font-family: "Book Antiqua";
				font-size: 12pt;
				font-weight: normal;
			}
			.Heading8 {
				text-align: center;
				page-break-after: avoid;
				font-family: "Comic Sans MS";
				font-size: 12pt;
				font-weight: bold;
			}
			.BalloonText {
				font-family: "Segoe UI";
				font-size: 9pt;
			}
			span.BalloonTextChar {
				font-family: "Segoe UI";
				font-size: 9pt;
			}
			span.Hyperlink {
				text-decoration: underline;
				color: #0000ff;
			}
		</style>
	</head>
	<body>
		<div>
			<p
				style="
					margin-left: 318.95pt;
					text-indent: -127.55pt;
					text-align: justify;
				"
			>
				<span
					style="
						height: 0pt;
						text-align: left;
						display: block;
						position: absolute;
						z-index: 1;
					"
				>
				<a name="_Hlk483906750">
					<span></span>
				</a>
			</p>
			<p style="margin-left: 63pt; text-indent: -63pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 63pt; text-indent: -63pt; text-align: justify">
				<span style="-aw-bookmark-end: _Hlk483906750"></span>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 63pt; text-indent: -63pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			
			<h1
				style="
					margin-left: 3.45pt;
					text-indent: -35.45pt;
					text-align: center;
					font-size: 14pt;
					margin-top: -5pt
				"
			>
				<span style="font-family: Arial">PEMERINTAH PROVINSI JAWA TENGAH</span>
			</h1>
			<h1
				style="
					margin-left: 3.45pt;
					text-indent: -35.45pt;
					text-align: center;
					font-size: 16pt;
					
				"
			>
				<span style="font-family: Arial; font-size: 14pt; ">DINAS</span>
				<span style="font-family: Arial; font-weight: normal"> </span>
				<span style="font-family: Arial; font-size: 14pt; margin-left: -7pt">TENAGA</span>
				<span style="font-family: Arial; font-weight: normal"> </span>
				<span style="font-family: Arial; font-size: 14pt; margin-left: -7pt">KERJA DAN TRANSMIGRASI</span>

			</h1>
			<p style="margin-left: 63pt; text-indent: -63pt; text-align: justify">
				<span style="-aw-bookmark-end: _Hlk483904076"></span>
				<span style="-aw-bookmark-end: _Hlk483906797"></span>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p class="Heading8" style="text-align: left">
				<span
					style="
						width: 113.25pt;
						display: inline-block;
						-aw-tabstop-align: left;
						-aw-tabstop-pos: 113.25pt;
					"
					>&#xa0;</span
				>
				<span
					style="
						width: 130.45pt;
						display: inline-block;
						-aw-tabstop-align: center;
						-aw-tabstop-pos: 243.7pt;
					"
					>&#xa0;</span
				>
			</p>
			<p style="text-align: center">
				<span>KEPUTUSAN</span>
			</p>
			<p style="text-align: center">
				<span>KEPALA DINAS TENAGA KERJA DAN TRANSMIGRASI</span>
			</p>
			<p style="text-align: center">
				<span>PROVINSI JAWA TENGAH</span>
			</p>
			<p style="margin-right: 7.1pt; margin-left: 42.55pt; text-align: justify">
				<span style="font-family: Arial; -aw-import: spaces">&#xa0;</span>
				<span style="font-family: Arial"> </span>
			</p>
			<p style="margin-left: 193.05pt">
				<span>Nomor: <?php echo $pdf['nosurat_permohonan'] ;?></span>
			</p>
			<p style="text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="text-align: center">
				<span>TENTANG</span>
			</p>
			<p style="text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="text-align: center">
				<span style="font-weight: bold"
					>PENGESAHAN PANITIA PEMBINA KESELAMATAN DAN
				</span>
			</p>
			<p style="text-align: center">
				<span style="font-weight: bold"
					>KESEHATAN KERJA (P2K3) DI PERUSAHAAN</span
				>
			</p>
			<p style="text-align: center">
				<span style="font-weight: bold; -aw-import: ignore">&#xa0;</span>
			</p>
			<p style="text-align: center">
				<span style="font-weight: bold"> <?= $pdf['nama_perusahaan']; ?></span>
			</p>
			<p style="text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="text-align: center">
				<span
					>KEPALA DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI JAWA TENGAH</span
				>
			</p>
			<p style="text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="width: 503.25pt; border-collapse: collapse"
			>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p><span>Menimbang</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<ol type="a" style="margin: 0pt; padding-left: 0pt">
							<li
								style="
									margin-left: 15.03pt;
									text-align: justify;
									padding-left: 0.87pt;
								"
							>
								<span
									>bahwa dalam rangka meningkatkan dan mengembangkan upaya
									keselamatan dan kesehatan kerja di perusahaan perlu
									dilaksanakan pembinaan terus menerus dan terarah.
								</span>
							</li>
							<li
								style="
									margin-top: 6pt;
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>bahwa untuk melaksanakan pembinaan keselamatan dan kesehatan
									kerja yang terus menerus di perusahaan atau di tempat kerja
									perlu dibentuk dan disahkan Panitia Pembina Keselamatan dan
									Kesehatan Kerja.
								</span>
							</li>
							<li
								style="
									margin-top: 6pt;
									margin-left: 15.03pt;
									text-align: justify;
									padding-left: 0.87pt;
								"
							>
								<span
									>bahwa untuk pengesahan Panitia Pembina Keselamatan dan
									Kesehatan Kerja (P2K3) tersebut di atas, maka perlu dituangkan
									Keputusan Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi
									Jawa Tengah.
								</span>
							</li>
						</ol>
						<p style="margin-left: 15.9pt; text-align: justify">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p><span>Mengingat</span></p>
						<p><span style="-aw-import: ignore">&#xa0;</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<ol type="1" style="margin: 0pt; padding-left: 0pt">
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>Undang-undang No. 1 Tahun 1970 tentang Keselamatan
									Kerja.</span
								>
							</li>
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>Undang-undang No. 13 Tahun 2003 tentang
									Ketenagakerjaan.</span
								>
							</li>
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0 2pt;
								"
							>
								<span
									>Undang-undang No. 23 Tahun 2014 tentang Pemerintahan
									Daerah.</span
								>
							</li>
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>Peraturan Menteri Tenaga Kerja RI No. Per.04/MEN/1987 tentang
									Panitia Pembina Keselamatan dan Kesehatan Kerja serta Tata
									Cara Penunjukan Ahli Keselamatan Kerja.</span
								>
							</li>
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>Peraturan Menteri Tenaga Kerja RI No. Per.02/MEN/1992 tentang
									Tata Cara Penunjukan, Kewajiban dan Wewenang Ahli Keselamatan
									dan Kesehatan Kerja.</span
								>
							</li>
							<li
								style="
									margin-left: 15.7pt;
									text-align: justify;
									padding-left: 0.2pt;
								"
							>
								<span
									>Peraturan Menteri Tenaga Kerja RI No. 33/MEN/2016 tentang
									Tata Cara Pengawasan Ketenagakerjaan</span
								>
							</li>
						</ol>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-top: 6pt"><span>Memperhatikan</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-top: 6pt"><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-top: 6pt; text-align: justify">
							<span
								>Surat Permohonan dari <?= $pdf['nama_perusahaan']; ?>, dengan alamat
								<?= $pdf['alamat_perusahaan']; ?> Kabupaten <?= $pdf['kabupaten_kota']; ?> Provinsi <?= $pdf['provinsi']; ?>, Nomor <?= $pdf['nosurat_permohonan']; ?>, tanggal 10 November
								2021, perihal Permohonan Pengesahan P2K3.</span
							>
						</p>
					</td>
				</tr>
			</table>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span>M E M U T U S K A N :</span>
			</p>
			<p style="margin-left: 7.1pt; text-indent: -7.1pt; text-align: center">
				<span style="font-family: Arial; -aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="width: 503.25pt; border-collapse: collapse"
			>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>Menetapkan</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>Kesatu</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-bottom: 6pt; text-align: justify">
							<span
								>Pengesahan Panitia Pembina Keselamatan dan Kesehatan Kerja <?= $pdf['nama_perusahaan']; ?> yang data dan susunan pengurusnya
								seperti tersebut dalam lampiran Keputusan ini;</span
							>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>Kedua</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-bottom: 6pt; text-align: justify">
							<span
								>Panitia Pembina Keselamatan dan Kesehatan Kerja dapat segera
								melakukan kegiatan sesuai dengan tugas dan fungsi yang telah
								ditetapkan serta melaporkan hasil kegiatannya secara triwulan
								kepada Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa
								Tengah cc Kepala Satuan Pengawasan Ketenagakerjaan setempat
								melalui email </span
							><a
								href="mailto:p2k3jateng@gmail.com"
								style="text-decoration: none"
								><span class="Hyperlink">p2k3jateng@gmail.com</span></a
							><span>;</span><span style="-aw-import: spaces">&#xa0; </span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>Ketiga</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-bottom: 6pt; text-align: justify">
							<span
								>Keputusan ini berlaku selama perusahaan dan susunan pengurusnya
								tidak berubah;
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 109.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>Keempat</span></p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify"><span>:</span></p>
					</td>
					<td
						style="
							width: 357.75pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-bottom: 6pt; text-align: justify">
							<span
								>Bilamana di dalam Pengesahan Panitia Pembina Keselamatan dan
								Kesehatan Kerja ini terdapat kekeliruan data dan/atau keterangan
								yang menjadi dasar dari pengesahan ini, maka Keputusan ini dapat
								dibatalkan dan/atau diperbaiki sebagaimana mestinya.</span
							>
						</p>
					</td>
				</tr>
			</table>
			<p style="text-align: justify">
				<span
					>Keputusan Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa
					Tengah ini berlaku sejak tanggal ditetapkan.</span
				>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="width: 233.9pt; margin-left: 270.8pt; border-collapse: collapse"
			>
				<tr>
					<td
						style="
							width: 223.1pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt">
							<span>Ditetapkan di Semarang</span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 223.1pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt"><span>pada tanggal <?php echo $pdf['nosurat_permohonan'];?></span></p>
					</td>
				</tr>
			</table>
			<p
				style="
					margin-right: 7.1pt;
					margin-left: 42.55pt;
					text-indent: 42.5pt;
					text-align: center;
				"
			>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p
				style="
					margin-right: 7.1pt;
					margin-left: 42.55pt;
					text-indent: 42.5pt;
					text-align: center;
				"
			>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="
					width: 262.25pt;
					margin-left: 250.55pt;
					border-collapse: collapse;
				"
			>
				<tr>
					<td
						style="
							width: 251.45pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: center">
							<span>KEPALA</span><span style="-aw-import: spaces">&#xa0; </span
							><span>DINAS</span>
						</p>
						<p style="text-align: center">
							<span>TENAGA KERJA DAN TRANSMIGRASI </span>
						</p>
						<p style="text-align: center"><span>PROVINSI JAWA TENGAH</span></p>
						<p style="text-align: center">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
						<p style="text-align: center">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
						<p style="text-align: center">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>

						<table width="500px" margin-left="300px">
						<tr>
							<td><img style="width: 100px; height: 100px;" src='data:image;base64,<?= $barcode;?>'"></td>
						</table>	

						<p style="text-align: center"><span>SAKINA ROSELLASARI</span></p>
						<p style="margin-right: 7.1pt; text-align: center">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
				</tr>
			</table>
			<br>
			<br>
			<p
				style="
					margin-right: 7.1pt;
					margin-left: 63.85pt;
					text-indent: -63.85pt;
					text-align: justify;
				"
			>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p
				style="
					margin-right: 7.1pt;
					margin-left: 63.85pt;
					text-indent: -63.85pt;
					text-align: justify;
				"
			>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table cellspacing="0" cellpadding="0" style="border-collapse: collapse">
				<tr>
					<td
						style="
							width: 53.05pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify">
							<span style="text-decoration: underline">SALINAN</span>
						</p>
					</td>
					<td
						style="
							width: 3.7pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<span>:</span>
						</p>
					</td>
					<td
						style="
							width: 386.1pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<span
								>Keputusan Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi
								Jawa Tengah ini disampaikan kepada Yth :</span
							>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 53.05pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
					<td
						style="
							width: 3.7pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
					<td
						style="
							width: 386.1pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<ol type="1" style="margin: 0pt; padding-left: 0pt">
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 14pt;
									text-align: justify;
									padding-left: 4pt;
								"
							>
								<span>Gubernur Jawa Tengah;</span>
							</li>
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 14pt;
									text-align: justify;
									padding-left: 4pt;
								"
							>
								<span
									>Pimpinan Perusahaan <?= $pdf['nama_perusahaan']; ?>;</span>
							</li>
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 14pt;
									text-align: justify;
									padding-left: 4pt;
								"
							>
								<span>Ketua P2K3;</span>
							</li>
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 14pt;
									text-align: justify;
									padding-left: 4pt;
								"
							>
								<span>Para Anggota P2K3.</span>
							</li>
						</ol>

					</td>
				</tr>
			</table>
			<p
				style="
					margin-right: 7.1pt;
					margin-left: 63.85pt;
					text-indent: -63.85pt;
					text-align: justify;
				"
			>
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; margin-left: 18pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; margin-left: 18pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; margin-left: 18pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="width: 510.35pt; border-collapse: collapse"
			>
				<tr>
					<td
						style="
							width: 60.1pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<span>Lampiran</span>
						</p>
					</td>
					<td
						style="
							width: 3.4pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="margin-right: 7.1pt; text-align: justify">
							<!-- menampilkan no surat permohonan dari data pdf-->
							<span>:</span>
						</p>
					</td>
					<td
						colspan="3"
						style="
							width: 414.45pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify">
							<span
								>Keputusan Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi
								Jawa Tengah</span
							>
						</p>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top"></td>
					<td style="vertical-align: top"></td>
					<td
						style="
							width: 74.25pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;">
						<p style=" text-align: justify">
							<span>Nomor</span>
						</p>
					</td>
					<td style="
							width: 74.25pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;">
						<p style="margin-right: 1.1pt; text-align: justify">
							<span>: <?php echo $pdf['nosurat_permohonan']; ?></span>
						</p>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top"></td>
					<td style="vertical-align: top"></td>
					<td
						style="
							width: 74.25pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
						"
					>
						<p style="text-align: justify">
							<span>Tanggal</span>
						</p>
					</td>
					<td>
						<p style="margin-right: 2.1pt; text-align: justify">
							<span>: <?php echo $pdf['nosurat_permohonan']; ?></span>
						</p>
					</td>
				</tr>
				<tr style="height: 0pt">
					<td style="width: 70.9pt"></td>
					<td style="width: 14.2pt"></td>
					<td style="width: 85.05pt"></td>
					<td style="width: 14.15pt"></td>
					<td style="width: 326.05pt"></td>
				</tr>
			</table>
			
			<p style="margin-right: 7.1pt; margin-left: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<ol type="I" style="margin: 0pt; padding-left: 0pt">
				<li
					style="
						margin-right: 7.1pt;
						margin-left: 12pt;
						text-align: justify;
						padding-left: 9.3pt;
					"
				>
					<span>DATA PERUSAHAAN</span>
				</li>
			</ol>
			<p style="margin-right: 7.1pt; margin-left: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<table
				cellspacing="0"
				cellpadding="0"
				style="width: 481.95pt; border-collapse: collapse"
			>
				<tr>
					<td
						style="
							width: 17.55pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>1.</span>
						</p>
					</td>
					<td
						style="
							width: 149.85pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>Nama Perusahaan</span>
						</p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
					</td>
					<td
						style="
							width: 268pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['nama_perusahaan']; ?></span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 17.55pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>2.</span>
						</p>
					</td>
					<td
						style="
							width: 149.85pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>Alamat</span>
						</p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
					</td>
					<td
						style="
							width: 268pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['alamat_perusahaan']; ?> <?= $pdf['kabupaten_kota']; ?> <?= $pdf['provinsi']; ?></span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 17.55pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>3.</span>
						</p>
					</td>
					<td
						style="
							width: 149.85pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>Jenis Usaha</span>
						</p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
					</td>
					<td
						style="
							width: 268pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['bidang_usaha']; ?></span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 17.55pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify; line-height: 115%">
							<span>4.</span>
						</p>
					</td>
					<td
						style="
							width: 149.85pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>Jumlah Tenaga Kerja</span>
						</p>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
					</td>
					<td
						style="
							width: 268pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['jumlah_naker']; ?></span><span style="-aw-import: spaces">&#xa0;</span
							><span>Orang</span
							><span style="-aw-import: spaces">&#xa0;&#xa0;&#xa0; </span
							><span style="-aw-import: spaces">&#xa0;&#xa0;&#xa0;&#xa0; </span>
						</p>
					</td>
				</tr>
				<tr>
					<td
						style="
							width: 17.55pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p style="text-align: justify; line-height: 115%">
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
					<td
						style="
							width: 149.85pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<ol type="a" style="margin: 0pt; padding-left: 0pt">
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 13.33pt;
									text-align: justify;
									line-height: 115%;
									padding-left: 2.57pt;
								"
							>
								<span>Laki – laki</span>
							</li>
							<li
								style="
									margin-right: 7.1pt;
									margin-left: 14pt;
									text-align: justify;
									line-height: 115%;
									padding-left: 1.9pt;
								"
							>
								<span>Perempuan</span>
							</li>
						</ol>
					</td>
					<td
						style="
							width: 3.35pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span>:</span>
						</p>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span style="-aw-import: ignore">&#xa0;</span>
						</p>
					</td>
					<td
						style="
							width: 268pt;
							padding-right: 5.4pt;
							padding-left: 5.4pt;
							vertical-align: top;
						"
					>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['jumlah_laki']; ?></span><span style="-aw-import: spaces">&#xa0;</span
							><span>Orang</span>
						</p>
						<p
							style="
								margin-right: 7.1pt;
								text-align: justify;
								line-height: 115%;
							"
						>
							<span><?= $pdf['jumlah_pr']; ?></span><span style="-aw-import: spaces">&#xa0; </span
							><span>Orang</span>
						</p>
					</td>
				</tr>
			</table>
			<ol start="2" type="I" style="margin: 0pt; padding-left: 0pt">
				<li
					style="
						margin-right: 7.1pt;
						margin-left: 15.99pt;
						text-align: justify;
						padding-left: 12.41pt;
					"
				>
					<span>SUSUNAN PENGURUS P2K3</span>
				</li>
			</ol>
			<p style="margin-right: 7.1pt; margin-left: 14.2pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
			<div style="text-align: center">
				<table
					cellspacing="0"
					cellpadding="0"
					style="
						width: 479.6pt;
						margin-right: auto;
						margin-left: auto;
						border-collapse: collapse;
					"
				>
					<thead>
						<tr style="height: 14.25pt">
							<td
								rowspan="2"
								style="
									width: 16.2pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p
									style="text-align: justify; line-height: 115%; font-size: 6pt"
								>
									<span style="font-weight: bold; -aw-import: ignore"
										>&#xa0;</span
									>
								</p>
								<p style="text-align: justify; line-height: 115%">
									<span style="font-weight: bold">NO</span>
								</p>
							</td>
							<td
								rowspan="2"
								style="
									width: 143.25pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p
									style="
										margin-right: 7.1pt;
										text-align: center;
										line-height: 115%;
										font-size: 6pt;
									"
								>
									<span style="font-weight: bold; -aw-import: ignore"
										>&#xa0;</span
									>
								</p>
								<p
									style="
										margin-right: 7.1pt;
										text-align: center;
										line-height: 115%;
									"
								>
									<span style="font-weight: bold">N A M A</span>
								</p>
							</td>
							<td
								colspan="4"
								style="
									width: 287pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p
									style="
										margin-right: 7.1pt;
										text-align: center;
										line-height: 115%;
									"
								>
									<span style="font-weight: bold">J A B A T A N</span>
								</p>
							</td>
						</tr>
						<tr style="height: 13.5pt">
							<td
								colspan="2"
								style="
									width: 104.5pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: center; line-height: 115%">
									<span style="font-weight: bold">DALAM P2K3</span>
								</p>
							</td>
							<td
								colspan="2"
								style="
									width: 171.7pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p
									style="
										margin-right: 7.1pt;
										text-align: center;
										line-height: 115%;
									"
								>
									<span style="font-weight: bold">DALAM PERUSAHAAN</span>
								</p>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr style="height: 21.85pt">
							<td
								style="
									width: 16.2pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: center"><span>1</span></p>
							</td>
							<td
								style="
									width: 143.25pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify">
									<!-- get nama pimpinan from controller pdf -->
									<span><?= $pdf['nama_pimpinan']; ?></span>

								</p>
							</td>
							<td
								colspan="2"
								style="
									width: 104.5pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify"><span>Ketua</span></p>
							</td>
							<td
								colspan="2"
								style="
									width: 171.7pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify; line-height: 115%">
									<span>General Manager</span>
								</p>
							</td>
						</tr>
						<tr style="height: 19.75pt">
							<td
								style="
									width: 16.2pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: center"><span>2</span></p>
							</td>
							<td
								style="
									width: 143.25pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify">
								<span><?= $pdf['nama_ketua']; ?></span>
								</p>
							</td>
							<td
								colspan="2"
								style="
									width: 104.5pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p><span>Sekretaris</span></p>
							</td>
							<td
								colspan="2"
								style="
									width: 171.7pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify; line-height: 115%">
									<span>HSE Officer</span>
								</p>
							</td>
						</tr>
						<!-- buat 18 anggota -->
						<?php $i = 1; 
						$namae=explode("|", $pdf['nama_anggota']);
						$jp=explode("|", $pdf['jabatan_ang_p2k3']);
						$jper=explode("|", $pdf['jabatan_perusahaan']);
						//count explode
						$count = count($namae);
						?>
						<?php for ($i=1; $i <= $count-1; $i++) { ?>
						<tr style="height: 19.75pt">
							<td
								style="
									width: 16.2pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: center"><span><?= $i; ?></span></p>
							</td>
							<td
								style="
									width: 143.25pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify">
									<span><?= $namae[$i]; ?></span>
								</p>
							</td>
							<td
								colspan="2"
								style="
									width: 104.5pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
							<span><?= $jp[$i]; ?></span>
							</td>
							<td
								colspan="2"
								style="
									width: 171.7pt;
									border-style: solid;
									border-width: 0.75pt;
									padding-right: 5.03pt;
									padding-left: 5.03pt;
									border: 0.5pt single;
								"
							>
								<p style="text-align: justify; line-height: 115%">
								<span><?= $jper[$i]; ?></span>
								</p>
							</td>
						</tr>
						<?php } ?>

						<!-- end 18 anggota -->
						<tr>
							<td
								style="
									border-top-style: solid;
									border-top-width: 0.75pt;
									vertical-align: top;
									border-top: 0.5pt single;
								"
							></td>
							<td
								style="
									border-top-style: solid;
									border-top-width: 0.75pt;
									vertical-align: top;
									border-top: 0.5pt single;
								"
							></td>
							<td
								style="
									border-top-style: solid;
									border-top-width: 0.75pt;
									vertical-align: top;
									border-top: 0.5pt single;
								"
							></td>
							<td
								colspan="2"
								style="
									width: 246.25pt;
									padding-right: 5.4pt;
									padding-left: 5.4pt;
									vertical-align: top;
								"
							>
								<p><span style="-aw-import: ignore">&#xa0;</span></p>
								<p style="text-align: center">
									<span style="-aw-import: ignore">&#xa0;</span>
								</p>
								<p style="text-align: center">
									<span>KEPALA</span
									><span style="-aw-import: spaces">&#xa0; </span
									><span>DINAS</span>
								</p>
								<p style="text-align: center">
									<span>TENAGA KERJA DAN TRANSMIGRASI </span>
								</p>
								<p style="text-align: center">
									<span>PROVINSI JAWA TENGAH</span>
								</p>
								<p style="text-align: center">
									<span style="-aw-import: ignore">&#xa0;</span>
								</p>
								<p style="text-align: center">
									<span style="-aw-import: ignore">&#xa0;</span>
								</p>
								<p style="text-align: center">
									<span style="-aw-import: ignore">&#xa0;</span>
								</p>
								<p style="text-align: center">
									<span>SAKINA ROSELLASARI</span>
								</p>
							</td>
							<td
								style="
									border-top-style: solid;
									border-top-width: 0.75pt;
									vertical-align: top;
									border-top: 0.5pt single;
								"
							></td>
						</tr>
						<tr>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td
								colspan="2"
								style="
									width: 246.25pt;
									padding-right: 5.4pt;
									padding-left: 5.4pt;
									vertical-align: top;
								"
							>
								<p><span style="-aw-import: ignore">&#xa0;</span></p>
							</td>
							<td style="vertical-align: top"></td>
						</tr>
						<tr>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td
								colspan="2"
								style="
									width: 246.25pt;
									padding-right: 5.4pt;
									padding-left: 5.4pt;
									vertical-align: top;
								"
							>
								<p><span style="-aw-import: ignore">&#xa0;</span></p>
							</td>
							<td style="vertical-align: top"></td>
						</tr>
						<tr>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td
								colspan="2"
								style="
									width: 246.25pt;
									padding-right: 5.4pt;
									padding-left: 5.4pt;
									vertical-align: top;
								"
							>
								<p><span style="-aw-import: ignore">&#xa0;</span></p>
							</td>
							<td style="vertical-align: top"></td>
						</tr>
						<tr>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td style="vertical-align: top"></td>
							<td
								colspan="2"
								style="
									width: 246.25pt;
									padding-right: 5.4pt;
									padding-left: 5.4pt;
									vertical-align: top;
								"
							>
								<p><span style="-aw-import: ignore">&#xa0;</span></p>
							</td>
							<td style="vertical-align: top"></td>
						</tr>
					</tbody>
					<tr style="height: 0pt">
						<td style="width: 27pt"></td>
						<td style="width: 154.05pt"></td>
						<td style="width: 34.95pt"></td>
						<td style="width: 80.35pt"></td>
						<td style="width: 176.7pt"></td>
						<td style="width: 5.8pt"></td>
					</tr>
				</table>
			</div>
			<p style="margin-right: 7.1pt; text-align: justify">
				<span style="-aw-import: ignore">&#xa0;</span>
			</p>
		</div>
	</body>

