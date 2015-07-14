<?php
					include_once "../../../include/koneksi.php";
				
					
					$type=$_FILES['file']['type'][0];
					$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name'][0]);
					$hasildata = $data->rowcount($sheet_index=0);
					// default nilai 
					$sukses = 0;
					$gagal = 0;

					for ($i=2; $i<=$hasildata; $i++)
					{
						$data1 = $data->val($i,1); 
						$data2 = $data->val($i,2);
						$data3 = $data->val($i,3);
						$data4 = $data->val($i,4);
						$data5 = $data->val($i,5);
						$data6 = $data->val($i,6);
						$data7 = $data->val($i,7);

						$query = "INSERT INTO petugas  VALUES ('$data1','$data2','$data3','$data4', '$data5', '$data6','$data7')";
						$hasil = mysql_query($query);

						if ($hasildata) $sukses++;
						else $gagal++;
					}
					echo "<pre>";
					echo "<b>import data selesai.</b> <br>";
					echo "Data yang berhasil di import : " . $sukses .  "<br>";
					echo "Data yang gagal diimport : ".$gagal .  "<br>";
					echo "</pre>";
?>
