<?php
error_reporting(0);
$url = 'https://edumin.dexignlab.com/xhtml/';
$objeto = $_GET['pg'];

$cont = substr_count($objeto, '/');

$c_objeto = explode('/',$objeto);

$anterior = '';

for($i=0; $i<=$cont; $i++){


	$c_objeto[$i] = str_replace('.','#',$c_objeto[$i]);

	if(!preg_match("/#/",$c_objeto[$i])){



$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url.$objeto);
$arqq = curl_exec($ch);
if($arqq == ''){

	$arqq = @file_get_contents($url.$objeto);

}
curl_close($ch);



		$arquivo_ajustado = str_replace('https://tarologamelissa.com.br','./',$arqq);
		$arquivo_ajustado = str_replace('google-analytics','',$arquivo_ajustado);
		$arquivo_ajustado = str_replace('google-site-verification','site-ver',$arquivo_ajustado);








		if($arquivo_ajustado!='' && preg_match('/div/',$arquivo_ajustado)){

	if(!file_exists($anterior.$c_objeto[$i])){
	mkdir($anterior.$c_objeto[$i], 0755);
	}

	if(!file_exists($anterior.$c_objeto[$i].'/default.htm')){

		$fp = fopen($anterior.$c_objeto[$i].'/default.htm','w+');
		fwrite($fp,$arquivo_ajustado);
		fclose($fp);

		$fp2 = fopen($anterior.$c_objeto[$i].'/.htaccess','w+');
		$dados = "\nRewriteEngine On\n\nRewriteCond %"."{SCRIPT_FILENAME} !"."-f\nRewriteCond %"."{SCRIPT_FILENAME} !"."-d\n\nRewriteRule ^"."(."."+)"."$ ../$"."1\n";
		//fwrite($fp2,$dados);
		fclose($fp2);


	}

		}else{

	if(!file_exists($anterior.$c_objeto[$i])){
	mkdir($anterior.$c_objeto[$i], 0755);
	}



		}




	}else{

	$c_objeto[$i] = str_replace('#','.',$c_objeto[$i]);
	$c_objeto[$i] = str_replace('?','#',$c_objeto[$i]);

		if(preg_match("/#/",$c_objeto[$i])){

		$arquivo = explode('?',$c_objeto[$i]);

		//if(file_exists($url.$objeto))){

		//if(preg_match('.html',$url.$objeto))){


$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url.$objeto);
$arqq = curl_exec($ch);
if($arqq == ''){

	$arqq = @file_get_contents($url.$objeto);

}
curl_close($ch);




		$arquivo_ajustado = str_replace('https://tarologamelissa.com.br','./',$arqq);
		$arquivo_ajustado = str_replace('google-analytics','',$arquivo_ajustado);
		$arquivo_ajustado = str_replace('google-site-verification','site-ver',$arquivo_ajustado);







		if(!preg_match('/./',$anterior.$arquivo[0])){

		if($arquivo_ajustado!=''){

			if(!file_exists($anterior.$c_objeto[$i].'/default.htm')){

				if(!preg_match('/.ttf/',$anterior.$arquivo[0]) AND !preg_match('/.woff/',$anterior.$arquivo[0]) AND !preg_match('/.svg/',$anterior.$arquivo[0]) AND !preg_match('/.jpg/',$anterior.$arquivo[0]) AND !preg_match('/.gif/',$anterior.$arquivo[0]) AND !preg_match('/.png/',$anterior.$arquivo[0]) AND !preg_match('/.bmp/',$anterior.$arquivo[0]) AND !preg_match('/.jpeg/',$anterior.$arquivo[0]) AND !preg_match('/.rar/',$anterior.$arquivo[0]) AND !preg_match('/.zip/',$anterior.$arquivo[0]) AND !preg_match('/.exe/',$anterior.$arquivo[0]) AND !preg_match('/.dll/',$anterior.$arquivo[0]) AND !preg_match('/.eot/',$anterior.$arquivo[0])){

					$fp = fopen($anterior.$arquivo[0],'w+');

					fwrite($fp,$arquivo_ajustado);

					fclose($fp);

				}else{

					copy($url.$objeto,$anterior.$arquivo[0]);

				}


		$fp2 = fopen($anterior.$c_objeto[$i].'/.htaccess','w+');
		$dados = "\nRewriteEngine On\n\nRewriteCond %"."{SCRIPT_FILENAME} !"."-f\nRewriteCond %"."{SCRIPT_FILENAME} !"."-d\n\nRewriteRule ^"."(."."+)"."$ ../$"."1\n";
		//fwrite($fp2,$dados);
		fclose($fp2);



			}

		}

		//}else{

		//$fp = fopen($anterior.$arquivo[0],'w+');
		//fwrite($fp,$arquivo_ajustado);
		//fclose($fp);

		//}

		}


		//}else{

		//copy($url.$objeto,$anterior.$arquivo[0]);

		//}



		//}

		}else{

		//if(file_exists($url.$objeto))){


		//if(preg_match('/.html/',$url.$objeto))){


$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$url.$objeto);
$arqq = curl_exec($ch);
if($arqq == ''){

	$arqq = @file_get_contents($url.$objeto);

}
curl_close($ch);


			$arquivo_ajustado = str_replace('https://tarologamelissa.com.br','./',$arqq);
			$arquivo_ajustado = str_replace('google-analytics','',$arquivo_ajustado);
			$arquivo_ajustado = str_replace('google-site-verification','site-ver',$arquivo_ajustado);






		if(!preg_match('/./',$anterior.$c_objeto[$i])){

		if($arquivo_ajustado!=''){

		if(!file_exists($anterior.$c_objeto[$i].'/default.htm')){

			if(!preg_match('/.ttf/',$anterior.$arquivo[0]) AND !preg_match('/.woff/',$anterior.$arquivo[0]) AND !preg_match('/.svg/',$anterior.$arquivo[0]) AND !preg_match('/.jpg/',$anterior.$arquivo[0]) AND !preg_match('/.gif/',$anterior.$arquivo[0]) AND !preg_match('/.png/',$anterior.$arquivo[0]) AND !preg_match('/.bmp/',$anterior.$arquivo[0]) AND !preg_match('/.jpeg/',$anterior.$arquivo[0]) AND !preg_match('/.rar/',$anterior.$arquivo[0]) AND !preg_match('/.zip/',$anterior.$arquivo[0]) AND !preg_match('/.exe/',$anterior.$arquivo[0]) AND !preg_match('/.dll/',$anterior.$arquivo[0]) AND !preg_match('/.eot/',$anterior.$arquivo[0])){

					$fp = fopen($anterior.$c_objeto[$i],'w+');

					fwrite($fp,$arquivo_ajustado);

					fclose($fp);

				}else{


					copy($url.$objeto,$anterior.$c_objeto[$i]);

				}


		$fp2 = fopen($anterior.$c_objeto[$i].'/.htaccess','w+');
		$dados = "\nRewriteEngine On\n\nRewriteCond %"."{SCRIPT_FILENAME} !"."-f\nRewriteCond %"."{SCRIPT_FILENAME} !"."-d\n\nRewriteRule ^"."(."."+)"."$ ../$"."1\n";
		//fwrite($fp2,$dados);
		fclose($fp2);




		}

		}


		//}else{

		//$fp = fopen($anterior.$c_objeto[$i],'w+');
		//fwrite($fp,$arquivo_ajustado);
		//fclose($fp);

		//}

		}


		//}else{

		if(!file_exists($anterior.$c_objeto[$i])){

		copy($url.$objeto,$anterior.$c_objeto[$i]);

		if(!preg_match('/.ttf/',$anterior.$c_objeto[$i])
        AND !preg_match('/.woff/',$anterior.$c_objeto[$i])
        AND !preg_match('/.svg/',$anterior.$c_objeto[$i])
        AND !preg_match('/.jpg/',$anterior.$c_objeto[$i])
        AND !preg_match('/.gif/',$anterior.$c_objeto[$i])
        AND !preg_match('/.png/',$anterior.$c_objeto[$i])
        AND !preg_match('/.bmp/',$anterior.$c_objeto[$i])
        AND !preg_match('/.jpeg/',$anterior.$c_objeto[$i])
        AND !preg_match('/.rar/',$anterior.$c_objeto[$i])
        AND !preg_match('/.zip/',$anterior.$c_objeto[$i])
        AND !preg_match('/.exe/',$anterior.$c_objeto[$i])
        AND !preg_match('/.dll/',$anterior.$c_objeto[$i])
        AND !preg_match('/.eot/',$anterior.$c_objeto[$i])){

				$arqq = @file_get_contents($anterior.$c_objeto[$i]);


				$arquivo_ajustado = str_replace('https://tarologamelissa.com.br','./',$arqq);
				$arquivo_ajustado = str_replace('google-analytics','',$arquivo_ajustado);
				$arquivo_ajustado = str_replace('google-site-verification','site-ver',$arquivo_ajustado);






				$fp = fopen($anterior.$c_objeto[$i],'w+');
				fwrite($fp,$arquivo_ajustado);
				fclose($fp);

		}

		}

		//}




		//}

		}


	}


//echo $i." - ". "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . " - ".$url.$anterior.$c_objeto[$i]."<br>";


$url2 .= $anterior . $c_objeto[$i];
$anterior .= $c_objeto[$i] . '/';

}

//echo "<script>location.href='/Blog/".$url2."';</script>";

//echo $arquivo_ajustado;
?>
<title>Construíndo ...</title>
<body bgcolor="orange">
<table width="100%" height="100%">
<tr>
<td align="center">
<?php if($arquivo_ajustado){ ?>
<p><font face="arial" size="7" color="#fff"><h2>Construindo ...</h2></font></p>
<?php }else{ ?>
<p><font face="arial" size="7" color="#fff"><h2>Erro! Não foi possível construir <?php echo $url2;?></h2></font></p>
<?php } ?>
</td>
</tr>
</table>
<?php if($arquivo_ajustado){ ?>
<script>
setTimeout('location.reload();',5000);
</script>
<?php } ?>
