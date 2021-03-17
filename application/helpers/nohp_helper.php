<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Credit to: https://www.esn.or.id/2010/06/23/merubah-format-nomor-hp-menjadi-62-dengan-php.html

function hp($string)
{
  $string = str_replace(" ","",$string);
  // kadang ada penulisan no hp 0811 239 345
  $string = str_replace("(","",$string);
  // kadang ada penulisan no hp (0274) 778787
  $string = str_replace(")","",$string);
  // kadang ada penulisan no hp (0274) 778787
  $string = str_replace(".","",$string);
  // kadang ada penulisan no hp 0811.239.345

  if(!preg_match('/[^+0-9]/',trim($string)))
  // cek apakah no hp mengandung karakter + dan 0-9
  {
    if(substr(trim($string), 0, 3)=='+62')
    // cek apakah no hp karakter 1-3 adalah +62
    {
      $string = trim($string);
    }
    elseif(substr(trim($string), 0, 1)=='0')
    // cek apakah no hp karakter 1 adalah 0
    {
      $string = '+62'.substr(trim($string), 1);
    }
    // fungsi trim() untuk menghilangan
    // spasi yang ada didepan/belakang
  }
    else
    {
      $string = 'Format no hp yang dimasukkan tidak lengkap atau salah!';
    }

  return $string;
}
