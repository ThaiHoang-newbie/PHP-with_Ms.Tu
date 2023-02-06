<?php
# Nhập tháng bất kỳ (gồm có ngày tháng năm), kiểm tra tính hợp lệ của ngày tháng vừa nhập


$ngay = 14;
$thang = 3;
$nam = 2023;


switch ($thang) {
  case 1:
  case 3:
  case 5:
  case 7:
  case 8:
  case 10:
  case 12:
    if ($ngay > 0 and $ngay <= 31) {
      echo ("Ngay $ngay thang $thang nam $nam hop le\n");
      break;
    } else {
      echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
      break;
    }

  case 4:
  case 6:
  case 9:
  case 11:
    if ($ngay <= 30 && $ngay > 0) {
      echo ("Ngay $ngay thang $thang nam $nam hop le\n");
      break;
    } else {
      echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
      break;
    }

  case 2:
    if ($ngay <= 28 && $ngay > 0) {
      echo ("Ngay $ngay thang $thang nam $nam hop le\n");
      break;
    } else {
      echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
      break;
    }
  default: {
      echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
      break;
    }
}